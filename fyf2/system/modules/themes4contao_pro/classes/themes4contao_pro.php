<?php 
namespace themes4contao;

class themes4contao_pro extends themes4contao{

	
	private static $toolbar_left = false;
	private static $toolbar_right = false;
	
	/*
	 * Generate Toolbar Change language
	 * @return mixed
	 */
	public static function generateToolbarChangelanguage($obj, $elementClass) {
	    $template = new \FrontendTemplate('t4c_toolbar_changelanguage');
		
		$template->header_show_changelanguage = $obj->pro_header_show_changelanguage;
		$template->header_changelanguage_module = $obj->pro_header_changelanguage_module;
		$template->header_changelanguage_position = $obj->pro_header_changelanguage_position;
		$template->elementClass = $elementClass;
    	
		return $template->parse();
	}
	
	
	/*
	 * Generate Toolbar Contact
	 * @return mixed
	 */
	public static function generateToolbarContact($obj, $elementClass) {
	    $template = new \FrontendTemplate('t4c_toolbar_contact');
		
		$template->toolbar_phone = $obj->pro_toolbar_phone;
		if ($obj->pro_toolbar_email){
			$strEmail = \StringUtil::encodeEmail($obj->pro_toolbar_email);
			$template->toolbar_email = '<a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;' . $strEmail . '" class="email">' . preg_replace('/\?.*$/', '', $strEmail) . '</a>';
		}
		$template->header_contactinfo_position = $obj->pro_header_contactinfo_position;
    	$template->elementClass = $elementClass;
		
		return $template->parse();
	}
	
	
	/*
	 * Generate Toolbar Social List
	 * @return mixed
	 */
	public static function generateToolbarSocialList($obj, $elementClass) {
	    $template = new \FrontendTemplate('t4c_toolbar_sociallist');
		
		$template->header_social_position = $obj->pro_header_social_position;
		$template->items = deserialize($obj->pro_social_networks_list);
    	$template->elementClass = $elementClass;
		
		return $template->parse();
	}
	
	/*
	* Generate Toolbar Forms
	* @return mixed
	*/
	public static function generateToolbarForms($obj, $elementClass) {
	    $template = new \FrontendTemplate('t4c_toolbar_forms');
		
		$template->header_show_register_form = $obj->pro_header_show_register_form;
		$template->header_show_newsletter_form = $obj->pro_header_show_newsletter_form;
		$template->header_show_login_form = $obj->pro_header_show_login_form;
		$template->header_form_position = $obj->pro_header_form_position;
		$template->header_login_form_module = $obj->pro_header_login_form_module;
		$template->header_register_form_module = $obj->pro_header_register_form_module;
		$template->header_newletter_form_module = $obj->pro_header_newletter_form_module;
		$template->elementClass = $elementClass;
		
    	return $template->parse();
	}
	
	/*
	* Generate Toolbar
	* @return mixed
	*/
	public static function generateToolbar() {
	   $obj = parent::getCurrentConfiguration();
	   $output = '';	
	   
	   if ($obj->pro_header_show_changelanguage && $obj->pro_header_changelanguage_module){
	   		$elementClass = static::toolbarElementPosition($obj->pro_header_changelanguage_position);
	   		$output .= static::generateToolbarChangelanguage($obj, $elementClass);
	   }
	   
	   if ($obj->pro_toolbar_phone || $obj->pro_toolbar_email){
		   $elementClass = static::toolbarElementPosition($obj->pro_header_contactinfo_position);
		   $output .= static::generateToolbarContact($obj, $elementClass);
	   }
       
	   if ($obj->pro_header_social_position == 'left' || $obj->pro_header_social_position == 'right'){
		   $elementClass = static::toolbarElementPosition($obj->pro_header_social_position);
		   $output .= static::generateToolbarSocialList($obj, $elementClass);
	   }
	   
	   if ($obj->pro_header_show_register_form == 1 ||  $obj->pro_header_show_newsletter_form == 1 ||  $obj->pro_header_show_login_form == 1){
			$elementClass = static::toolbarElementPosition($obj->pro_header_form_position);
			$output .= static::generateToolbarForms($obj, $elementClass);			
	   }
	   return $output;
	}
	
	private static function toolbarElementPosition($position) {
        if ($position == 'left' && !static::$toolbar_left) {
            static::$toolbar_left = true;
            return 'first';
        } 
		        
        if ($position == 'right' && !static::$toolbar_right) {
            static::$toolbar_right = true;
            return 'first';
        }

        return '';
    }


	public function addElementsAnimation($objTemplate)
	{		
		if (substr($objTemplate->getName(),0,3) == 'ce_')
	    { 
			if($objTemplate->t4c_elements_animation){
				$objTemplate->cssID .= ' data-t4c-animation="' . $objTemplate->t4c_elements_animation . '" data-t4c-animation-delay="' . $objTemplate->t4c_elements_animation_delay . '" data-t4c-animation-duration="' . $objTemplate->t4c_elements_animation_duration . '"'; 
				$objTemplate->class .= ' t4c-animation';
			}
		}	
	}
	
	public function extHeadline($objTemplate)
	{		
		if (substr($objTemplate->getName(),0,3) == 'ce_')
	    { 
			if ($objTemplate->headline_style){
				$objTemplate->class .= ' '.$objTemplate->headline_style;
			}
			
			if ($objTemplate->headline_style == 't4c_headline_5'  || $objTemplate->headline_style == 't4c_headline_7'){
				$objTemplate->headline = '<span>' . $objTemplate->headline . '</span>';
			}
		}	
	}
	
	public function showIcons($objTemplate){
		if ($objTemplate->getName() == 'mod_sitemap' || $objTemplate->getName() == 'mod_navigation' || $objTemplate->getName() == 'mod_t4c_megamenu' || $objTemplate->getName() == 'mod_customnav')
	    { 
			if( $objTemplate->showIcons ){
				$objTemplate->class .= ' ' . 't4c_show_icons';
			}
		}
	}
	
	public function generateCss(){
		$GLOBALS['TL_HEAD'][] = '<style type="text/css">' . implode($GLOBALS['T4C_CSS']) . '</style>';
	}
	
	public function articleCompile($objTemplate)
	{
		
		
		if ($objTemplate->getName() == 'mod_article')
	    {
		   //Background Type
		   if( $objTemplate->t4c_row_bg_type != 'no_background'){
		   		$this->generateBackground($objTemplate);
		   }
		  
		   // Background Overaly Mask
		   if( $objTemplate->t4c_add_row_overlay == 1){
				$objTemplate->t4c_mask = $this->generateOverlay($objTemplate);
				$objTemplate->class .= ' t4c_mask ';		   		
		   } else {
		   		$objTemplate->t4c_mask = '';
		   }
		   
		   //Min height
		   if ($objTemplate->t4c_row_height){
			   $objTemplate->style .= 'min-height:' . $objTemplate->t4c_row_height . 'px;height: ' . $objTemplate->t4c_row_height . 'px;';
		   }
		   
		   //Row padding
		   $rowPadding = deserialize($objTemplate->t4c_row_padding);
		   if ($rowPadding[0]){
				$objTemplate->style .= 'padding-top:' . $rowPadding[0] . 'px;';
			}
			
			if ($rowPadding[1]){
				$objTemplate->style .= 'padding-bottom:' . $rowPadding[1] . 'px;';
			}

		    //Font color
		   if ($font_color = \themes4contao\themes4contao::compileColor($objTemplate->t4c_row_fontcolor))
		   {
		   		 $objTemplate->alias;
				$articleStyle = '#'; 
				$GLOBALS['T4C_CSS'][] = '#' . $objTemplate->alias . '{ color:' . $font_color . ';}#' . $objTemplate->alias . ' p{ color:' . $font_color . ';}#' . $objTemplate->alias . ' strong{ color:' . $font_color . ';}#' . $objTemplate->alias . ' h1{ color:' . $font_color . ';}#' . $objTemplate->alias . ' h2{ color:' . $font_color . ';}#' . $objTemplate->alias . ' h3{ color:' . $font_color . ';}#' . $objTemplate->alias . ' h4{ color:' . $font_color . ';}#' . $objTemplate->alias . ' h5{ color:' . $font_color . ';}#' . $objTemplate->alias . ' h6{ color:' . $font_color . ';}';
				$objTemplate->style .= 'color:' . $font_color . ';';
		   }
		   
		   //Background Video
		   if ($objTemplate->t4c_row_bg_type == 'video'){
		   		$objTemplate->t4c_video = $this->generateVideoBG($objTemplate); 
		   } else {
		   		$objTemplate->t4c_video = '';
		   }
		   
		   //Full height
		   if ($objTemplate->t4c_row_full_height == 1){
				$objTemplate->class .= ' t4c_row_full_height ';
			}
		   
		   // Top separator
		   if ($objTemplate->t4c_row_add_top_separator == 1){
			   	$row_options = array(
					'position'							=> 'top',
					'add_separator' 					=> $objTemplate->t4c_row_add_top_separator,
					'separator_style' 					=> $objTemplate->t4c_row_top_serparator_style,
					'separator_height' 					=> $objTemplate->t4c_row_top_separator_height,
					'separator_background_color' 		=> \themes4contao\themes4contao::compileColor($objTemplate->t4c_row_top_separator_bgcolor),
					'add_separator_icon' 				=> $objTemplate->t4c_row_add_top_icon,
					'separator_icon_type' 				=> $objTemplate->t4c_row_top_icon_type,
					'separator_icon_image' 				=> $objTemplate->t4c_row_top_icon_image_file,
					'separator_icon_font' 				=> $objTemplate->t4c_row_top_icon,
					'separator_icon_size' 				=> $objTemplate->t4c_row_top_icon_size,
					'separator_icon_color' 				=> \themes4contao\themes4contao::compileColor($objTemplate->t4c_row_top_icon_color),
					'separator_icon_padding' 			=> $objTemplate->t4c_row_top_icon_padding,
					'separator_icon_background_color'	=> \themes4contao\themes4contao::compileColor($objTemplate->t4c_row_top_icon_bgcolor),
					'separator_icon_border_color' 		=> \themes4contao\themes4contao::compileColor($objTemplate->t4c_row_top_icon_border_color),
					'separator_icon_border_width' 		=> $objTemplate->t4c_row_top_icon_border_width,
					'separator_icon_margin'				=> $objTemplate->t4c_row_top_icon_margin,
					'separator_icon_border_radius'		=> deserialize($objTemplate->t4c_row_top_icon_border_radius)
					);
		   		$objTemplate->t4c_top_separator = $this->get_row_separator($row_options);
				$objTemplate->class .= ' t4c_row_separators';
				$objTemplate->style .= 'position:relative;';
		   }
		   
		    // Bottom separator
		   if ($objTemplate->t4c_row_add_bottom_separator == 1){
			   	$row_options = array(
					'position'							=> 'bottom',
					'add_separator' 					=> $objTemplate->t4c_row_add_bottom_separator,
					'separator_style' 					=> $objTemplate->t4c_row_bottom_serparator_style,
					'separator_height' 					=> $objTemplate->t4c_row_bottom_separator_height,
					'separator_background_color' 		=> \themes4contao\themes4contao::compileColor($objTemplate->t4c_row_bottom_separator_bgcolor),
					'add_separator_icon' 				=> $objTemplate->t4c_row_add_bottom_icon,
					'separator_icon_type' 				=> $objTemplate->t4c_row_bottom_icon_type,
					'separator_icon_image' 				=> $objTemplate->t4c_row_bottom_icon_image_file,
					'separator_icon_font' 				=> $objTemplate->t4c_row_bottom_icon,
					'separator_icon_size' 				=> $objTemplate->t4c_row_bottom_icon_size,
					'separator_icon_color' 				=> \themes4contao\themes4contao::compileColor($objTemplate->t4c_row_bottom_icon_color),
					'separator_icon_padding' 			=> $objTemplate->t4c_row_bottom_icon_padding,
					'separator_icon_background_color'	=> \themes4contao\themes4contao::compileColor($objTemplate->t4c_row_bottom_icon_bgcolor),
					'separator_icon_border_color' 		=> \themes4contao\themes4contao::compileColor($objTemplate->t4c_row_bottom_icon_border_color),
					'separator_icon_border_width' 		=> $objTemplate->t4c_row_bottom_icon_border_width,
					'separator_icon_margin'				=> $objTemplate->t4c_row_bottom_icon_margin,
					'separator_icon_border_radius'		=> deserialize($objTemplate->t4c_row_bottom_icon_border_radius)
					);
		   		$objTemplate->t4c_bottom_separator = $this->get_row_separator($row_options);
				$objTemplate->class .= ' t4c_row_separators';
				$objTemplate->style .= 'position:relative;';
		   }

	    }
	}
	
	public function generateVideoBG($objTemplate){
		$random = substr(number_format(time() * mt_rand(),0,'',''),0,10);
		if($objTemplate->t4c_row_video_youtube){
					$output = '<div id="player_' . $random . '" style="position: absolute; top:0px; left:0px; z-index: -99; width: 100%; height: 100%">
								</div>';
					$output .='
					<div id="player"></div>';
					$js ='<script>      
					      var tag = document.createElement("script");
					      tag.src = "http://www.youtube.com/player_api";
				    	  var firstScriptTag = document.getElementsByTagName("script")[0];
					      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

					      var player;
					      function onYouTubePlayerAPIReady() {
					        player = new YT.Player("player_' . $random . '", {
					        playerVars: { "autoplay": 1, "controls": 1,"autohide":1,"wmode":"opaque","width":"100%","height":"100%" },
					        videoId: "' . $objTemplate->t4c_row_video_youtube . '",
					        events: {
					            "onReady": onPlayerReady}
					        });
					      }
					
					      function onPlayerReady(event) {
					        event.target.mute();
					      }
					</script>';
					$GLOBALS['TL_BODY'][] = $js;
					return $output;
				} else {
					$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/themes4contao/assets/js/jquery.vide.min.js';
					$objTemplate->class .= ' ' . $objTemplate->alias .'_' . $random;
					$js .= '<script type="text/javascript">';
					$js .= '(function ($) { $(document).ready(function(){';
					$js .= '$(".'. $objTemplate->alias .'_' . $random . '").vide({';
					
					if($objTemplate->t4c_row_video_mp4){
						$video = \FilesModel::findByPk($objTemplate->t4c_row_video_mp4);
						$js .= 'mp4: "' . $video->path . '",';
					}
					
					if($objTemplate->t4c_row_video_webm){
						$video = \FilesModel::findByPk($objTemplate->t4c_row_video_webm);
						$js .= 'webm: "' . $video->path . '",';
					}
		
					if( $objTemplate->t4c_row_video_poster != ''){
						$image = \FilesModel::findByPk($objTemplate->t4c_row_video_poster);
						$js .= 'poster: "' . $image->path . '"';
					}
					
					$js .= '}), {bgColor: "transparent"}});';	
					$js .= '})(jQuery)';
					$js .= '</script>';
					$GLOBALS['TL_BODY'][] = $js;
				}
				
	}
	
	public function generateBackground($objTemplate){
		
		switch ($objTemplate->t4c_row_bg_type) {
			case 'color':
				if($bg_color = \themes4contao\themes4contao::compileColor( $objTemplate->t4c_row_bgcolor )){
					$objTemplate->style .= 'background:' . $bg_color . ';';
				}
			break;
			
			case 'image':
				
				if($bg_color = \themes4contao\themes4contao::compileColor( $objTemplate->t4c_row_bgcolor )){
					$objTemplate->style .= 'background-color:' . $bg_color . ';';
				}
				
				if( $objTemplate->t4c_row_image )
				{
					$bg_image = \FilesModel::findByPk($objTemplate->t4c_row_image);
				}
				
				if($bg_image->path)
				{
					$objTemplate->style .= 'background-image: url(' . $bg_image->path . ');';
				}
			
				if( $objTemplate->t4c_row_bg_image_settings == 'cover' )
				{
					$objTemplate->style .= '-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;';
					$objTemplate->style .= 'background-repeat: no-repeat;';
					$objTemplate->style .= 'background-position: ' . $objTemplate->t4c_row_bg_image_position . ';';
				}
				elseif( $objTemplate->t4c_row_bg_image_settings == 'contain' ){
					 $objTemplate->style .= '-webkit-background-size: contain; -moz-background-size: contain; -o-background-size: contain;  background-size: contain;';
					 $objTemplate->style .= 'background-repeat: no-repeat;';
					 $objTemplate->style .= 'background-position: ' . $objTemplate->t4c_row_bg_image_position . ';';
				}
				else{
					$objTemplate->style .= 'background-repeat: ' . $objTemplate->t4c_row_bg_image_settings . ';';
					$objTemplate->style .= 'background-position: ' . $objTemplate->t4c_row_bg_image_position . ';';
				}
				
				if ($objTemplate->t4c_row_bg_image_attachment){
					$objTemplate->style .=  'background-attachment:' . $objTemplate->t4c_row_bg_image_attachment . ';';
				}
								
			break;
			
			case 'parallax':
				$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/themes4contao/assets/js/jquery.stellar.min.js';
				$GLOBALS['TL_BODY'][] = '
					<script type="text/javascript">
						jQuery(function(){
							var breakpoint = parseInt(jQuery("body").attr("data-menu-breakpoint"));
							
							if( !isMobile() ){
			
								jQuery.stellar({
										horizontalScrolling	: false,
										responsive			: true
								});
			
							} else {
			
								jQuery(".mod_article[data-stellar-background-ratio]").css( "background-attachment" , "scroll" );
		
							}
					});						
					</script>';
				if( $objTemplate->t4c_row_image )
				{
					$bg_image = \FilesModel::findByPk($objTemplate->t4c_row_image);
				}
				
				if($bg_image->path)
				{
					$objTemplate->style .= 'background-image: url(' . $bg_image->path . ');';
				}
				$objTemplate->style .= "background-repeat: no-repeat;";
				$objTemplate->style .= 'background-position:  center top;';
				$objTemplate->style .= 'background-attachment: fixed;'; 
				
				
				if( $objTemplate->t4c_row_bg_image_parallax_settings == 'cover' )
				{
					$objTemplate->style .= '-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;';
				}
				elseif( $objTemplate->t4c_row_bg_image_parallax_settings == 'contain' ){
					 $objTemplate->style .= '-webkit-background-size: contain !important; -moz-background-size: contain !important; -o-background-size: contain !important;  background-size: contain !important;';
				}
				$objTemplate->tc4_parallax = 'data-stellar-background-ratio="'. $objTemplate->t4c_row_bg_parallax_speed . '"';
				
			break;
			
			case 'slideshow':
				$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/themes4contao/assets/js/vegas.js';
				$GLOBALS['TL_CSS'][] = 'system/modules/themes4contao/assets/css/vegas.css|static';
				$arrImages = \FilesModel::findMultipleByIds( deserialize($objTemplate->t4c_row_slideshow_images) );
				$images = '';
				foreach ($arrImages as $image){
					$images .= '{ src: "' . $image->path . '" },';
				}
				
				$slideshow_color = \themes4contao\themes4contao::compileColor( $objTemplate->t4c_row_slideshow_color );
				$objTemplate->class .= ' slideshow_' . $objTemplate->alias;
				$GLOBALS['TL_BODY'][] = '<script type="text/javascript">
					(function ($) {
						$(document).ready(function(){
							$(".slideshow_' . $objTemplate->alias . '").vegas({
								slides: [' . $images . '],
								preloadImage: ' . intval($objTemplate->t4c_row_slideshow_preload_images) . ',
								timer: ' . intval($objTemplate->t4c_row_slideshow_preload_timer) . ',
								delay: ' . $objTemplate->t4c_row_slideshow_preload_delay . ',
								cover: ' . intval($objTemplate->t4c_row_slideshow_cover) . ',
								color: "' .  $slideshow_color . '",
								align: "' . $objTemplate->t4c_row_slideshow_horizontal_align . '",
								valign: "' . $objTemplate->t4c_row_slideshow_vertical_align . '",
								transition: "' . $objTemplate->t4c_row_slideshow_transition . '",
								transitionDuration: ' . $objTemplate->t4c_row_slideshow_transition_duration . ',
								animation: "' . $objTemplate->t4c_row_slideshow_animation . '"
								});
						})
						
					})(jQuery)
					</script>';		
			break;
		}
	}
	
	public function generateOverlay($objTemplate){
		$overlay_style = '';
				($objTemplate->t4c_row_overlay_opacity) ? $overlay_style .= 'opacity:' . $objTemplate->t4c_row_overlay_opacity . ';' : '';
				if( $objTemplate->t4c_overlay_pattern ){
					$img = \FilesModel::findByPk($objTemplate->t4c_overlay_pattern);
					$overlay_style .= 'background-image: url(' . $img->path . '); background-repeat: repeat;';
				}	
				
				if( $objTemplate->t4c_row_overlay_type == 'color' ){
					($objTemplate->t4c_row_overlay_color) ? $overlay_style .= 'background-color:#' . $objTemplate->t4c_row_overlay_color . ';' : '';
				}

				if( $objTemplate->t4c_row_overlay_type == 'gradient' ){
					switch( $objTemplate->t4c_row_overlay_gradient_orientation ){
					
						case 'horizontal':
							if( $objTemplate->t4c_row_overlay_gradient_start != '' && $objTemplate->t4c_row_overlay_gradient_end != ''){
								
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' ' . $objTemplate->t4c_row_overlay_gradient_start . ';';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -moz-linear-gradient(left,  #' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%, #' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -webkit-gradient(linear, left top, right top, color-stop(0%,#' . $objTemplate->t4c_row_overlay_gradient_start . '), color-stop(100%,#' . $objTemplate->t4c_row_overlay_gradient_end . '));';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -webkit-linear-gradient(left, # ' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%,#' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -o-linear-gradient(left,  #' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%,#' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -ms-linear-gradient(left,  #' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%,#' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' linear-gradient(to right,  #' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%,#' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=\'#' . $objTemplate->t4c_row_overlay_gradient_start . '\', endColorstr=\'#' . $objTemplate->t4c_row_overlay_gradient_end . '\',GradientType=1 );';
							}
						break;
						
						case 'vertical':
							if( $objTemplate->t4c_row_overlay_gradient_start != '' && $objTemplate->t4c_row_overlay_gradient_end != ''){
								
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' ' . $objTemplate->t4c_row_overlay_gradient_start . ';';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -moz-linear-gradient(top,  #' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%,#' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -webkit-gradient(linear, left top, left bottom, color-stop(0%,#' . $objTemplate->t4c_row_overlay_gradient_start . '), color-stop(100%,' . $objTemplate->t4c_row_overlay_gradient_end . '));';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -webkit-linear-gradient(top,  #' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%,#' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -o-linear-gradient(top,  #' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%,#' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -ms-linear-gradient(top,  #' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%,#' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' linear-gradient(to bottomt,  #' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%,#' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=\'#' . $objTemplate->t4c_row_overlay_gradient_start . '\', endColorstr=\'#' . $objTemplate->t4c_row_overlay_gradient_end . '\',GradientType=0 );';
							}
						break;
						
						case 'left_top':
							if( $objTemplate->t4c_row_overlay_gradient_start != '' && $objTemplate->t4c_row_overlay_gradient_end != ''){
								
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' ' . $objTemplate->t4c_row_overlay_gradient_start . ';';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -moz-linear-gradient(-45deg,  #' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%,#' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -webkit-gradient(linear, left top, right bottom, color-stop(0%,#' . $objTemplate->t4c_row_overlay_gradient_start . '), color-stop(100%,' . $objTemplate->t4c_row_overlay_gradient_end . '));';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -webkit-linear-gradient(-45deg,  #' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%,#' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -o-linear-gradient(-45deg,  #' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%,#' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -ms-linear-gradient(-45deg,  #' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%,#' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' linear-gradient(135deg,  #' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%,#' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=\'#' . $objTemplate->t4c_row_overlay_gradient_start . '\', endColorstr=\'#' . $objTemplate->t4c_row_overlay_gradient_end . '\',GradientType=1 );';
							}
						break;
						
						case 'left_bottom':
							if( $objTemplate->t4c_row_overlay_gradient_start != '' && $objTemplate->t4c_row_overlay_gradient_end != ''){
								
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' ' . $objTemplate->t4c_row_overlay_gradient_start . ';';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -moz-linear-gradient(45deg,  #' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%,#' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -webkit-gradient(linear, left bottom, right top, color-stop(0%,#' . $objTemplate->t4c_row_overlay_gradient_start . '), color-stop(100%,' . $objTemplate->t4c_row_overlay_gradient_end . '));';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -webkit-linear-gradient(45deg, #' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%,#' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -o-linear-gradient(45deg, #' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%,#' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -ms-linear-gradient(45deg, #' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%,#' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' linear-gradient(45deg, #' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%,#' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=\'#' . $objTemplate->t4c_row_overlay_gradient_start . '\', endColorstr=\'#' . $objTemplate->t4c_row_overlay_gradient_end . '\',GradientType=1 );';
							}
						break;
						
						case 'radial':
							if( $objTemplate->t4c_row_overlay_gradient_start != '' && $objTemplate->t4c_row_overlay_gradient_end != ''){
								
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' ' . $objTemplate->t4c_row_overlay_gradient_start . ';';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -moz-radial-gradient(center, ellipse cover,  #' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%,#' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -webkit-gradient(radial, center center, 0px, center center, color-stop(0%,#' . $objTemplate->t4c_row_overlay_gradient_start . '), color-stop(100%,' . $objTemplate->t4c_row_overlay_gradient_end . '));';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -webkit-radial-gradient(center, ellipse cover,  #' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%,#' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -o-radial-gradient(center, ellipse cover,#' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%,#' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' -ms-radial-gradient(center, ellipse cover, #' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%,#' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'background: ' . (($objTemplate->t4c_overlay_pattern) ? ' url(' . $img->path . '), ' : '') . ' radial-gradient((ellipse at center, #' . $objTemplate->t4c_row_overlay_gradient_start . ' 0%,#' . $objTemplate->t4c_row_overlay_gradient_end . ' 100%);';
								 $overlay_style .= 'filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=\'#' . $objTemplate->t4c_row_overlay_gradient_start . '\', endColorstr=\'#' . $objTemplate->t4c_row_overlay_gradient_end . '\',GradientType=1 );';
							}
						break;
						
					}
					
				}
		
		return '<div class="t4c_mask_overlay" style="' . $overlay_style . '"></div>';
	}
	
	public function get_row_separator(array $options){
				
				$separator_content = '';	
				
				if($options['separator_height']){
					$separator_height = $options['separator_height'];
				} else {
					$separator_height = 100;
				}
				
				if( $options['add_separator_icon'] == '1'  && ( $options['separator_icon_image'] != '' || $options['separator_icon_font'] ) ){
					if( $options['separator_icon_type'] == "icon" ){ 
						$sep_icon_style  = 'style="';
						if ($options['separator_icon_color']) { $sep_icon_style .= 'color:' . $options['separator_icon_color'] . ';'; }
						if ($options['separator_icon_size']) { $sep_icon_style .= 'font-size:' . $options['separator_icon_size'] . 'px;'; }
						if ($options['separator_icon_size']) { $sep_icon_style .= 'width:' . ($options['separator_icon_size'] + 2*$options['separator_icon_padding']) . 'px;'; }
						if ($options['separator_icon_size']) { $sep_icon_style .= 'height:' . ($options['separator_icon_size'] + 2*$options['separator_icon_padding']) . 'px;'; }
						if ($options['separator_icon_size']) { $sep_icon_style .= 'line-height:' . ($options['separator_icon_size'] + 2*$options['separator_icon_padding'] - 2*$options['separator_icon_border_width']) . 'px;'; }
						if ($options['separator_icon_background_color']) { $sep_icon_style .= 'background:' . $options['separator_icon_background_color'] . ';'; }
						if ($options['separator_icon_border_width']) { $sep_icon_style .= 'border-width:' . $options['separator_icon_border_width'] . 'px;border-style:solid;'; }
						if ($options['separator_icon_border_width'] == 0) { $sep_icon_style .= 'border:none;'; }
						if ($options['separator_icon_border_color']) { $sep_icon_style .= 'border-color:' . $options['separator_icon_border_color'] . ';'; }

						if ($options['separator_icon_border_radius']['top'] || $options['separator_icon_border_radius']['right'] || $options['separator_icon_border_radius']['bottom'] || $options['separator_icon_border_radius']['left']){
							if ($options['separator_icon_border_radius']['unit'] == ''){
								$options['separator_icon_border_radius']['unit'] = 'px';
							}	
							$radius = intval($options['separator_icon_border_radius']['top']).$options['separator_icon_border_radius']['unit'].' '.intval($options['separator_icon_border_radius']['right']).$options['separator_icon_border_radius']['unit'].' '.intval($options['separator_icon_border_radius']['bottom']).$options['separator_icon_border_radius']['unit'].' '.intval($options['separator_icon_border_radius']['left']). $options['separator_icon_border_radius']['unit'];						
							$sep_icon_style .= '-webkit-border-radius: '.$radius.';-moz-border-radius: '.$radius.';border-radius: '.$radius.';';
						}
						
						$sep_icon_style .= 'text-align:center;';
						
						if ( $options['separator_icon_margin'] !='' ){
							if( $options['position'] == 'top' ){
								$sep_icon_style .= 'margin-top:' . $options['separator_icon_margin'] . 'px;';
							} else {
								$sep_icon_style .= 'margin-bottom:' . $options['separator_icon_margin'] . 'px;';
							}
						}
						$sep_icon_style .= '"';
						$icon_separator = '<div class="pro-icon-separator ' . $options['separator_icon_style'] . '" style="margin-left: -' . ($options['separator_icon_size'] + 2*$options['separator_icon_padding'])/2 . 'px;">';
						$icon_separator .= '<i class="'.$options['separator_icon_font'].'" ' . $sep_icon_style . '></i>';
					}
					else
					{
						$icon_separator  = '<div class="pro-icon-separator">';
						$img = \FilesModel::findByPk($options['icon_image']);
						$icon_separator .= '<img src="'.$img->path.'" />';						
					}
					$icon_separator .= '</div>';
				} else {
					$icon_separator = '';
				}
				
				if ( $options['position'] == 'bottom' ) {
				$icon_separator = str_replace('pro-icon-separator', 'pro-icon-separator pos-bottom', $icon_separator );
				}
				
				
				$separator_background_color = $options['separator_background_color'];
				
				
				switch ($options['separator_style']) {
					
    				case 'pro-style-smallTriangle':
						$separator_content = '
						<div class="t4c_row_separators pro-svg-triangle" style="height:' . $separator_height . 'px;">
							<svg version="1.1" fill="' . $separator_background_color . '" style="height:' . $separator_height . 'px;" width="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 142 71">
								<path d="M 71 -2 L 142 0 L 71 71 L 0 0 L 71 -2 Z" />
							</svg>
						</div>';
			        break;
					
					case 'pro-style-bigTriangle':
						$separator_content = '
						<div class="t4c_row_separators pro-svg-triangle" style="height:' . $separator_height . 'px;">
							<svg preserveAspectRatio="none" fill="' . $separator_background_color . '"  viewBox="0 0 800 50" style="height:' . $separator_height . 'px;" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" >
									<path d="M 800 50 L 399.9375 19 L 0 50 L 0 -54 L 800 -54 L 800 50 Z" />
							</svg>
						</div>';
			        break;
					
					
					case 'pro-style-bigTriangle-left':
						$separator_content = '
						<div class="t4c_row_separators pro-svg-triangle-left" style="height:' . $separator_height . 'px;">
							<svg preserveAspectRatio="none" fill="' . $separator_background_color . '"  viewBox="0 0 800 50" style="height:' . $separator_height . 'px;" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" >
									<path d="M 800 50 L 199.9375 19 L 0 50 L 0 -54 L 800 -54 L 800 50 Z" />
							</svg>
						</div>';
						
			        break;
					
					case 'pro-style-bigTriangle-right':
						$separator_content = '
						<div class="t4c_row_separators pro-svg-triangle-right" style="height:' . $separator_height . 'px;">
							<svg preserveAspectRatio="none" fill="' . $separator_background_color . '"  viewBox="0 0 800 50" style="height:' . $separator_height . 'px;" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" >
									<path d="M 800 50 L 599.9375 19 L 0 50 L 0 -54 L 800 -54 L 800 50 Z" />
							</svg>
						</div>';
			        break;
					
					case 'pro-style-tilt-left':
						$separator_content = '
						<div class="t4c_row_separators pro-svg-tilt-left" style="height:' . $separator_height . 'px;">
							<svg preserveAspectRatio="none" fill="' . $separator_background_color . '"  viewBox="0 0 800 50" style="height:' . $separator_height . 'px;" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" >
									<path d="M 0 -1 L 800 -3 L 800 1 L 0 49 L 0 -1 Z" />
							</svg>
						</div>';
			        break;
					
					case 'pro-style-tilt-right':
						$separator_content = '
						<div class="t4c_row_separators pro-svg-tilt-right" style="height:' . $separator_height . 'px;"> 
							<svg preserveAspectRatio="none" fill="' . $separator_background_color . '"  viewBox="0 0 800 50" style="height:' . $separator_height . 'px;" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" >
									<path d="M 800 -1 L 0 -3 L 0 1 L 800 49 L 800 -1 Z" />
							</svg>
						</div>';
			        break;
					
    				case 'pro-style-half-circle':
						$separator_content = '
						<div class="t4c_row_separators pro-style-half-circle"  style="height:' . $separator_height . 'px;">
							<svg version="1.1" fill="' . $separator_background_color . '"  style="height:' . $separator_height . 'px;" width="100%" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 200 100" >
								<path id="Ellipse" d="M 0 0 C 0 -55.2292 44.7708 -100 100 -100 C 155.2292 -100 200 -55.2292 200 0 C 200 55.2292 155.2292 100 100 100 C 44.7708 100 0 55.2292 0 0 Z" />
							</svg>
						</div>';
			        break;
					
					case 'pro-style-curve':
						$separator_content = '
						<div class="t4c_row_separators pro-style-curve"  style="height:' . $separator_height . 'px;">
							<svg preserveAspectRatio="none" fill="' . $separator_background_color . '"   viewBox="0 0 800 30" style="height:' . $separator_height . 'px;" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" >
									<path d="M 0 -1 L 0 21.56 C 111.2 10.6612 259.9998 4 423.5 4 C 564.9436 4 695.3856 8.9837 800 17.385 L 800 -1 L 0 -1 Z" />
							</svg>
						</div>';
			        break;
					
					
					case 'pro-style-curve-left':
						$separator_content = '
						<div class="t4c_row_separators pro-style-curve-left"  style="height:' . $separator_height . 'px;">
							<svg preserveAspectRatio="none" fill="' . $separator_background_color . '"    viewBox="0 0 800 50" style="height:' . $separator_height . 'px;" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" >
									<path d="M 0 -1 L 0 4 L 0.5 4 C 401.0057 4 733.7386 19.3721 800 39.59 L 800 -1 L 0 -1 Z" />
							</svg>
						</div>';
			        break;
					
					case 'pro-style-curve-right':
						$separator_content = '
						<div class="t4c_row_separators pro-style-curve-right"  style="height:' . $separator_height . 'px;">
							<svg preserveAspectRatio="none" fill="' . $separator_background_color . '"   viewBox="0 0 800 50" style="height:' . $separator_height . 'px;" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" >
									<path d="M 800 -1 L 800 4 L 799.5 4 C 398.9943 4 66.2614 19.3721 0 39.59 L 0 -1 L 800 -1 Z" />
							</svg>
						</div>';
			        break;
					
					case 'pro-style-rounded-in':
						$separator_content = '
						<div class="t4c_row_separators pro-style-rounded-in"  style="height:' . $separator_height . 'px;">
							<svg  fill="' . $separator_background_color . '"   viewBox="0 0 48 27" style="height:' . $separator_height . 'px;" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" >
									<path d="M 24.52 27 C 25.9485 13.9044 35.4171 3.2246 47.885 0 L 0.45 0 C 12.9178 3.2246 22.3864 13.9044 23.815 27 L 24.52 27 Z" />
							</svg>
						</div>';
			        break;
					
					case 'pro-style-arrow':
						$separator_content = '
						<div class="t4c_row_separators pro-style-arrow"  style="height:' . $separator_height . 'px;">
							<svg fill="' . $separator_background_color . '"   viewBox="0 0 263 139" style="height:' . $separator_height . 'px;" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" >
									<path d="M 197.25 -141 L 197.25 45.6667 L 263 45.6667 L 131.5 139 L 0 45.6667 L 65.75 45.6667 L 65.75 -9.716 L 65.75 -9.716 L 65.75 -9.716 L 65.75 -141 L 197.25 -141 L 197.25 -141 Z"  />

							</svg>
						</div>';
			        break;
					
					case 'pro-style-waves':
						$separator_content = '
						<div class="t4c_row_separators pro-style-waves"  style="height:' . $separator_height . 'px;">
							<svg fill="' . $separator_background_color . '" preserveAspectRatio="none"    viewBox="0 0 100 100" style="height:' . $separator_height . 'px;" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" >
									<path d="M0 0 Q 2.5 40 5 0  Q 7.5 40 10 0 Q 12.5 40 15 0 Q 17.5 40 20 0 Q 22.5 40 25 0 Q 27.5 40 30 0 Q 32.5 40 35 0 Q 37.5 40 40 0 Q 42.5 40 45 0 Q 47.5 40 50 0 Q 52.5 40 55 0 Q 57.5 40 60 0 Q 62.5 40 65 0 Q 67.5 40 70 0 Q 72.5 40 75 0 Q 77.5 40 80 0 Q 82.5 40 85 0 Q 87.5 40 90 0 Q 92.5 40 95 0 Q 97.5 40 100 0 Z" />
							</svg>
						</div>';
			        break;
					
					case 'pro-style-clouds':
						$separator_content = '
						<div class="t4c_row_separators pro-style-clouds"  style="height:' . $separator_height . 'px;">
							<svg fill="' . $separator_background_color . '" preserveAspectRatio="none"  viewBox="0 0 300 20"  style="height:' . $separator_height . 'px;" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" >
							<path d="M 0 -1 L 0 1.4796 C 1.5995 0.5232 3.4834 -0.0295 5.5 -0.0295 C 9.9265 -0.0295 13.7155 2.629 15.26 6.3902 C 17.038 4.8141 19.4021 3.8524 22 3.8524 C 25.5483 3.8524 28.665 5.6468 30.44 8.3506 C 31.6554 4.6181 35.252 1.9114 39.5 1.9114 C 44.1858 1.9114 48.081 5.2035 48.86 9.5346 C 50.5905 7.2648 53.3672 5.7934 56.5 5.7934 C 60.2646 5.7934 63.5175 7.9185 65.055 11 C 65.625 5.3532 70.5317 0.941 76.5 0.941 C 80.6571 0.941 84.2998 3.081 86.32 6.2883 C 88.4719 4.7565 91.1267 3.8524 94 3.8524 C 96.1643 3.8524 98.205 4.3662 100 5.2742 C 101.795 4.3662 103.8357 3.8524 106 3.8524 C 108.8733 3.8524 111.5281 4.7565 113.68 6.2883 C 115.7002 3.081 119.3429 0.941 123.5 0.941 C 129.4684 0.941 134.375 5.3532 134.945 11 C 136.4825 7.9185 139.7354 5.7934 143.5 5.7934 C 146.6328 5.7934 149.4095 7.2648 151.14 9.5346 C 151.9189 5.2035 155.8142 1.9114 160.5 1.9114 C 164.748 1.9114 168.3446 4.6181 169.56 8.3506 C 171.335 5.6468 174.4517 3.8524 178 3.8524 C 180.5979 3.8524 182.962 4.8141 184.74 6.3902 C 186.2845 2.629 190.0735 -0.0295 194.5 -0.0295 C 196.5166 -0.0295 198.4005 0.5232 200 1.4796 C 201.5995 0.5232 203.4834 -0.0295 205.5 -0.0295 C 209.9265 -0.0295 213.7155 2.629 215.26 6.3902 C 217.038 4.8141 219.4021 3.8524 222 3.8524 C 225.5483 3.8524 228.665 5.6468 230.44 8.3506 C 231.6554 4.6181 235.252 1.9114 239.5 1.9114 C 244.1858 1.9114 248.0811 5.2035 248.86 9.5346 C 250.5905 7.2648 253.3672 5.7934 256.5 5.7934 C 260.2646 5.7934 263.5175 7.9185 265.055 11 C 265.625 5.3532 270.5316 0.941 276.5 0.941 C 280.6571 0.941 284.2998 3.081 286.32 6.2883 C 288.4719 4.7565 291.1266 3.8524 294 3.8524 C 296.1643 3.8524 298.205 4.3662 300 5.2742 C 301.795 4.3662 303.8357 3.8524 306 3.8524 C 308.8734 3.8524 311.5281 4.7565 313.68 6.2883 C 315.7002 3.081 319.3429 0.941 323.5 0.941 C 329.4684 0.941 334.375 5.3532 334.945 11 C 336.4825 7.9185 339.7354 5.7934 343.5 5.7934 C 346.6328 5.7934 349.4095 7.2648 351.14 9.5346 C 351.9189 5.2035 355.8142 1.9114 360.5 1.9114 C 364.748 1.9114 368.3445 4.6181 369.56 8.3506 C 371.335 5.6468 374.4517 3.8524 378 3.8524 C 380.5978 3.8524 382.962 4.8141 384.74 6.3902 C 386.2845 2.629 390.0735 -0.0295 394.5 -0.0295 C 396.5166 -0.0295 398.4005 0.5232 400 1.4796 L 400 -1 L 300 -1 L 200 -1 L 100 -1 L 0 -1 Z" />			
								</svg>
						</div>';
			        break;
					
					case 'pro-style-triangles':
						$separator_content = '
						<div class="t4c_row_separators pro-style-triangles"  style="height:' . $separator_height . 'px;">
							<svg fill="' . $separator_background_color . '" preserveAspectRatio="none"   viewBox="0 0 349 43" style="height:' . $separator_height . 'px;" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" >
							<path d="M 44 -46 L -1 -2 L 44 43 L 87.5 -0.5 L 131 43 L 174.5 -0.5 L 218 43 L 261.5 -0.5 L 305 43 L 350 -2 L 305 -46 L 261.5 -3.465 L 218 -46 L 174.5 -3.465 L 131 -46 L 87.5 -3.465 L 44 -46 Z" />			
								</svg>
						</div>';
			        break;
				
					case 'pro-style-puzzle':
						$separator_content = '
						<div class="t4c_row_separators pro-style-triangles"  style="height:' . $separator_height . 'px;">
							<svg fill="' . $separator_background_color . '"  viewBox="0 0 68 66" style="height:' . $separator_height . 'px;" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" >
							<path d="M -60.8195 -189.0243 L -60.8195 -0.1354 L -13.5972 -0.1354 L 2.2361 -0.1354 C 8.5339 -0.1354 17.9305 9.4002 17.9305 15.6979 C 17.9305 18.849 5.3871 25.0946 2.2361 31.3924 C -0.9149 37.6945 -0.9149 40.9279 2.2361 47.2257 C 5.3871 53.5278 11.6328 59.7734 17.9305 62.9201 C 24.2283 66.0712 43.1606 66.0712 49.4583 62.9201 C 55.7561 59.7734 62.0017 53.5278 65.1528 47.2257 C 68.3038 40.9279 68.3038 37.6945 65.1528 31.3924 C 62.0017 25.0946 49.4583 18.849 49.4583 15.6979 C 49.4583 9.4002 58.855 -0.1354 65.1528 -0.1354 L 128.2083 -0.1354 L 128.2083 -47.3576 L 128.2083 -63.0521 C 128.2083 -69.3498 118.8116 -78.7465 112.5139 -78.7465 C 109.3629 -78.7465 102.9783 -66.1988 96.6805 -63.0521 C 90.3828 -59.901 87.2839 -59.901 80.9861 -63.0521 C 74.6884 -66.1988 68.3038 -72.4445 65.1528 -78.7465 C 62.0017 -85.0443 62.0017 -103.9722 65.1528 -110.2743 C 68.3038 -116.5721 74.6884 -122.9566 80.9861 -126.1076 C 87.2839 -129.2543 90.3828 -129.2543 96.6805 -126.1076 C 102.9783 -122.9566 109.3629 -110.2743 112.5139 -110.2743 C 118.8116 -110.2743 128.2083 -119.8055 128.2083 -126.1076 L 128.2083 -141.8021 L 128.2083 -189.0243 L -60.8195 -189.0243 Z" />			
								</svg>
						</div>';
			        break;
				}
			
			
			if ( $options['position'] == 'bottom' ) {
				$separator_content = str_replace('t4c_row_separators', 't4c_row_separators pos-bottom', $separator_content );
			}
			return $icon_separator.$separator_content;
		}
}

?>