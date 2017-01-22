<?php

/**
 * t4c_elements extension for Contao Open Source CMS
 *
 * Copyright (C) 2015 themes4contao
 *
 * @package t4c_icon_box
 * @author  Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */

namespace themes4contao;

/**
 * Class ContentNotification
 *
 * Front end content element "Notification".
 */
class ContentNotification extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_notification';

    /**
     * Generate the content element
     */
    protected function compile()
    {
		$GLOBALS['TL_JAVASCRIPT']['t4c_notification'] = 'system/modules/t4c_elements/assets/js/jquery.amaran.min.js';
		$GLOBALS['TL_JAVASCRIPT']['t4c_notificatio_js'] = 'system/modules/t4c_elements/assets/js/notification.js';
		$GLOBALS['TL_CSS']['t4c_notification'] = 'system/modules/t4c_elements/assets/css/amaran.min.css';
				
		$icon_style = '';
		if ($icon_color = \themes4contao\themes4contao::compileColor( $this->t4c_icon_color )){
			$icon_style .= 'color:' . $icon_color . ';';
		}
		if ($icon_size != ''){
			$icon_style .= 'font-size:' . $icon_size . 'px;';
		}
		if ($background_color = \themes4contao\themes4contao::compileColor( $this->t4c_bgcolor )){
				$box_style = 'background:' . $background_color . ';';
		} else {
			$box_style = '';
		}
		
		if ($text_color = \themes4contao\themes4contao::compileColor( $this->t4c_textcolor )){
			$this->Template->text_color = 'color:' . $text_color . ';';
		} else {
			$this->Template->text_color = '';
		}
		
		if ($this->t4c_noti_close_click == 1){
			$this->Template->t4c_noti_close_click = 'true';
		} else {
			$this->Template->t4c_noti_close_click = 'false';
		}
		
		if ($this->t4c_noti_close_button == 1){
			$this->Template->t4c_noti_close_button = 'true';
		} else {
			$this->Template->t4c_noti_close_button = 'false';
		}
				
		if ($this->t4c_noti_sticky == 1){
			$this->Template->t4c_noti_sticky = 'true';
		} else {
			$this->Template->t4c_noti_sticky = 'false';
		}
		
		$this->Template->icon_style = $icon_style;
		$this->Template->box_style = $box_style;
    }
}