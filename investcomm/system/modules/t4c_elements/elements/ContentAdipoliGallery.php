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
 * Class ContentAdipolliGallery
 *
 * Front end content element "Adipoli Gallery".
 */
class ContentAdipoliGallery extends \ContentGallery
{

 

    public function generate()
	{
		
		$this->galleryTpl = 'gallery_t4c_adipoliGallery';
		return parent::generate();
	}
	
	/**
     * Generate the content element
     */
    protected function compile()
	{
		
		$GLOBALS['TL_CSS']['t4c_adipoli_image'] = 'system/modules/t4c_elements/assets/css/adipoli.css';
		$GLOBALS['TL_JAVASCRIPT']['t4c_adipoli_image'] = 'system/modules/t4c_elements/assets/js/jquery.adipoli.min.js';
		$fillColor = '';
		
		if( $fillColor = \themes4contao\themes4contao::compileColor( $this->t4c_adipoli_fill_color )){
			$this->t4c_adipoli_fill_color = $fillColor;
		} else {
			$this->t4c_adipoli_fill_color  = '';
		}
		
		return parent::compile();
	}
}