<?php

/**
 * t4c_elements extension for Contao Open Source CMS
 *
 * Copyright (C) 2015 themes4contao
 *
 * @package t4c_icon_box
 * @author Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */

namespace themes4contao;

/**
 * Class ContentFlipBox
 *
 * Front end content element "Flip Box".
 */
class ContentFlipBox extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_flip_box';


    /**
     * Generate the content element
     */
    protected function compile()
    {
		$cssId = $this->cssID;
		$cssId[1] .= ' '.$this->t4c_fb_effect;
		$this->cssID = $cssId;
		
		//Box height
		if($this->t4c_fb_height){
			$this->arrStyle[] = 'height:' . $this->t4c_fb_height . 'px;';
		}
		
		//Front style
		$front_style = 'style="height:' . $this->t4c_fb_height . 'px;';
		
		if ($this->t4c_fb_radius){
			$radius = $this->t4c_fb_radius.'px';
			$front_style .= '-webkit-border-radius: ' . $radius . '; -moz-border-radius: ' . $radius . '; border-radius: ' . $radius . ';';			
		}
		
		if ($textColor = \themes4contao\themes4contao::compileColor( $this->t4c_fb_front_textcolor )){
			$front_style .= 'color:' .  $textColor . ';';
			$GLOBALS['T4C_CSS'][] = '#t4c_flipbox_' . $this->id . ' .t4c_front h3,#t4c_flipbox_' . $this->id . ' .t4c_front strong {color: ' . $textColor . ';}';
		}
		
		if ($bgColor = \themes4contao\themes4contao::compileColor( $this->t4c_fb_front_bgcolor )){
			$front_style .= 'background:' .  $bgColor . ';';
		}

		if ($this->t4c_fb_front_bgcolor_border_style && $this->t4c_fb_front_border_width){
			$front_style .= 'border-style:' . $this->t4c_fb_front_bgcolor_border_style . ';';
			$front_style .= 'border-width:' . $this->t4c_fb_front_border_width . 'px;';
			
			if ($borderColor = \themes4contao\themes4contao::compileColor( $this->t4c_fb_front_bordercolor )){
				$front_style .= 'border-color:' . $borderColor  . ';';
			}
			
		}
		$front_style .= '"';
		$this->Template->front_style = $front_style;
		
		
		
		//Back style
		$back_style = 'style="height:' . $this->Template->t4c_fb_height . 'px;';
		if ($this->t4c_fb_radius){
			$back_style .= '-webkit-border-radius: ' . $radius . '; -moz-border-radius: ' . $radius . '; border-radius: ' . $radius . ';';
		}
		
		if ($backTextColor = \themes4contao\themes4contao::compileColor( $this->t4c_fb_back_textcolor )){
			$back_style .= 'color:' .  $backTextColor . ';';
			$GLOBALS['T4C_CSS'][] = '#t4c_flipbox_' . $this->id . ' .t4c_back h3,#t4c_flipbox_' . $this->id . ' .t4c_back strong {color: ' . $backTextColor . ';}';
		}
		
		if ($backBgColor = \themes4contao\themes4contao::compileColor( $this->t4c_fb_back_bgcolor )){
			$back_style .= 'background:' .  $backBgColor . ';';
		}

		if ($this->t4c_fb_back_bgcolor_border_style && $this->t4c_fb_back_border_width){
			
			$back_style .= 'border-style:' . $this->t4c_fb_back_bgcolor_border_style . ';';
			$back_style .= 'border-width:' . $this->t4c_fb_back_border_width . 'px;';
			
			if ($backBorderColor = \themes4contao\themes4contao::compileColor( $this->t4c_fb_back_bordercolor )){
				$back_style .= 'border-color:' . $backBorderColor  . ';';
			}
			
		}
		$back_style .= '"';
		$this->Template->back_style = $back_style;
		
			// Icon
		if ($this->t4c_ib_icon_type=="font"){ 
				// Icon style
				$icon_style  = 'style="';
				
				if ($this->t4c_icon_color){
					$icon_style .= 'color:' . \themes4contao\themes4contao::compileColor( $this->t4c_icon_color ) . ';';
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
				
				if (  $iconBG = \themes4contao\themes4contao::compileColor( $this->t4c_iconBgColor ) ){
					$icon_style .= 'background:' . $iconBG . ';';
				}
				
				if ($this->t4c_icon_border_width != '' && $this->t4c_icon_border_width != '0'){
					$icon_style .= 'border-width:' . $this->t4c_icon_border_width . 'px; border-style:solid;';
					if ($this->t4c_icon_color_border){
						$icon_style .= 'border-color:' .  \themes4contao\themes4contao::compileColor( $this->t4c_icon_color_border ) . ';';
					}
				} else {
					$icon_style .= 'border:none;';
				}
				$icon_style .= 'text-align:center;';
				$icon_style .= '"';
				
				$icon_box_style='';
				if ($this->t4c_ib_layout == 'layout_11'){
					$icon_box_style = 'style="margin-top:-' . ($this->t4c_icon_size + 2*$this->t4c_icon_padding)/2 . 'px; right:-' . ($this->t4c_icon_size + 2*$this->t4c_icon_padding)/2 . 'px;"';
				}
				
				if ($this->t4c_ib_layout == 'layout_10'){
					$icon_box_style = 'style="margin-top:-' . ($this->t4c_icon_size + 2*$this->t4c_icon_padding)/2 . 'px; left:-' . ($this->t4c_icon_size + 2*$this->t4c_icon_padding)/2 . 'px;"';	
				}
				
				if ($this->t4c_ib_layout == 'layout_9'){
					$icon_box_style = 'style="top:-' . ($this->t4c_icon_size + 2*$this->t4c_icon_padding)/2 . 'px;"';	
				}
					
				$this->Template->box_icon = '<div class="t4c-icon-box-icon" ' . $icon_box_style . '>';
				$this->Template->box_icon .= '<i class="' . $this->t4c_icon . '" ' . $icon_style . '></i>';
				$this->Template->box_icon .= '</div>';
			}
			elseif ($this->t4c_ib_icon_type=="iconimage")
			{
				$this->Template->box_icon = '<div class="t4c-icon-box-icon">';
				if($this->t4c_image){
					$image = \FilesModel::findByPk( $this->t4c_image );
					$this->Template->box_icon .= '<img src="'.$image->path.'" alt="'.$title.'">';	
				}	
				$this->Template->box_icon .= '</div>';					
			}
			
			if ($this->t4c_ib_add_button && $this->url){
				
				if ($buttonTextColor = \themes4contao\themes4contao::compileColor( $this->t4c_ib_button_text_color )){
					$style .= 'color:' . $buttonTextColor . ';';
				}
				if ($buttonBgColor = \themes4contao\themes4contao::compileColor( $this->t4c_ib_button_bgcolor )){
					$style .= 'background:' .  $buttonBgColor . ';';
				}
				
				if ($this->t4c_icon_button_border_size != '' && $this->t4c_icon_button_border_size != '0'){
					$style .= 'border-width:' . $this->t4c_icon_button_border_size . 'px; border-style:solid;';
					if ($buttonBorderColor = \themes4contao\themes4contao::compileColor( $this->t4c_ib_button_border_color )){
						$style .= 'border-color:' .  $buttonBorderColor . ';';
					}
				} else {
					$style .= 'border:none;';
				}
				
				if($this->t4c_icon_button_border_radius){
					$radius = intval($this->t4c_icon_button_border_radius).'px';
					$style .= '-webkit-border-radius: '.$radius.';-moz-border-radius: '.$radius.';border-radius: '.$radius.';';
				}
				$this->Template->button_style = 'style="' . $style . '"';
			}
			
			
		if (TL_MODE == 'BE')
        {
		   $icons = \Contao\LayoutModel::findAll();
		   
		   $GLOBALS['TL_CSS']['t4c_icon_fonts'] = \Codefog\IconPicker\Manager::getCssFile(deserialize($icons->iconsets, true)) ;
        }
		
    }
}