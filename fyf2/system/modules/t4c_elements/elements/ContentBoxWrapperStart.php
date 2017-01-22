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
 * Class ContentSlickSliderStart
 *
 * Front end content element "Box Wrapper".
 */
class ContentBoxWrapperStart extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_box_wrapper_start';


    /**
     * Generate the content element
     */
    protected function compile()
    {


		if (TL_MODE == 'BE')
		{
			$this->strTemplate = 'be_wildcard';

			/** @var \BackendTemplate|object $objTemplate */
			$objTemplate = new \BackendTemplate($this->strTemplate);

			$this->Template = $objTemplate;
			$this->Template->title = $this->headline;
		}
		
		
		$cssId = $this->cssID;
		$cssId[1] .= ' hvr-' . $this->t4c_box_wrapper_hover ;
		$this->cssID = $cssId;
		
		if ($color = \themes4contao\themes4contao::compileColor( $this->t4c_textcolor )){
			$this->arrStyle[] = 'color:' . $color . ';';
			$GLOBALS['T4C_CSS'][] = '#ce_t4c_box_wrapper_start_' . $this->id . ' strong {color: ' . $color . ';}';
			$GLOBALS['T4C_CSS'][] = '#ce_t4c_box_wrapper_start_' . $this->id . ' a {color: ' . $color . ';}';
			$GLOBALS['T4C_CSS'][] = '#ce_t4c_box_wrapper_start_' . $this->id . ' h1,#ce_t4c_box_wrapper_start_' . $this->id . ' h2,#ce_t4c_box_wrapper_start_' . $this->id . ' h3,#ce_t4c_box_wrapper_start_' . $this->id . ' h4,#ce_t4c_box_wrapper_start_' . $this->id . ' h5,#ce_t4c_box_wrapper_start_' . $this->id . ' h6 {color: ' . $color . ';}';
		}
		
		if ($BGcolor = \themes4contao\themes4contao::compileColor( $this->t4c_bgcolor )){
			$this->arrStyle[] = 'background:' . $BGcolor . ';';
		}
		
		
		if ($hover_color = \themes4contao\themes4contao::compileColor( $this->t4c_box_wrapper_hover_color )){
			$this->Template->hover_color = $hover_color ;
			
			$GLOBALS['T4C_CSS'][] = '#ce_t4c_box_wrapper_start_' . $this->id . ':hover strong {color: ' . $color . ';}';
			$GLOBALS['T4C_CSS'][] = '#ce_t4c_box_wrapper_start_' . $this->id . ' a:hover {color: ' . $color . ';}';
			$GLOBALS['T4C_CSS'][] = '#ce_t4c_box_wrapper_start_' . $this->id . ':hover h1,#ce_t4c_box_wrapper_start_' . $this->id . ':hover h2,#ce_t4c_box_wrapper_start_' . $this->id . ':hover h3,#ce_t4c_box_wrapper_start_' . $this->id . ':hover h4,#ce_t4c_box_wrapper_start_' . $this->id . ':hover h5,#ce_t4c_box_wrapper_start_' . $this->id . ':hover h6 {color: ' . $color . ';}';

		}
		
		if ($hover_BGcolor = \themes4contao\themes4contao::compileColor( $this->t4c_box_wrapper_hover_background )){
			$this->Template->hover_bg = 'background:' . $hover_BGcolor . ';';
		}
		
		$value = deserialize($this->t4c_box_wrapper_padding);

        if (is_array($value) && ($value['top'] != '' || $value['right'] != '' || $value['bottom'] != '' || $value['left'] != '')){
         	$top = intval($value['top']);
            $right = intval($value['right']);
            $bottom = intval($value['bottom']);
            $left = intval($value['left']);
            $padding = '';

            if ($top == $right && $top == $bottom && $top == $left){
            	$padding = $top . (($top === '0') ? '' : $value['unit']) . ';';
             } elseif ($top == $bottom && $right == $left) {
	             $padding = $top . (($top === '0') ? '' : $value['unit']) . ' ' . $right . (($right === '0') ? '' : $value['unit']) . ';';
             } elseif ($top != $bottom && $right == $left) {
		         $padding = $top . (($top === '0') ? '' : $value['unit']) . ' ' . $right . (($right === '0') ? '' : $value['unit']) . ' ' . $bottom . (($bottom === '0') ? '' : $value['unit']) . ';';
             } else {
             	$padding .= $top . (($top === '0') ? '' : $value['unit']) . ' ' . $right . (($right === '0') ? '' : $value['unit']) . ' ' . $bottom . (($bottom === '0') ? '' : $value['unit']) . ' ' . $left . (($left === '0') ? '' : $value['unit']) . ';';
             }

             $this->arrStyle[] = 'padding:' . $padding;
		}

		$value = deserialize($this->t4c_box_wrapper_margin);
        if (is_array($value) && ($value['top'] != '' || $value['right'] != '' || $value['bottom'] != '' || $value['left'] != '')){
         	$top = intval($value['top']);
            $right = intval($value['right']);
            $bottom = intval($value['bottom']);
            $left = intval($value['left']);
            $margin = '';

            if ($top == $right && $top == $bottom && $top == $left){
            	$margin = $top . (($top === '0') ? '' : $value['unit']) . ';';
             } elseif ($top == $bottom && $right == $left) {
	             $margin = $top . (($top === '0') ? '' : $value['unit']) . ' ' . $right . (($right === '0') ? '' : $value['unit']) . ';';
             } elseif ($top != $bottom && $right == $left) {
		         $margin = $top . (($top === '0') ? '' : $value['unit']) . ' ' . $right . (($right === '0') ? '' : $value['unit']) . ' ' . $bottom . (($bottom === '0') ? '' : $value['unit']) . ';';
             } else {
             	$margin .= $top . (($top === '0') ? '' : $value['unit']) . ' ' . $right . (($right === '0') ? '' : $value['unit']) . ' ' . $bottom . (($bottom === '0') ? '' : $value['unit']) . ' ' . $left . (($left === '0') ? '' : $value['unit']) . ';';
             }
             $this->arrStyle[] = 'margin:' . $margin;
		}
		
		$GLOBALS['TL_CSS']['t4c_hover'] = 'system/modules/t4c_elements/assets/css/hover.css';
	}
}