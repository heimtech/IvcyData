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
 * Class ContentCircularCountdowns
 *
 * Front end content element "Circular Countdowns".
 */
class ContentCircularCountdowns extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_circular_countdowns';


    /**
     * Generate the content element
     */
    protected function compile()
    {
		$GLOBALS['TL_CSS']['t4c_circular_countdowns_css'] = 'system/modules/t4c_elements/assets/css/TimeCircles.css';
		$GLOBALS['TL_JAVASCRIPT']['t4c_circular_countdowns_js'] = 'system/modules/t4c_elements/assets/js/TimeCircles.js';
		
		if ($bgColor = \themes4contao\themes4contao::compileColor( $this->t4c_bgcolor )){
			$this->Template->t4c_bgcolor = $bgColor;
		}
		
		if ($daysColor = \themes4contao\themes4contao::compileColor( $this->t4c_cc_days_color )){
			$this->Template->t4c_cc_days_color = $daysColor;
		}
		
		if ($hoursColor = \themes4contao\themes4contao::compileColor( $this->t4c_cc_hours_color )){
			$this->Template->t4c_cc_hours_color = $hoursColor;
		}
		
		if ($minutesColor = \themes4contao\themes4contao::compileColor( $this->t4c_cc_minutes_color )){
			$this->Template->t4c_cc_minutes_color = $minutesColor;
		}
		
		if ($secondsColor = \themes4contao\themes4contao::compileColor( $this->t4c_cc_seconds_color )){
			$this->Template->t4c_cc_seconds_color = $secondsColor;
		}
    }
}