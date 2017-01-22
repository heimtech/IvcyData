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
 * Class ContentButton
 *
 * Front end content element "Button".
 */
class ContentButton extends \ContentHyperlink
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_button';


    /**
     * Generate the content element
     */
    protected function compile()
    {
		$cssId = $this->cssID;
		$cssId[1] .= ' '.$this->t4c_button_style . ' button_' . $this->t4c_button_size . ' hover_' . $this->t4c_button_hover. ' icon_position_' . $this->t4c_icon_position;
		
		if ($this->linkTitle != '' && $this->t4c_icon) {
			$cssId[1] .= ' text_icon';
		}
		
		if (!($iconbgcolor = \themes4contao\themes4contao::compileColor( $this->t4c_iconBgColor))){
			$cssId[1] .= ' icon_padding';
		}
		
		if (!$this->t4c_icon){
			$cssId[1] .= ' simple_text';
		}
		
		$this->cssID = $cssId;
		
		if ($this->t4c_icon_padding){
			$this->t4c_icon_padding = deserialize($this->t4c_icon_padding);
		}
		
		if ($this->t4c_icon_size){
			$this->t4c_icon_size = deserialize($this->t4c_icon_size);
		}
		
		
		// Button Style
		if( $this->t4c_button_style == 'custom'){
			$button_style = '';
			$icon_style = '';
			
			if ($textcolor = \themes4contao\themes4contao::compileColor( $this->t4c_textcolor )){
				 $button_style .= 'color:' . $textcolor . ';';
			}
			
			if ($bgcolor = \themes4contao\themes4contao::compileColor( $this->t4c_bgcolor )){
				 $button_style .= 'background:' . $bgcolor . ';';
			}
			
			if ($bordercolor = \themes4contao\themes4contao::compileColor( $this->t4c_borderColor )){
				 $button_style .= 'border-color:' . $bordercolor . ';';
			}
			
			if ($this->t4c_border_width){
				$button_style .= 'border-width:' . $this->t4c_border_width . 'px;';
			} else {
				$button_style .= 'border-width: 0px;';
			}
			
			if (isset($this->t4c_button_border_radius)){
				$button_style .= '-webkit-border-radius: ' . $this->t4c_button_border_radius . 'px; -moz-border-radius: ' . $this->t4c_button_border_radius . 'px; border-radius: ' . $this->t4c_button_border_radius . 'px;';
			}
			
			if ($button_style){
				$this->Template->button_style = 'style="' . $button_style . '"';
			}

			if ($iconcolor = \themes4contao\themes4contao::compileColor( $this->t4c_icon_color )){
				 $icon_style .= 'color:' . $iconcolor . ';';
			}
			
			if ($iconbgcolor){
				 $icon_style .= 'background:' . $iconbgcolor . ';';
			}
			
			if (isset($this->t4c_button_border_radius)){
				$icon_style .= '-webkit-border-radius: ' . $this->t4c_button_border_radius . 'px; -moz-border-radius: ' . $this->t4c_button_border_radius . 'px; border-radius: ' . $this->t4c_button_border_radius . 'px;';
			}
			
			if ($icon_style){
				$this->Template->icon_style = 'style="' . $icon_style . '"';
			}
			
			
		} else {
			$this->Template->button_style = '';
			$this->Template->icon_style = '';
		}
		
		$this->Template->title = $this->linkTitle;
			
		if (TL_MODE == 'BE')
        {
		   $icons = \Contao\LayoutModel::findAll();
		   
		   $GLOBALS['TL_CSS']['t4c_icon_fonts'] = \Codefog\IconPicker\Manager::getCssFile(deserialize($icons->iconsets, true)) ;
        }
		
		return parent::compile();
		
    }
}