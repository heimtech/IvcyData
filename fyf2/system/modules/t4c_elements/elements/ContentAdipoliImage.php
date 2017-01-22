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
 * Class ContentAdipoliImage
 *
 * Front end content element "Adipoli Image".
 */
class ContentAdipoliImage extends \ContentImage
{

 

    /**
    * Template
    * @var string
    */
    protected $strTemplate = 'ce_t4c_adipoli_image';
	
	/**
     * Generate the content element
     */
    protected function compile()
	{
		
		$GLOBALS['TL_CSS']['t4c_adipoli_image'] = 'system/modules/t4c_elements/assets/css/adipoli.css';
		$GLOBALS['TL_JAVASCRIPT']['t4c_adipoli_image'] = 'system/modules/t4c_elements/assets/js/jquery.adipoli.min.js';
		$textcolor = '';
		$fill_color = '';
		
		if ($textcolor =  \themes4contao\themes4contao::compileColor( $this->t4c_textcolor )){
			$this->Template->textcolor = $textcolor ;
		}
		
		if ($fill_color =  \themes4contao\themes4contao::compileColor( $this->t4c_adipoli_fill_color)){
			$this->Template->fill_color =  $fill_color;
		}
		
		return parent::compile();
	}
}