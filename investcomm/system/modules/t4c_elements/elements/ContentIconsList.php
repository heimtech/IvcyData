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
 * Class ContentIconsList
 *
 * Front end content element "Icons List".
 */
class ContentIconsList extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_icons_list';


    /**
     * Generate the content element
     */
    protected function compile()
    {
		$cssId = $this->cssID;
		$cssId[1] .= ' pos-' . $this->t4c_il_icon_postion;
		$this->cssID = $cssId;
		
		$this->Template->items = deserialize($this->t4c_il_icon);
		
		// Icon style
		$icon_style  = 'style="';
				
		if ($icon_color = \themes4contao\themes4contao::compileColor( $this->t4c_icon_color )){
			$icon_style .= 'color:' . $icon_color . ';';
		}
				
		if ($this->t4c_icon_size){
			$icon_style .= 'font-size:' . $this->t4c_icon_size . 'px;';					
			$icon_style .= 'width:' . ($this->t4c_icon_size + 2*$this->t4c_icon_padding) . 'px;';
			$icon_style .= 'height:' . ($this->t4c_icon_size + 2*$this->t4c_icon_padding) . 'px;';
					
			if($this->t4c_icon_border_radius){
				$this->t4c_icon_border_radius = deserialize($this->t4c_icon_border_radius);
				$radius = intval($this->t4c_icon_border_radius['top']).$this->t4c_icon_border_radius['unit'].' '.intval($this->t4c_icon_border_radius['right']).$this->t4c_icon_border_radius['unit'].' '.intval($this->t4c_icon_border_radius['bottom']).$this->t4c_icon_border_radius['unit'].' '.intval($this->t4c_icon_border_radius['left']). $this->t4c_icon_border_radius['unit'];
				$icon_style .= '-webkit-border-radius: '.$radius.';-moz-border-radius: '.$radius.';border-radius: '.$radius.';';
			}
					
			$icon_style .= 'line-height:' . ($this->t4c_icon_size + 2*$this->t4c_icon_padding - 2*$this->t4c_icon_border_radius['value']) . 'px;';				
		}
				
		if ($icon_background_color = \themes4contao\themes4contao::compileColor( $this->t4c_iconBgColor )){
			$icon_style .= 'background:' . $icon_background_color . ';';
		}
				
		if ($this->t4c_icon_border_width != '' && $this->t4c_icon_border_width != 0){
			$icon_style .= 'border-width:' . $this->t4c_icon_border_width . 'px;';
			
			if ($icon_border_color =  \themes4contao\themes4contao::compileColor( $this->t4c_icon_color_border )){
				$icon_style .= 'border-color:' . $icon_border_color . '; border-style:solid;';
			}
			
		} else {
				$icon_style .= 'border:none;';
		}
		$icon_style .= 'text-align:center;';
		$icon_style .= '"';
		$this->Template->icon_style = $icon_style;
		
		if ($this-> t4c_il_add_contector == 1){
			
			if ($this->t4c_il_conector_type){
				$connector_style .= 'border-right-style:' . $this->t4c_il_conector_type . ';';
			}
			
			if ($contector_border_color = \themes4contao\themes4contao::compileColor($this->t4c_il_contector_color)){
				$connector_style .= 'border-right-color:' . $contector_border_color . ';';
			}
			$connector_style .= 'border-right-width: 1px;';
		}
		
		$this->Template->connector_style = $connector_style;
    }
}