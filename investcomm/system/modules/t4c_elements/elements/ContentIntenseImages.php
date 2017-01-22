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
 * Class ContentIntenseImages
 *
 * Front end content element "Intense Images".
 */
class ContentIntenseImages extends \ContentImage
{

 

    /**
    * Template
    * @var string
    */
    protected $strTemplate = 'ce_t4c_intense_images';
	
	/**
     * Generate the content element
     */
    protected function compile()
	{
		$GLOBALS['TL_JAVASCRIPT']['t4c_intense_images'] = 'system/modules/t4c_elements/assets/js/intense.min.js';
		$this->fullsize = 1;
		
		return parent::compile();
	}
}