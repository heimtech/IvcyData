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
 * Class ContentAlertBox
 *
 * Front end content element "Alert Box".
 */
class ContentAlertBox extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_alert_box';


    /**
     * Generate the content element
     */
    protected function compile()
    {

		$cssId = $this->cssID;
		$cssId[1] .= ' '.$this->t4c_ab_type . ' '.'pos-'.$this->t4c_ab_icon_position;
		$this->cssID = $cssId;

		if ($bgColor = \themes4contao\themes4contao::compileColor( $this->t4c_bgcolor )){
			$this->arrStyle[] = 'background:' . $bgColor . ';';
		}
		
		if ($textColor = \themes4contao\themes4contao::compileColor( $this->t4c_textcolor )){
			$this->arrStyle[] = 'color:' . $textColor . ';';
		}
		
		if ($this->t4c_border_width){
			if ($this->t4c_border_width && ($borderColor = \themes4contao\themes4contao::compileColor( $this->t4c_borderColor ))){
				$this->arrStyle[] = 'border:' . $this->t4c_border_width . 'px solid ' . $borderColor . ';';
			}
		}
		
		if ($arrRadius = deserialize($this->t4c_border_radius)){
			
			if( (isset($arrRadius['top']) || $arrRadius['bottom'] || $arrRadius['left'] || $arrRadius['right']) && $arrRadius['unit'] ){
					$radius = intval($arrRadius['top']).$arrRadius['unit'].' '.intval($arrRadius['right']).$arrRadius['unit'].' '.intval($arrRadius['bottom']).$arrRadius['unit'].' '.intval($arrRadius['right']).$arrRadius['unit'];
					$this->arrStyle[] = '-webkit-border-radius: ' . $radius . '; -moz-border-radius: ' . $radius . '; border-radius: ' . $radius . ';'; 
			}
			
		}
		
		
    }
}