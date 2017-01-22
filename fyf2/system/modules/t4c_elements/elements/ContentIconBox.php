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
 * Class ContentIconBox
 *
 * Front end content element "Icon Box".
 */
class ContentIconBox extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_icon_box';


    /**
     * Generate the content element
     */
    protected function compile()
    {
		$cssId = $this->cssID;
		$cssId[1] .= ' '.$this->t4c_ib_hover. ' ' . $this->t4c_ib_layout;
		$this->cssID = $cssId;
		
		// Box style
		if ($this->t4c_ib_layout=='layout_4' || $this->t4c_ib_layout=='layout_5' || $this->t4c_ib_layout=='layout_6' || $this->t4c_ib_layout=='layout_9' || $this->t4c_ib_layout=='layout_10' || $this->t4c_ib_layout=='layout_11' || $this->t4c_ib_layout=='layout_12' || $this->t4c_ib_layout=='layout_13')
		{			
			if ($boxBGcolor = \themes4contao\themes4contao::compileColor( $this->t4c_icon_box_background )){
				$this->arrStyle[] = 'background:' . $boxBGcolor . ';';
			}
				
				if ($this->t4c_icon_box_border_width != '' && $this->t4c_icon_box_border_width != '0'){
		 			 $this->arrStyle[] = 'border-width:' . $this->t4c_icon_box_border_width. 'px;';
					 $this->arrStyle[] = 'border-style:' . $this->t4c_icon_box_border_style . ';';
					 if ($borderColor = \themes4contao\themes4contao::compileColor( $this->t4c_icon_box_border_color )){
							$this->arrStyle[] = 'border-color:' . $borderColor . ';';
					}
				} else {
					$this->arrStyle[] = 'border:none;';
				}
				
				if ($this->t4c_icon_box_border_radius){
					$this->t4c_icon_box_border_radius = deserialize($this->t4c_icon_box_border_radius);
					$radius = intval($this->t4c_icon_box_border_radius['top']).$this->t4c_icon_box_border_radius['unit'].' '.intval($this->t4c_icon_box_border_radius['right']).$this->t4c_icon_box_border_radius['unit'].' '.intval($this->t4c_icon_box_border_radius['bottom']).$this->t4c_icon_box_border_radius['unit'].' '.intval($this->t4c_icon_box_border_radius['left']). $this->t4c_icon_box_border_radius['unit'];
					$this->arrStyle[] = '-webkit-border-radius: '.$radius.';-moz-border-radius: '.$radius.';border-radius: '.$radius.';';
				}
			}
		
		
		if ($this->t4c_ib_layout == 'layout_11' &&  $this->t4c_icon_size && $this->t4c_icon_padding){
			$this->arrStyle[] = 'margin-right:' . ($this->t4c_icon_size + 2*$this->t4c_icon_padding)/2 . 'px;';
		}
		if ($this->t4c_ib_layout == 'layout_10' &&  $this->t4c_icon_size && $this->t4c_icon_padding){
			$this->arrStyle[] = 'margin-left:' . ($this->t4c_icon_size + 2*$this->t4c_icon_padding)/2 . 'px;';	
		}
		if ($this->t4c_ib_layout=='layout_9' &&  $this->t4c_icon_size && $this->t4c_icon_padding){
			$this->arrStyle[] = 'margin-top:' . ($this->t4c_icon_size + 2*$this->t4c_icon_padding)/2 . 'px;';
		}
		
		// Icon
		if ($this->t4c_ib_icon_type=="font"){ 
				// Icon style
				$icon_style  = 'style="';
				
				if ($iconColor = \themes4contao\themes4contao::compileColor( $this->t4c_icon_color )){
					$icon_style .= 'color:' . $iconColor . ';';
				}
				
				if ($this->t4c_icon_size){
					$icon_style .= 'font-size:' . $this->t4c_icon_size . 'px;';					
					$icon_style .= 'width:' . ($this->t4c_icon_size + 2*$this->t4c_icon_padding) . 'px;';
					$icon_style .= 'height:' . ($this->t4c_icon_size + 2*$this->t4c_icon_padding) . 'px;';
					
					$icon_style .= 'line-height:' . ($this->t4c_icon_size + 2*$this->t4c_icon_padding - 2*$this->t4c_icon_border_size['value']) . 'px;';				
				}
				
				$this->t4c_icon_border_radius = deserialize($this->t4c_icon_border_radius);
				if ($this->t4c_icon_border_radius['top'] || $this->t4c_icon_border_radius['left'] || $this->t4c_icon_border_radius['right'] || $this->t4c_icon_border_radius['bottom'] || $this->t4c_icon_border_radius['unit']){
					$this->t4c_icon_border_radius = deserialize($this->t4c_icon_border_radius);
					$radius = intval($this->t4c_icon_border_radius['top']).$this->t4c_icon_border_radius['unit'].' '.intval($this->t4c_icon_border_radius['right']).$this->t4c_icon_border_radius['unit'].' '.intval($this->t4c_icon_border_radius['bottom']).$this->t4c_icon_border_radius['unit'].' '.intval($this->t4c_icon_border_radius['left']). $this->t4c_icon_border_radius['unit'];
					$icon_style .= '-webkit-border-radius: '.$radius.';-moz-border-radius: '.$radius.';border-radius: '.$radius.';';
				}
				
				if ($iconBgColor = \themes4contao\themes4contao::compileColor( $this->t4c_iconBgColor )){
					$icon_style .= 'background:' . $iconBgColor . ';';
				}
				
				if ($this->t4c_icon_border_width != '' && $this->t4c_icon_border_width !='0'){
					$icon_style .= 'border-width:' . $this->t4c_icon_border_width . 'px;border-style:solid;';
						if ($borderColor = \themes4contao\themes4contao::compileColor( $this->t4c_icon_color_border )){
						$icon_style .= 'border-color:' .  $borderColor . ';';
						}
				} else {
					$icon_style .= 'border:none;';
				}
				
				$icon_style .= 'text-align:center;';
				$icon_style .= '"';
				
				$icon_box_style='';
				if ($this->t4c_ib_layout == 'layout_11' && $this->t4c_icon_size && $this->t4c_icon_padding){
					$icon_box_style = 'style="margin-top:-' . ($this->t4c_icon_size + 2*$this->t4c_icon_padding)/2 . 'px; right:-' . ($this->t4c_icon_size + 2*$this->t4c_icon_padding)/2 . 'px;"';
				}
				
				if ($this->t4c_ib_layout == 'layout_10' && $this->t4c_icon_size && $this->t4c_icon_padding){
					$icon_box_style = 'style="margin-top:-' . ($this->t4c_icon_size + 2*$this->t4c_icon_padding)/2 . 'px; left:-' . ($this->t4c_icon_size + 2*$this->t4c_icon_padding)/2 . 'px;"';	
				}
				
				if ($this->t4c_ib_layout == 'layout_9' && ($this->t4c_icon_size || $this->t4c_icon_padding) ){
					$icon_box_style = 'style="top:-' . ($this->t4c_icon_size + 2*$this->t4c_icon_padding)/2 . 'px;"';	
				}
					
				$this->Template->box_icon = '<div class="t4c-icon-box-icon" ' . $icon_box_style . '>';
				$this->Template->box_icon .= '<i class="' . $this->t4c_icon . '" ' . $icon_style . '></i>';
				$this->Template->box_icon .= '</div>';
			}
			elseif ($this->t4c_ib_icon_type=="iconimage")
			{
				
				$this->Template->box_icon = '<div class="t4c-icon-box-icon">';
				if ($this->t4c_image){
					$image = \FilesModel::findByPk( $this->t4c_image );
					$this->Template->box_icon .= '<img src="'.$image->path.'" alt="'.$title.'">';
				}	
				$this->Template->box_icon .= '</div>';					
			}
			
			$box_text_style='';
			if ($this->t4c_ib_layout == 'layout_11' && $this->t4c_icon_size){
				$box_text_style='style="padding-right:' . ($this->t4c_icon_size + 15) . 'px";';
			}
			if ($this->t4c_ib_layout == 'layout_10' && $this->t4c_icon_size){
				$box_text_style='style="padding-left:' . ($this->t4c_icon_size + 15) . 'px";';
			}			
			if ($this->t4c_ib_layout == 'layout_9' && $this->t4c_icon_size){
				$box_text_style='style="padding-top:' . ($this->t4c_icon_size + 15) . 'px";';
			}
				
			$this->Template->box_text = '<div class="t4c-icon-box-text" ' . $box_text_style .  '>';
			$this->Template->box_text .= '<div class="t4c-icon-box-header">';
			$this->Template->box_text .= '<h3>';
			
			if($this->url){
				$this->Template->box_text .='<a href="' . $this->url . '">';
			}
			
			if ($this->t4c_ib_layout == 'layout_7' || $this->t4c_ib_layout == 'layout_12'){
				$this->Template->box_text .= '<span class="t4c-icon-box-icon"><i class="' . $this->t4c_icon . '" ' . $icon_style . '></i></span>' . $this->t4c_title;
			} elseif ($this->t4c_ib_layout == 'layout_8' ||  $this->t4c_ib_layout == 'layout_13'){
				$this->Template->box_text .= $this->t4c_title . '<span class="t4c-icon-box-icon"><i class="' . $this->t4c_icon . '" ' . $icon_style . '></i></span>';
			} else {
				$this->Template->box_text .= $this->t4c_title;
			}
			
			if($this->url){
				$this->Template->box_text .= '</a>';	
			}
			
			$this->Template->box_text .='</h3>';
			
			if($this->t4c_description){
				$this->Template->box_text .= '<div class="ssth-icon-box-description">';
				$this->Template->box_text .= $this->t4c_description;
				$this->Template->box_text .= '</div>';
			}
			
			if ($this->t4c_ib_add_button && $this->url){
				
				$style= '';
				if ($buttonTextColor =  \themes4contao\themes4contao::compileColor( $this->t4c_ib_button_text_color )){
					$style .= 'color:' . $buttonTextColor . ';';
				}
				if ($buttonBgColor = \themes4contao\themes4contao::compileColor( $this->t4c_ib_button_bgcolor )){
					$style .= 'background:' .  $buttonBgColor . ';';
				}
				
					
				if ($this->t4c_icon_button_border_size != 0){
					$style .= 'border-width:' . $this->t4c_icon_button_border_size . 'px; border-style:solid;';
					if ($buttonBorderColor = \themes4contao\themes4contao::compileColor( $this->t4c_ib_button_border_color )){
						$style .= 'border-color:' .  $buttonBorderColor . ';';
					}
				} else {
					$style .= 'border:none;';
				}
			
				
				if($this->t4c_icon_button_border_radius){
					$radius = intval($this->t4c_icon_button_border_radius). 'px';
					$style .= '-webkit-border-radius: '.$radius.';-moz-border-radius: '.$radius.';border-radius: '.$radius.';';
				}
				
				$this->Template->box_text .= '<div class="t4c-icon-box-more">';
				$this->Template->box_text .= '<a href="' . $this->url . '" class="' . $this->t4c_icon_button_hover . '" style="' . $style . '">';
				$this->Template->box_text .= $this->t4c_ib_button_text;
				$this->Template->box_text .= '</a>';
				$this->Template->box_text .= '</div>';
			}
			
			$this->Template->box_text .= '</div>';
			$this->Template->box_text .= '</div>';
			
		if (TL_MODE == 'BE')
        {
		   $icons = \Contao\LayoutModel::findAll();
		   
		   $GLOBALS['TL_CSS']['t4c_icon_fonts'] = \Codefog\IconPicker\Manager::getCssFile(deserialize($icons->iconsets, true)) ;
        }
		
    }
}