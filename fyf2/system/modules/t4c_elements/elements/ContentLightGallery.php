<?php

/**
 * t4c_light_gallery extension for Contao Open Source CMS
 *
 * Copyright (C) 2015 themes4contao
 *
 * @package t4c_light_gallery
 * @author  Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */

namespace themes4contao;

/**
 * Class ContentCircleProgress
 *
 * Front end content element "Circle Progress".
 */
class ContentLightGallery extends \ContentGallery
{

 

    public function generate()
	{
		
		$this->galleryTpl = 'gallery_t4c_lightGallery';
		return parent::generate();
	}
	
	/**
     * Generate the content element
     */
    protected function compile()
	{
		
		$GLOBALS['TL_CSS']['t4c_light_gallery'] = 'system/modules/t4c_elements/assets/css/lightGallery.css';
		$GLOBALS['TL_JAVASCRIPT']['t4c_light_gallery'] = 'system/modules/t4c_elements/assets/js/lightGallery.min.js';
		
		$this->fullsize = 1;
		$this->t4c_size_mobile = deserialize($this->t4c_size_mobile);
		$this->t4c_lg_thumb_width = $this->t4c_lg_thumb_width;
		$this->t4c_lg_thumb_margin = $this->t4c_lg_thumb_margin;
		$this->t4c_lg_swipe = deserialize($this->t4c_lg_swipe);
		$this->t4c_lg_swipe = $this->t4c_lg_swipe;
		$this->t4c_lg_mobile_src_width = $this->t4c_lg_mobile_src_width;
		
		return parent::compile();
	}
}