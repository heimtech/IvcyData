<?php

/**
 * t4c_counters extension for Contao Open Source CMS
 *
 * Copyright (C) 2015 themes4contao
 *
 * @package t4c_counters
 * @author  Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */

namespace themes4contao;

/**
 * Class ContentCircleProgress
 *
 * Front end content element "Circle Progress".
 */
class ContentCounters extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_counters';


    /**
     * Generate the content element
     */
    protected function compile()
    {

		if (TL_MODE == 'BE')
        {
		   	$GLOBALS['TL_JAVASCRIPT']['t4c_jquery'] = 'assets/jquery/core/' . $GLOBALS['TL_ASSETS']['JQUERY'] . '/jquery.min.js';
			$GLOBALS['TL_JAVASCRIPT']['t4c_jquery_con_confilct'] = 'system/modules/t4c_elements/assets/js/jquery.noconflict.js';
			$GLOBALS['TL_JAVASCRIPT']['t4c_waypoints'] = 'system/modules/t4c_elements/assets/js/jquery.waypoints.min.js';
        }
		
		$GLOBALS['TL_JAVASCRIPT']['t4c_easing'] = 'system/modules/t4c_elements/assets/js/jquery.easing.js';
		$GLOBALS['TL_JAVASCRIPT']['t4c_counters'] = 'system/modules/t4c_elements/assets/js/countUp.min.js';
		$GLOBALS['TL_JAVASCRIPT']['t4c_counters_js'] = 'system/modules/t4c_elements/assets/js/t4c_counters.js';
		
		$cssId = $this->cssID;
		$cssId[1] .= ' text_' . $this->t4c_text_align . ' pos_' . $this->t4c_icon_position;
		$this->cssID = $cssId;
		
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
					
					if($this->t4c_icon_border_radius){
						$this->t4c_icon_border_radius = deserialize($this->t4c_icon_border_radius);
						$radius = intval($this->t4c_icon_border_radius['top']).$this->t4c_icon_border_radius['unit'].' '.intval($this->t4c_icon_border_radius['right']).$this->t4c_icon_border_radius['unit'].' '.intval($this->t4c_icon_border_radius['bottom']).$this->t4c_icon_border_radius['unit'].' '.intval($this->t4c_icon_border_radius['left']). $this->t4c_icon_border_radius['unit'];
						$icon_style .= '-webkit-border-radius: '.$radius.';-moz-border-radius: '.$radius.';border-radius: '.$radius.';';
					}
					
					$icon_style .= 'line-height:' . ($this->t4c_icon_size + 2*$this->t4c_icon_padding) . 'px;';				
				}
				
				if ($bgColor = \themes4contao\themes4contao::compileColor( $this->t4c_iconBgColor )){
					$icon_style .= 'background:' . $bgColor . ';';
				}
				
				if ($this->t4c_icon_border_width != '' && $this->t4c_icon_border_width != 0){
					$icon_style .= 'border-width:' . $this->t4c_icon_border_width . 'px;';
					
					if ($borderColor =  \themes4contao\themes4contao::compileColor( $this->t4c_icon_color_border )){
						$icon_style .= 'border-color:' . $borderColor . ';';
					}
					
				} else {
					$icon_style .= 'border:none;';
				}
				$icon_style .= 'text-align:center;';
				$icon_style .= '"';
					
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
		
    }
}