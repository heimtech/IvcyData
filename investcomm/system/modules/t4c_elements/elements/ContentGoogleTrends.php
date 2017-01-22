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
 * Class ContentGoogleTrends
 *
 * Front end content element "Google Trends".
 */
class ContentGoogleTrends extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_google_trends';


    /**
     * Generate the content element
     */
    protected function compile()
    {
		$this->Template->t4c_googleID = substr(number_format(time() * mt_rand(),0,'',''),0,10); 
    }
}