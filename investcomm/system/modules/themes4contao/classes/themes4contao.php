<?php

/**
 * themes4contao extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package themes4contao
 * @author  Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @license Commercial
 */

namespace themes4contao;

/**
 * Class themes4contao
 *
 * Provides miscellaneous methods used by themes4contao themes.
 */
class themes4contao extends \Frontend
{

    /**
     * Current configuration
     * @var object
     */
    protected static $objConfig = null;

    /**
     * Config cache
     * @var array
     */
    private static $arrConfigCache = array();
	
    /**
     * Cookie key
     * @var string
     */
    private static $strCookieKey = 'T4C_CONFIG';


    /**
     * Initialize the system
     */
    public function initializeSystem()
    {
        if (\Input::get('t4c_config'))
        {
            $objConfig = \Database::getInstance()->prepare("SELECT id FROM tl_themes4contao WHERE id=?")
                                                 ->limit(1)
                                                 ->execute(\Input::get('t4c_config'));

            if ($objConfig->numRows)
            {
                $this->setCookie(static::$strCookieKey, $objConfig->id, time() + 3600);
            }

            $this->redirect(preg_replace('/(\?|\&)t4c_config\=[0-9]+/', '', \Environment::get('request')));
        }

        $this->loadDataContainer('tl_themes4contao');
    }

    /**
     * Add the Less stylesheets
     * @param object
     * @param object
     * @param object
     */
    public function addCssStyles(\PageModel $objPage, \LayoutModel $objLayout, \PageRegular $objPageRegular)
    {
        
        // Apply the configuration settings
        if (($objConfig = static::getCurrentConfiguration()) !== null)
        {
            $this->loadDataContainer('tl_themes4contao');
            $arrVariables = static::generateSassVariables($objConfig);
        }
            $strCssFile = 'assets/css/t4c_pro_config_' . $objConfig->id . '.scss';
		  
			// Compile a file if it does not exist
            if (!is_file(TL_ROOT . '/' . $strCssFile) || $GLOBALS['TL_CONFIG']['bypassCache'])
            {
                
				// Import scss files
				$strScssFiles = '@import "../../system/modules/themes4contao_pro/assets/scss/variables";'."\n";
				
				if ($objConfig->pro_add_toolbar){
					$strScssFiles .= '@import "../../system/modules/themes4contao_pro/assets/scss/toolbar";'."\n";
				}			
				$strScssFiles .= '@import "../../system/modules/themes4contao_pro/assets/scss/' . $objConfig->pro_header_style . '";'."\n";			
				
				foreach ($GLOBALS['T4C_SCSS'] as $file){
					$strScssFiles .= '@import "../../system/modules/themes4contao_pro/assets/scss/' . $file .'";'."\n";				 
				}
				
				$objFile = new \File($strCssFile);
                try
                {
					$objFile->write(implode("\n",$arrVariables) . $strScssFiles);
                }
                catch (\Exception $e)
                {
                    \System::log('Could not compile CSS file "' . $strCssFile  . '" with error: ' . $e->getMessage(), __METHOD__, TL_ERROR);
                }

               $objFile->close();
           }

           $GLOBALS['TL_USER_CSS'][] = $strCssFile . '|screen|static';
		   
        // Add the custom styles
        if ($objConfig->custom != '')
        {
            $GLOBALS['TL_HEAD'][] = '<style>' . $objConfig->custom . '</style>';
        }
		
		 // Add the custom javascript
        if ($objConfig->custom_js != '')
        {
            $GLOBALS['TL_BODY'][] = '<script type="text/javascript">' . $objConfig->custom_js . '</script>';
        }
    }
	
	
	/**
     * Get the configuration value
     * @param string
     * @param boolean
     * @return mixed
     */
    public static function getSocialList($strKey)
    {
		
		$social = deserialize(static::get($strKey));
		
		$socialList = '<ul class="t4c_social_list">';
		foreach ($social as $item )
		{
			$socialList .='<li><a href="' . $item['pro_social_networks_link'] . '" target="_blank"><i class="' . $item['pro_social_networks_icon'] . '"></i></a></li>';
		}
		$socialList .= '</ul>';
        return $socialList;
    }


    /**
     * Generate LESS variables from config file
     * @param object
     * @param boolean
     * @return array
     */
    public static function generateSassVariables($objConfig, $blnLessFormat=false)
    {
        if (!isset($GLOBALS['TL_DCA']['tl_themes4contao']))
        {
            \System::log('Could not generate Sass variables because the themes4contao data container is not loaded!', __METHOD__, TL_ERROR);
            return array();
        }

        $arrVariables = array();

        foreach ($GLOBALS['TL_DCA']['tl_themes4contao']['fields'] as $strField => $arrField)
        {
            if (!$arrField['sass'])
            {
                continue;
            }
			
				$varValue = $objConfig->$strField;	
				// Apply special formatting
				switch ($arrField['sass']['format'])
				{
					case 'color':
						$color = '';
						if ($color = static::compileColor($varValue)){
							$varValue = $arrField['sass']['name'] . ':' . $color . ';';
						} else {
							$varValue = '';
						}
					break;
					
					case 'bottom-border':
						$borderColor = '';
						if($borderColor = static::compileColor($varValue)){
							$varValue = $field['name'] . '{border-bottom: 1px solid ' . $borderColor . ';}';
						} else {
							$varValue = '';
						}
					break;
	
					case 'image':
						if ($GLOBALS['TL_DCA']['tl_themes4contao']['fields'][$strField]['inputType'] == 'fileTree' && $varValue)
						{
							$objFile = \FilesModel::findByPk($varValue);
	
							if ($objFile !== null)
							{
								$varValue = $objFile->path;
							}
							else
							{
								$varValue = null;
							}
						}
	
						if (strlen($varValue))
						{
							$varValue = $arrField['sass']['name'] . ':' . 'url("../../' . $varValue . '");';
						}
						break;
	
					case 'trbl':
						$value = deserialize($varValue);
	
						if (is_array($value) && ($value['top'] != '' || $value['right'] != '' || $value['bottom'] != '' || $value['left'] != ''))
						{
							$top = intval($value['top']);
							$right = intval($value['right']);
							$bottom = intval($value['bottom']);
							$left = intval($value['left']);
							$borderradius = '';
	
							// Try to shorten the definition
							if ($top == $right && $top == $bottom && $top == $left)
							{
								$borderradius = $top . (($top === '0') ? '' : $value['unit']) . ';';
							}
							elseif ($top == $bottom && $right == $left)
							{
								$borderradius = $top . (($top === '0') ? '' : $value['unit']) . ' ' . $right . (($right === '0') ? '' : $value['unit']) . ';';
							}
							elseif ($top != $bottom && $right == $left)
							{
								$borderradius = $top . (($top === '0') ? '' : $value['unit']) . ' ' . $right . (($right === '0') ? '' : $value['unit']) . ' ' . $bottom . (($bottom === '0') ? '' : $value['unit']) . ';';
							}
							else
							{
								$borderradius .= $top . (($top === '0') ? '' : $value['unit']) . ' ' . $right . (($right === '0') ? '' : $value['unit']) . ' ' . $bottom . (($bottom === '0') ? '' : $value['unit']) . ' ' . $left . (($left === '0') ? '' : $value['unit']) . ';';
							}
	
							$varValue =  $arrField['sass']['name'] . ':' .  $borderradius;
						}
						else
						{
							$varValue = null;
						}
						break;
	
					case 'value':
						if (strlen($varValue)){
							$varValue = $arrField['sass']['name'] . ':' . $varValue . ';';
						} else {
							$varValue = '';
						}
					break;
					
					case 'height':
						if (strlen($varValue)){
							$varValue = $arrField['sass']['name'] . ':' . $varValue . 'px;';
						} else {
							$varValue = '';
						}
					break;
					
					case 'border-bottom':
						$color = '';
						if ($color = static::compileColor($varValue)){
							$varValue = $arrField['sass']['name'] . ': 1px solid' . $color . ';';
						} else {
							$varValue = '';
						}
					break;
						
					case 'unit':
						$value = deserialize($varValue, true);
	
						if (!strlen($value['value']))
						{
							$varValue = null;
						}
						else
						{
							$varValue = $arrField['sass']['name'] . ':' . $value['value'] . $value['unit'] . ';';
						}
					break;
					
					case 'page-margin':
						$value = deserialize($varValue, true);
						if (is_array($value) && ($value[0] != '' || $value[1] != ''))
						{							
							$varValue =  $arrField['sass']['name'] . ':' . intval( $value[0] )  . 'px auto ' . intval( $value[1] )  . 'px auto;';
						}
						else
						{
							$varValue = null;
						}
					break;
					
					case 'content-padding':
						$value = deserialize($varValue, true);
						if (is_array($value) && ($value[0] != '' || $value[1] != ''))
						{							
							$varValue =  $arrField['sass']['name'] . ':' . intval( $value[0] )  . 'px 0 ' . intval( $value[1] )  . 'px 0;';
						}
						else
						{
							$varValue = null;
						}
					break;
					
					case 'content-width':
						if ($varValue){
							if ($varValue < 970){
								$varValue =  '$mediumWidth:' . $varValue . 'px;' . $arrField['sass']['name'] . ':' . $varValue . 'px;';
							}	else {
								$varValue =  $arrField['sass']['name'] . ':' . $varValue . 'px;';
							}
						} else {
							$varValue = '';
						}
					break;
					
				}
				if ($varValue){
					$arrVariables[] = $varValue;
				}
			
        }
		
        return array_filter($arrVariables);
    }


    /**
     * Replace the config tags
     * @param string
     * @return mixed
     */
    public function replaceConfigTags($strTag)
    {
        $arrTag = explode('::', $strTag);

        if ($arrTag[0] == 't4c')
        {
            $varValue = static::get($arrTag[1], true);

            // Format the value
            switch ($arrTag[2])
            {
                case 'image':
                    if (is_file(TL_ROOT . '/' . $varValue)) {
                        $imgSize = @getimagesize(TL_ROOT . '/' . $varValue);
                        $varValue = \Image::getHtml(\Image::get($varValue, $imgSize[0], $imgSize[1]));
                    }
                    break;
            }

            return $varValue;
        }

        return false;
    }


    /**
     * Get the configuration value
     * @param string
     * @param boolean
     * @return mixed
     */
    public static function get($strKey, $blnInsertTag=false)
    {
        if (!isset(static::$arrConfigCache[$strKey]))
        {
            $objConfig = static::getCurrentConfiguration();
            $varValue = $objConfig->$strKey;
            $arrField = $GLOBALS['TL_DCA']['tl_themes4contao']['fields'][$strKey];

            // File
            if ($arrField['inputType'] == 'fileTree')
            {
                $objFile = \FilesModel::findByPk($varValue);

                if ($objFile !== null)
                {
                    $varValue = $objFile->path;
                }
            }

            $callback = $arrField['t4c_callback'];

            // Use the callback
            if (is_array($callback) && !empty($callback))
            {
                $varValue = static::importStatic($callback[0])->$callback[1]($strKey, $objConfig, $blnInsertTag);
            }
            elseif (is_callable($callback))
            {
                $varValue = call_user_func($callback, $strKey, $objConfig, $blnInsertTag);
            }

            static::$arrConfigCache[$strKey] = $varValue;
        }

        return static::$arrConfigCache[$strKey];
    }
	
	 /**
     * Get the configuration value
     * @param string
     * @param boolean
     * @return mixed
     */
    public static function getMultiple(array $arrKey)
    {
		$tmpArray = array();
		foreach ($arrKey as $strKey )
		{
			$tmpArray[$strKey] = static::get($strKey);
		}
        return $tmpArray;
    }
	
	
	 /**
     * Get the configuration value
     * @param string
     * @param boolean
     * @return mixed
     */
    public static function getAll($blnInsertTag=false)
    {
        
		$objConfig = static::getCurrentConfiguration();		
		$strKeys = $objConfig->fetchAllAssoc();
		foreach($strKeys[0] as $strKey=>$value){
			if (!isset(static::$arrConfigCache[$strKey]))
			{
				
				$varValue = $value;
				$arrField = $GLOBALS['TL_DCA']['tl_themes4contao']['fields'][$strKey];
	
				// File
				if ($arrField['inputType'] == 'fileTree')
				{
					$objFile = \FilesModel::findByPk($varValue);
	
					if ($objFile !== null)
					{
						$varValue = $objFile->path;
					}
				}
	
				$callback = $arrField['t4c_callback'];
	
				// Use the callback
				if (is_array($callback) && !empty($callback))
				{
					$varValue = static::importStatic($callback[0])->$callback[1]($strKey, $objConfig, $blnInsertTag);
				}
				elseif (is_callable($callback))
				{
					$varValue = call_user_func($callback, $strKey, $objConfig, $blnInsertTag);
				}
	
				static::$arrConfigCache[$strKey] = $varValue;
			}
		}
		return static::$arrConfigCache;
    }
	
    /**
     * Get the current configuration
     * @return mixed
     */
    public static function getCurrentConfiguration()
    {
        if (static::$objConfig === null)
        {
            global $objPage;
            $objLayout = \LayoutModel::findByPk($objPage->layout);

            if ($objLayout !== null)
            {
                $intConfig = intval($objLayout->t4c_configuration);

                // Load from cookie
                if (\Input::cookie(static::$strCookieKey))
                {
                    $intConfig = \Input::cookie(static::$strCookieKey);
                }

                // Get configuration
                if ($intConfig)
                {
                    $objConfig = \Database::getInstance()->prepare("SELECT * FROM tl_themes4contao WHERE id=?")
                                                         ->limit(1)
                                                         ->execute($intConfig);
                }
                // Get fallback
                else
                {
                    $objConfig = \Database::getInstance()->prepare("SELECT * FROM tl_themes4contao WHERE fallback=1 AND pid=?")
                                                         ->limit(1)
                                                         ->execute($objLayout->pid);
                }

                static::$objConfig = $objConfig->numRows ? $objConfig : null;
            }
        }

        return static::$objConfig;
    }


    /**
     * Compile a color value and return a hex or rgba color
     * @param mixed
     * @return string
     */
    public static function compileColor($color)
    {
        $color = deserialize($color);

        if (!is_array($color))
        {
            if ($color == '')
            {
                return '';
            }

            return '#' . static::shortenHexColor($color);
        }
        elseif (!isset($color[1]) || empty($color[1]))
        {
            if (!$color[0] && !$color[1])
            {
                return '';
            }

            return '#' . static::shortenHexColor($color[0]);
        }
        else
        {
            return 'rgba(' . implode(',', static::convertHexColor($color[0])) . ','. ($color[1] / 100) .')';
        }
    }

    /**
     * Try to shorten a hex color
     * @param string
     * @return string
     */
    protected static function shortenHexColor($color)
    {
        if ($color[0] == $color[1] && $color[2] == $color[3] && $color[4] == $color[5])
        {
            return $color[0] . $color[2] . $color[4];
        }

        return $color;
    }

    /**
     * Convert hex colors to rgb
     * @param string
     * @return array
     * @see http://de3.php.net/manual/de/function.hexdec.php#99478
     */
    protected static function convertHexColor($color)
    {
        $rgb = array();

        // Try to convert using bitwise operation
        if (strlen($color) == 6)
        {
            $dec = hexdec($color);
            $rgb['red'] = 0xFF & ($dec >> 0x10);
            $rgb['green'] = 0xFF & ($dec >> 0x8);
            $rgb['blue'] = 0xFF & $dec;
        }

        // Shorthand notation
        elseif (strlen($color) == 3)
        {
            $rgb['red'] = hexdec(str_repeat(substr($color, 0, 1), 2));
            $rgb['green'] = hexdec(str_repeat(substr($color, 1, 1), 2));
            $rgb['blue'] = hexdec(str_repeat(substr($color, 2, 1), 2));
        }

        return $rgb;
    }
}
