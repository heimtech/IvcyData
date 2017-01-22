<?php

/**
 * t4c_elements extension for Contao Open Source CMS
 *
 * Copyright (C) 2015 themes4contao
 *
 * @package t4c_elements
 * @author Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */

namespace themes4contao;

/**
 * Class ContentFlipCLock
 *
 * Front end content element "Flip CLock".
 */
class ContentFlipCLock extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_flip_clock';


    /**
     * Generate the content element
     */
    protected function compile()
    {
		if (TL_MODE == 'BE')
        {
		   	$GLOBALS['TL_JAVASCRIPT']['t4c_jquery'] = 'assets/jquery/core/' . $GLOBALS['TL_ASSETS']['JQUERY'] . '/jquery.min.js';
			$GLOBALS['TL_JAVASCRIPT']['t4c_jquery_con_confilct'] = 'system/modules/t4c_elements/assets/js/jquery.noconflict.js';
        }
		
		$GLOBALS['TL_JAVASCRIPT']['t4c_flip_clock'] = 'system/modules/t4c_elements/assets/js/flipclock.min.js';
		
		$this->Template->random = substr(number_format(time() * mt_rand(),0,'',''),0,10);
				
		$cssId = $this->cssID;
		$cssId[1] .= ' flip_clock_' . $this->Template->random;
		$this->cssID = $cssId;
		
		$diff =  $this->t4c_fc_end_date - strtotime( date('Y-m-d H:i') );
			
			if( $this->t4c_fc_type == 'MinuteCounter')
			{
				$diff = $this->t4c_fc_minutes;
			}
			
			if ($diff < 0) {
				$diff = $diff * (-1);
				$this->Template->countdown = 'true';
			} else {
				$this->Template->countdown = 'false';
			}
			
			if( $this->t4c_fc_type == 'Counter'){
				$diff = $this->t4c_fc_start;
			} elseif ( $this->t4c_fc_type == 'TwelveHourClock' || $this->t4c_fc_type == 'TwentyFourHourClock' ){
				$diff = 0;	
			}
			
			$this->Template->diff = $diff;
    }
}