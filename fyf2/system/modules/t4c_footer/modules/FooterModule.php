<?php

/**
 * Footer extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package t4c_footer
 * @author  Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */


namespace themes4contao;


/**
 * Class MegaMenuModule
 *
 * Front end module "Mega menu".
 */
class FooterModule extends \Module
{
	
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'mod_t4c_footer';


    /**
     * Display a wildcard in the back end
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE')
        {
            $objTemplate = new \BackendTemplate('be_wildcard');

            $objTemplate->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['t4c_footer'][0]) . ' ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

            return $objTemplate->parse();
        }

        return parent::generate();
    }


    /**
     * Generate the module
     */
    protected function compile()
    {
		
		$footer = deserialize($this->t4c_footer);
		
		if (count($footer) > 0){
			
			$objItems = FooterModel::findMultipleByIds($footer);
			
			$arrElements = array();
			while ($objItems->next()){
				$arrElements[] = $this->generateItem($objItems);
			}
			
			$this->Template->items = $arrElements;
			
		}
    }
	
	function generateItem($objItems){
		$objTemplate = new \FrontendTemplate('t4c_footer_item');
		$objTemplate->setData($objItems->row());
				
		$objTemplate->content = '';
        $objElement = \ContentModel::findPublishedByPidAndTable($objItems->id, 'tl_footer');
		
		$style = '';
		$bgStyle = '';
		
		if ($fontcolor = \themes4contao\themes4contao::compileColor( $objItems->fontcolor )){
			$style .= 'color:' . $fontcolor . ';';
		}
							
		if ($bgcolor = \themes4contao\themes4contao::compileColor( $objItems->bgcolor )){
			$bgStyle .= 'background-color:' . $bgcolor . ';';
		}
		if( $objItems->image_settings == 'cover' ){
			$bgStyle .= '-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;';
			$bgStyle .= 'background-repeat: no-repeat;';
			if ($objItems->image_position){
				$bgStyle .= 'background-position: ' . $objItems->image_position . ';';
			}
		} elseif( $objItems->image_settings == 'contain' ){
			$bgStyle .= '-webkit-background-size: contain; -moz-background-size: contain; -o-background-size: contain;  background-size: contain;';
			$bgStyle .= 'background-repeat: no-repeat;';
			if ($objItems->image_position){
				$bgStyle .= 'background-position: ' . $objItems->image_position . ';';
			}
		} else {
			if ($objItems->image_settings){
				$bgStyle .= 'background-repeat: ' . $objItems->image_settings . ';';
			}
			
			if ($objItems->image_position){
				$bgStyle .= 'background-position: ' . $objItems->image_position . ';';
			}
		}
		
		//Row padding
		$rowPadding = deserialize($objItems->padding);
		if ($rowPadding[0]){
			$bgStyle .= 'padding-top:' . $rowPadding[0] . 'px;';
		}
			
		if ($rowPadding[1]){
			$bgStyle .= 'padding-bottom:' . $rowPadding[1] . 'px;';
		}
		
		//Row Margin
		$rowMargin = deserialize($objItems->margin);
		if ($rowMargin[0]){
			$style .= 'margin-top:' . $rowMargin[0] . 'px;';
		}
			
		if ($rowMargin[1]){
			$style .= 'margin-bottom:' . $rowMargin[1] . 'px;';
		}
		
							
		if( $objItems->image ){
			$bg_image = \FilesModel::findByPk($objItems->image);
			$bgStyle .= 'background-image: url(' . $bg_image->path . ');';
		}
		if ($style || $bgStyle){
			if ($objItems->layout == 'boxed'){
				$GLOBALS['T4C_CSS'][] = '.t4c_footer_item_' . $objTemplate->id . '{ ' . $style . '}';
				$GLOBALS['T4C_CSS'][] = '.t4c_footer_item_' . $objTemplate->id . ' .container { ' . $bgStyle . '}';
			} else {
				$GLOBALS['T4C_CSS'][] = '.t4c_footer_item_' . $objTemplate->id . '{ ' . $style . $bgStyle . '}';
			}
		 }
		 
		if ( $fontcolor ){
			$GLOBALS['T4C_CSS'][] = '.t4c_footer_item_' . $objTemplate->id . ' h1,.t4c_footer_item_' . $objTemplate->id . ' h2,.t4c_footer_item_' . $objTemplate->id . ' h3,.t4c_footer_item_' . $objTemplate->id . ' h4,.t4c_footer_item_' . $objTemplate->id . ' h5,.t4c_footer_item_' . $objTemplate->id . ' h6,.t4c_footer_item_' . $objTemplate->id . ' strong,.t4c_footer_item_' . $objTemplate->id . ' a{color:' . $fontcolor . '}';
		}
		$objTemplate->class = $objItems->cssClass;
		
		// Generate the content elements
		if ($objElement !== null)
		{
			while ($objElement->next())
			{
				$objTemplate->content .= $this->getContentElement($objElement->id);
			}
		}
		
		return $objTemplate->parse();
	}
}
