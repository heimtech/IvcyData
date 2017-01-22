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
 * Class ContentDividers
 *
 * Front end content element "Dividers".
 */
class ContentDividers extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_dividers';


    /**
     * Generate the content element
     */
    protected function compile()
    {

		$cssId = $this->cssID;
		$cssId[1] .= ' '.$this->t4c_divider_type . ' ' . $this->t4c_divider_line . ' ' . $this->t4c_divider_width;
		$this->cssID = $cssId;
		
		if ($lineColor = \themes4contao\themes4contao::compileColor( $this->t4c_divider_line_color )){
			$this->arrStyle[] = 'border-color:' . $lineColor . ';';
		}
		
		$this->Template->textStyle = '';
		
		if ($textColor =  \themes4contao\themes4contao::compileColor( $this->t4c_textcolor )){
			$this->Template->textStyle = 'color:' . $textColor . ';';
		}
		
		if ($this->t4c_text_size){
			$this->Template->textStyle .= 'font-size:' . $this->t4c_text_size . 'px;';
		}
		
		$this->Template->iconStyle = '';
		
		if ($iconColor = \themes4contao\themes4contao::compileColor( $this->t4c_icon_color )){
			$this->Template->iconStyle = 'color:' . $iconColor . ';';
		}
		
		if ($this->t4c_icon_size){
			$this->Template->iconStyle .= 'font-size:' . $this->t4c_icon_size . 'px;';
		}
		
    }
}