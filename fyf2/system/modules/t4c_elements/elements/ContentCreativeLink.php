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
 * Class ContentCreativeLink
 *
 * Front end content element "Creative Link".
 */
class ContentCreativeLink extends \ContentHyperlink
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_creative_link';


    /**
     * Generate the content element
     */
    protected function compile()
    {  
		 $GLOBALS['TL_CSS']['t4c_creative_links'] = 'system/modules/t4c_elements/assets/css/creative_links.css';
		 return parent::compile();
    }
}