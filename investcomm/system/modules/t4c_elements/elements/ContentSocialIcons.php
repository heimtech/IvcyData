<?php

/**
 * t4c_elements for Contao Open Source CMS
 *
 * Copyright (C) 2015 themes4contao
 *
 * @package t4c_elements
 * @author  Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */

namespace themes4contao;

/**
 * Class ContentIcon
 *
 * Front end content element "Social Icons".
 */
class ContentSocialIcons extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_social_icons';


    /**
     * Generate the content element
     */
    protected function compile()
    {
		$cssId = $this->cssID;
		$cssId[1] .= ' '.$this->t4c_ib_hover. ' position-' . $this->t4c_tooltip_postion;
		$this->cssID = $cssId;
		
		$socialIcons = deserialize($this->t4c_social_icons);
		$this->Template->items = $socialIcons;
		
		$icon_style  = 'style="';
		
		if ($textColor = \themes4contao\themes4contao::compileColor( $this->t4c_icon_color )){
			$icon_style .= 'color:' . $textColor . ';';
		}
		
		if ($this->t4c_icon_size){
			$icon_style .= 'font-size:' . $this->t4c_icon_size . 'px;';					
			$icon_style .= 'width:' . ($this->t4c_icon_size + 2*$this->t4c_icon_padding) . 'px;';
			$icon_style .= 'height:' . ($this->t4c_icon_size + 2*$this->t4c_icon_padding) . 'px;';
			
			if ($this->t4c_icon_border_radius){
				$this->t4c_icon_border_radius = deserialize($this->t4c_icon_border_radius);
				$radius = intval($this->t4c_icon_border_radius['top']).$this->t4c_icon_border_radius['unit'].' '.intval($this->t4c_icon_border_radius['right']).$this->t4c_icon_border_radius['unit'].' '.intval($this->t4c_icon_border_radius['bottom']).$this->t4c_icon_border_radius['unit'].' '.intval($this->t4c_icon_border_radius['left']). $this->t4c_icon_border_radius['unit'];
				$icon_style .= '-webkit-border-radius: '.$radius.';-moz-border-radius: '.$radius.';border-radius: '.$radius.';';
			}
			
			$icon_style .= 'line-height:' . ($this->t4c_icon_size + 2*$this->t4c_icon_padding - 2*$this->t4c_icon_border_radius['value']) . 'px;';				
		}
				
		if ($bgColor = \themes4contao\themes4contao::compileColor( $this->t4c_iconBgColor) ){
			$icon_style .= 'background:' . $bgColor . ';';
		}
		
		if ($this->t4c_icon_border_width != '' && $this->t4c_icon_border_width != 0){
			$icon_style .= 'border-width:' . $this->t4c_icon_border_width . 'px; border-style:solid;';
			if ($borderColor = \themes4contao\themes4contao::compileColor( $this->t4c_icon_color_border )){
				$icon_style .= 'border-color:' .  $borderColor . ';';
			}
		} else {
			$icon_style .= 'border:none;';
		}
		
		$icon_style .= 'text-align:center;';
		$icon_style .= '"';
		
		$this->Template->icon_style = $icon_style;
					
		$tooltip_style = '';
		
		if ($tooltipTextColor = \themes4contao\themes4contao::compileColor( $this->t4c_textcolor )){
			$tooltip_style .= 'color:' . $tooltipTextColor . ';';
		}
			
		if ($tooltipBgColor = \themes4contao\themes4contao::compileColor( $this->t4c_bgcolor )){
			$tooltip_style .= 'background:' . $tooltipBgColor . '; border-color:' . $tooltipBgColor . ';';
		}
		
		if($tooltip_style){
			$tooltip_style = 'style="' . $tooltip_style . '"';
		}
		
		$this->Template->tooltip_style = $tooltip_style;
		
		if (TL_MODE == 'BE')
        {
		   $icons = \Contao\LayoutModel::findAll();
		   $GLOBALS['TL_CSS']['t4c_icon_fonts'] = \Codefog\IconPicker\Manager::getCssFile(deserialize($icons->iconsets, true)) ;
        }
		
    }
}