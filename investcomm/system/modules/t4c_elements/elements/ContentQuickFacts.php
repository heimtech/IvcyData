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
 * Class ContentQuickFacts
 *
 * Front end content element "Quick Facts".
 */
class ContentQuickFacts extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_quick_facts';


    /**
     * Generate the content element
     */
    protected function compile()
    {
		$this->Template->position = $this->t4c_qf_number_position;

		if (TL_MODE == 'BE')
        {
		   	$GLOBALS['TL_JAVASCRIPT']['t4c_jquery'] = 'assets/jquery/core/' . $GLOBALS['TL_ASSETS']['JQUERY'] . '/jquery.min.js';
			$GLOBALS['TL_JAVASCRIPT']['t4c_jquery_con_confilct'] = 'system/modules/t4c_elements/assets/js/jquery.noconflict.js';
			$GLOBALS['TL_JAVASCRIPT']['t4c_waypoints'] = 'system/modules/t4c_elements/assets/js/jquery.waypoints.min.js';
        }
		
		$GLOBALS['TL_JAVASCRIPT']['t4c_quickfacts'] = 'system/modules/t4c_elements/assets/js/countUp.min.js';
		$GLOBALS['TL_JAVASCRIPT']['t4c_quickfacts_js'] = 'system/modules/t4c_elements/assets/js/t4c_quick_facts.js';
	
    }
}