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
 * Class ContentBlockquote
 *
 * Front end content element "Blockquote".
 */
class ContentBlockquote extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_blockquote';


    /**
     * Generate the content element
     */
    protected function compile()
    {

		$cssId = $this->cssID;
		$cssId[1] .= ' text-align-'.$this->t4c_text_align;
		$this->cssID = $cssId;
		
		if ($bgColor = \themes4contao\themes4contao::compileColor( $this->t4c_bgcolor )){
			$this->arrStyle[] = 'background:' . $bgColor . ';';
		}
		
		if ( $textColor = \themes4contao\themes4contao::compileColor( $this->t4c_textcolor )){
			$this->arrStyle[] = 'color:' . $textColor . ';';
		}
		
		if ($this->t4c_b_quotation_marks){
			$this->Template->quotation_marks_color = 'style="color:' . \themes4contao\themes4contao::compileColor( $this->t4c_b_quotation_marks ) . ';"';
		} else {
			$this->Template->quotation_marks_color = '';
		}
		
		
		if ($arrRadius = deserialize($this->t4c_border_radius)){
			$arrRadius = deserialize($this->t4c_border_radius);
			
			if( ($arrRadius['top'] || $arrRadius['bottom'] || $arrRadius['left'] || $arrRadius['right']) && $arrRadius['unit'] ){
					$radius = intval($arrRadius['top']).$arrRadius['unit'].' '.intval($arrRadius['right']).$arrRadius['unit'].' '.intval($arrRadius['bottom']).$arrRadius['unit'].' '.intval($arrRadius['right']).$arrRadius['unit'];
					$this->arrStyle[] = '-webkit-border-radius: ' . $radius . '; -moz-border-radius: ' . $radius . '; border-radius: ' . $radius . ';'; 
			}
			
		}
    }
}