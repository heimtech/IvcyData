<?php

/**
 * t4c_elements extension for Contao Open Source CMS
 *
 * Copyright (C) 2015 themes4contao
 *
 * @package t4c_elements
 * @author  Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */

namespace themes4contao;

/**
 * Class ContentAdvancedBanner
 *
 * Front end content element "Advanced Banner".
 */
class ContentAdvancedBanner extends \ContentImage
{

 

    /**
    * Template
    * @var string
    */
    protected $strTemplate = 'ce_t4c_advanced_banner';
	
	/**
     * Generate the content element
     */
    protected function compile()
	{
		
		if ($textColor = \themes4contao\themes4contao::compileColor( $this->t4c_textcolor )){
			$style .= 'color:' .  $textColor . ';';
			$GLOBALS['T4C_CSS'][] = '#t4c_advanced_banner_' . $this->id . ' h2,#t4c_advanced_banner_' . $this->id . ' p {color: ' . $textColor . ';}';
		}
		
		$GLOBALS['TL_CSS']['t4c_advanced_banner1'] = 'system/modules/t4c_elements/assets/css/advanced_banner1.css';
		return parent::compile();
	}
}