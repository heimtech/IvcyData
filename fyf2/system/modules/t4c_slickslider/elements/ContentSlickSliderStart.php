<?php

/**
 * t4c_elements extension for Contao Open Source CMS
 *
 * Copyright (C) 2015 themes4contao
 *
 * @package t4c_slickslider
 * @author  Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */

namespace themes4contao;

/**
 * Class ContentSlickSliderStart
 *
 * Front end content element "Slick Slider".
 */
class ContentSlickSliderStart extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_slick_slider_start';


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
		if ($this->t4c_slick_dots){
			$cssId[1] .= ' t4c_slick_slider_dots ';
		}
		$this->cssID = $cssId;
		
		// Retrieve the current gallery options
        $objOptions = SlickSliderModel::findById($this->slickslider_config);
		
		if ($objOptions !== null) {
            $arrOptions = $objOptions->row();		
			$GLOBALS['TL_JAVASCRIPT']['t4c_slick'] = 'system/modules/t4c_slickslider/assets/js/slick.min.js';
			$GLOBALS['TL_CSS']['t4c_slick'] = 'system/modules/t4c_slickslider/assets/css/slick.css';
			$GLOBALS['TL_CSS']['t4c_slick_theme'] = 'system/modules/t4c_slickslider/assets/css/slick-theme.css';
		
			$this->Template->t4c_slick_dots = $arrOptions['t4c_slick_dots'];
			$responsive ='
				 responsive: [
					{
					  breakpoint: 970,
					  settings: {
						slidesToShow: ' . $arrOptions['t4c_slick_slide_show_tablet'] . ',
						slidesToScroll: ' . $arrOptions['t4c_slick_slide_scroll_tablet'] . ',
						arrows: ' . ( $arrOptions['t4c_slick_arrows_tablet'] ? 'true' : 'false') . ',
						dots:' . ( $arrOptions['t4c_slick_dots_tablet'] ? 'true' : 'false') . ',
					  }
					},
					
					{
					  breakpoint: 480,
					  settings: {
						slidesToShow: ' . $arrOptions['t4c_slick_slide_show_mobile'] . ',
						slidesToScroll: ' . $arrOptions['t4c_slick_slide_scroll_mobile'] . ',
						arrows: ' . ( $arrOptions['t4c_slick_arrows_mobile'] ? 'true' : 'false') . ',
						dots: ' . ( $arrOptions['t4c_slick_dots_mobile'] ? 'true' : 'false') . ',
					  }
					}
				]';
				
				
				//Dots
				$dot_style = '';
				if ($arrOptions['t4c_slick_dot_size']) $dot_style .= 'width:' . $arrOptions['t4c_slick_dot_size'] . 'px; height:' . $arrOptions['t4c_slick_dot_size'] . 'px;';
				if ($dotColor = \themes4contao\themes4contao::compileColor( $arrOptions['t4c_slick_dot_color'] )) $dot_style .= 'background:' . $dotColor . ';';
				if ($arrOptions['t4c_slick_dot_border']) $dot_style .= 'border-width:' . $arrOptions['t4c_slick_dot_border'] . 'px;';
				if ($dotBorderColor = \themes4contao\themes4contao::compileColor( $arrOptions['t4c_slick_dot_border_color'])) $dot_style .= 'border-color:' . $dotBorderColor . ';';
				if ($arrOptions['t4c_slick_dot_border'] == 0) $dot_style .= 'border:none;';
				
				$dot_active_style = '';
				if ($arrOptions['t4c_slick_dot_size']) $dot_active_style .= 'width:' .  $arrOptions['t4c_slick_dot_size'] . 'px; height:' .  $arrOptions['t4c_slick_dot_size'] . 'px;';
				if ($arrOptions['t4c_slick_dot_border']) $dot_active_style .= 'border-width:' . $arrOptions['t4c_slick_dot_border'] . 'px;';
				if ($active_border_color = \themes4contao\themes4contao::compileColor( $arrOptions['t4c_slick_active_dot_border_color'] )) $dot_active_style .= 'border-color:' . $active_border_color . ';';
				if ($active_dot_color = \themes4contao\themes4contao::compileColor( $arrOptions['t4c_slick_active_dot_color'] )) $dot_active_style .= 'background:' . $active_dot_color . ';';
				if ($arrOptions['t4c_slick_dot_border'] == 0 ) $dot_active_style .= 'border:none;';
				if ($this->squares){
					$dot_style .='-webkit-border-radius: 0px;-moz-border-radius: 0px;border-radius: 0px;';
					$dot_active_style .='-webkit-border-radius: 0px;-moz-border-radius: 0px;border-radius: 0px;';
				} else {
					$dot_style .='-webkit-border-radius: 50%;-moz-border-radius: 50%;border-radius: 50%;';
					$dot_active_style .='-webkit-border-radius: 50%;-moz-border-radius: 50%;border-radius: 50%;';
				}
				
				// Arrows
				$arrows_css = '';
				if ($arrOptions['t4c_slick_arrow_size'])
					$arrows_css .= 'font-size:' . $arrOptions['t4c_slick_arrow_size'] . 'px;';
				if( $arrowColor = \themes4contao\themes4contao::compileColor( $arrOptions['t4c_slick_arrow_color'] ) )
					$arrows_css .= 'color:' . $arrowColor . ';';
				if( $arrOptions['t4c_slick_arrows_mobile'] || $arrOptions['t4c_slick_arrows_tablet'] || $arrOptions['t4c_slick_arrows'] )
					$arrows_css = 'style="' . $arrows_css . '"';
				
				switch( $arrOptions['t4c_slick_arrow_style'] ){
					case "1":
						$left_arrow = '<button type="button" class="slick-prev" style="margin-top:-' . $arrOptions['t4c_slick_arrow_size']/2 . 'px;"><i class="pro-long-arrow-left" ' . $arrows_css . '></i></button>';
						$right_arrow = '<button type="button" class="slick-next" style="margin-top:-' . $arrOptions['t4c_slick_arrow_size']/2 . 'px;"><i  class="pro-long-arrow-right" ' . $arrows_css . '></i></button>';
					break;
					
					case "2":
						$left_arrow = '<button type="button" class="slick-prev" style="margin-top:-' . $arrOptions['t4c_slick_arrow_size']/2 . 'px;"><i class="pro-chevron-left" ' . $arrows_css . '></i></button>';
						$right_arrow = '<button type="button" class="slick-next" style="margin-top:-' . $arrOptions['t4c_slick_arrow_size']/2 . 'px;"><i  class="pro-chevron-right" ' . $arrows_css . '></i></button>';
					break;
					
					case "3":
						$left_arrow = '<button type="button" class="slick-prev" style="margin-top:-' . $arrOptions['t4c_slick_arrow_size']/2 . 'px;"><i class="pro-chevron-circle-left" ' . $arrows_css . '></i></button>';
						$right_arrow = '<button type="button" class="slick-next" style="margin-top:-' . $arrOptions['t4c_slick_arrow_size']/2 . 'px;"><i  class="pro-chevron-circle-right" ' . $arrows_css . '></i></button>';
					break;
					
					case "4":
						$left_arrow = '<button type="button" class="slick-prev" style="margin-top:-' . $arrOptions['t4c_slick_arrow_size']/2 . 'px;"><i class="pro-caret-left" ' . $arrows_css . '></i></button>';
						$right_arrow = '<button type="button" class="slick-next" style="margin-top:-' . $arrOptions['t4c_slick_arrow_size']/2 . 'px;"><i  class="pro-caret-right" ' . $arrows_css . '></i></button>';
					break;
					
					case "5":
						$left_arrow = '<button type="button" class="slick-prev" style="margin-top:-' . $arrOptions['t4c_slick_arrow_size']/2 . 'px;"><i class="pro-arrow-left" ' . $arrows_css . '></i></button>';
						$right_arrow = '<button type="button" class="slick-next" style="margin-top:-' . $arrOptions['t4c_slick_arrow_size']/2 . 'px;"><i  class="pro-arrow-right" ' . $arrows_css . '></i></button>';
					break;
					
					case "6":
						$left_arrow = '<button type="button" class="slick-prev" style="margin-top:-' . $arrOptions['t4c_slick_arrow_size']/2 . 'px;"><i class="pro-arrow-circle-left" ' . $arrows_css . '></i></button>';
						$right_arrow = '<button type="button" class="slick-next" style="margin-top:-' . $arrOptions['t4c_slick_arrow_size']/2 . 'px;"><i  class="pro-arrow-circle-right" ' . $arrows_css . '></i></button>';
					break;
					
					case "7":
						$left_arrow = '<button type="button" class="slick-prev" style="margin-top:-' . $arrOptions['t4c_slick_arrow_size']/2 . 'px;"><i class="pro-angle-left" ' . $arrows_css . '></i></button>';
						$right_arrow = '<button type="button" class="slick-next" style="margin-top:-' . $arrOptions['t4c_slick_arrow_size']/2 . 'px;"><i  class="pro-angle-right" ' . $arrows_css . '></i></button>';
					break;
					
					default:
						$left_arrow = '<button type="button" class="slick-prev" style="margin-top:-' . $arrOptions['t4c_slick_arrow_size']/2 . 'px;"><i class="pro-long-arrow-left" ' . $arrows_css . '></i></button>';
						$right_arrow = '<button type="button" class="slick-next" style="margin-top:-' . $arrOptions['t4c_slick_arrow_size']/2 . 'px;"><i  class="pro-long-arrow-right" ' . $arrows_css . '></i></button>';
					break;
				}
				
				$options = '{';
				
				$padding = deserialize( $arrOptions['t4c_slick_center_padding'] );
				
				if ($padding['value']!='' && $padding['unit']!=''){
					$padding = $padding['value'].$padding['unit'];
				} else {
					$padding = '';
				}
				
				$options .='accessibility:' . ( $arrOptions['t4c_slick_accessibility'] ? 'true' : 'false' ) . ',
					autoplay:' . ( $arrOptions['t4c_slick_autoplay'] ? 'true' : 'false' ) . ',
					autoplaySpeed:' . $arrOptions['t4c_slick_autoplay_speed'] . ',
					centerMode:' . ( $arrOptions['t4c_slick_centermode'] ? 'true' : 'false' ) . ',';
				if ($padding){
					$options .= 'centerPadding: "' . $padding . '",';
				}	
				$options .= '
					cssEase:"' . $arrOptions['t4c_slick_css_ease'] . '",
					dots:' . ( $arrOptions['t4c_slick_dots'] ? 'true' : 'false' ) . ',
					draggable:' . ( $arrOptions['t4c_slick_draggable'] ? 'true' : 'false' ) . ',
					edgeFriction:' . $arrOptions['t4c_slick_edge_friction'] . ',
					fade:' . ( $arrOptions['t4c_slick_fade'] ? 'ture' : 'false' ) . ',
					arrows:' . ( $arrOptions['t4c_slick_arrows'] ? 'true' : 'false' ) . ',
					infinite:' . ( $arrOptions['t4c_slick_infinite'] ? 'true' : 'false' ) . ',
					initial_slide:' . $arrOptions['t4c_slick_initial_slide'] . ',
					lazy_load:"' . $arrOptions['t4c_slick_lazyload'] . '",
					pauseOnHover:' . ( $arrOptions['t4c_slick_pause_hover'] ? 'true' : 'false' ) . ',
					pauseOnDotsHover:' . ( $arrOptions['t4c_slick_pause_hover_dots'] ? 'true' : 'false' ) . ',
					respondTo:"' . $arrOptions['t4c_slick_respond_to'] . '",
					slidesToShow:' . $arrOptions['t4c_slick_slide_show'] . ',
					slidesToScroll:' . $arrOptions['t4c_slick_slide_scroll'] . ',
					' . $responsive  . ',
					speed:' . $arrOptions['t4c_slick_speed'] . ',
					swipe:' . ( $arrOptions['t4c_slick_swipe'] ? 'true' : 'false' ) . ',
					prevArrow: \'' . $left_arrow . '\',
					nextArrow: \'' . $right_arrow . '\',
					swipeToSlide:' . ( $arrOptions['t4c_slick_swipe_to_slide'] ? 'true' : 'false' ) . ',
					touchMove:' . ( $arrOptions['t4c_slick_touch_move'] ? 'true' : 'false' ) . ',
					touchThreshold:' . $arrOptions['t4c_slick_touch_threshold'] . ',
					variableWidth:' . ( $arrOptions['t4c_slick_variable_width']  ? 'true' : 'false' ) . ',
					vertical:' . ( $arrOptions['t4c_slick_vertical'] ? 'true' : 'false') . ',
					rtl:' . ( $arrOptions['t4c_slick_rtl'] ? 'true' : 'false' ) . ',
					waitForAnimate:' . ( $arrOptions['t4c_slick_animate'] ? 'true' : 'false' ) .',
					customPaging: function(slider, i) {
					   return \'<span type="button" style="' . $dot_style . '"  class="vce_content_slider_dot"></span>\';
					}
					';
				$options .= '}';
				
				$js = '<script type="text/javascript">
				 (function($) {
					
					$(document).ready(function(){
						$(".slick' . $this->id . '").slick(' . $options .');							
						var normal = $(".slick' . $this->id . '").attr("data-normal-style");
						var active = $(".slick' . $this->id . '").attr("data-active-style");
						$(".slick' . $this->id . '").on("afterChange", function(slick, currentSlide){
							$(".slick-dots li span", this).attr("style", normal);
							$(".slick-dots li.slick-active span", this).attr("style", active);
						});	
						
						var element = $(".slick' . $this->id . '");

						$(element).on("setPosition", function(event, slick, currentSlide, nextSlide) {
						  var slidesShown = $(element).slick("slickGetOption", "slidesToShow");
						  var numberOfSlides = $(element).find(".slick-slide").length;
						
						  if (slidesShown === numberOfSlides) {
							$(element).find(".slick-track").css("transform", "translate3d(0px, 0px, 0px)");
						  }
						});
						
					});	
										
					$(".slick' . $this->id . '").on("init", function(event, slick){
						var normal = $(".slick' . $this->id . '").attr("data-normal-style");
						var active = $(".slick' . $this->id . '").attr("data-active-style");
							$(".slick-dots li span", this).attr("style", normal);
							$(".slick-dots li.slick-active span", this).attr("style", active);
					});
					
					
					
				  })(jQuery);	
				</script>';
				
				$GLOBALS['TL_BODY'][] = $js;
				
				$this->Template->dot_style = $dot_style;
				$this->Template->dot_active_style = $dot_active_style;
		
		
		}				
		
		
    }
}