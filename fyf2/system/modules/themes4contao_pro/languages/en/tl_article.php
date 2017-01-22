<?php


// Rows settings
$GLOBALS['TL_LANG']['tl_article']['row_legend']     							= 'Row settings';
$GLOBALS['TL_LANG']['tl_article']['top_row_legend']    							= 'Top row separator';
$GLOBALS['TL_LANG']['tl_article']['bottom_row_legend'] 							= 'Bottom row separator';
$GLOBALS['TL_LANG']['tl_article']['t4c_row_height']								= array('Minimum height of a row(px)','');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_full_height'] 						= array('Full height', 'Using this option you can make this page section\'s height to cover the whole visible screen height. Not document height. Please note that if the inner content is larger than the window height, this feature will be disabled. Full height is browser resize sensitive and completely responsive.');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_layout'] 							= array('Row Layout','');
$GLOBALS['TL_LANG']['tl_article']['ref_row_layout'] 							= array('boxed' => 'Boxed','full_background' => 'Full background','full_content' => 'Full content','full_content_no_paddings' => 'Full content (no paddings)');
$GLOBALS['TL_LANG']['tl_article']['ref_t4c_row_bg_type'] 						= array('no_background' => 'No background','color' => 'Color','image' => 'Image','parallax' => 'Parallax','slideshow' => 'Slideshow','video' => 'Video');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_bg_image_position'] 					= array('Background image position', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_bg_parallax_speed'] 					= array('Parallax speed', 'A value from 0 to 1. Eg. 0.5');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_slideshow_preload_delay'] 			= array('Delay','Delay beetween slides in milliseconds..');
$GLOBALS['TL_LANG']['tl_article']['ref_t4c_row_bg_image_settings'] 				= array(''	=> 'Theme default', 'cover' => 'Cover',	'contain' => 'Contain','repeat' => 'Repeat','repeat-x' => 'Repeat-x','repeat-y' => 'Repeat-y','no-repeat' => 'No-repeat');
$GLOBALS['TL_LANG']['tl_article']['ref_t4c_row_bg_image_attachment'] 			= array('' 	=> 'Theme default', 'fixed' => 'Fixed',	'scroll' => 'Scroll');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_bg_type'] 							= array('Background type', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_bgcolor'] 							= array('Background color', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_bg_image_attachment'] 				= array('Background attachment', 'This option sets whether the background image is fixed or scrolls with the rest of the page. <a href="http://www.w3schools.com/CSSref/pr_background-attachment.asp" target="_blank">Read More.</a>');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_bg_image_settings'] 					= array('Background image settings', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_image'] 								= array('Background image', '');
$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_bg_image_position'] 		= array('Background image postion','');
$GLOBALS['TL_LANG']['tl_article']['ref_t4c_row_bg_image_position'][''] 			= 'Theme default';
$GLOBALS['TL_LANG']['tl_article']['t4c_row_fontcolor'] 							= array('Font color','');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_padding'] 							= array('Row padding','');
// Background slideshow
$GLOBALS['TL_LANG']['tl_article']['t4c_row_slideshow_preload_images'] 			= array('Preload image', 'Preload images at start. preload must be false.');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_slideshow_preload_timer'] 			= array('Timer', 'Display/hide timer bar. The timer class is .vegas-timer-progress.');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_bg_parallax_delay'] 					= array('Delay', 'Delay beetween slides in milliseconds.');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_slideshow_cover'] 					= array('Cover', 'True the background image is scaled to fit the container. False the background image is displayed entirely.');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_slideshow_color'] 					= array('Background color:', 'Slide background color.');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_slideshow_horizontal_align'] 		= array('Horizontal alignment', 'Horizontal alignment of the image in the slide. Could be center top right bottom left or a percentage.');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_slideshow_vertical_align'] 			= array('Vertical alignment', 'Vertical alignment of the image in the slide. Could be center top right bottom left or a percentage.');
$GLOBALS['TL_LANG']['tl_article']['ref_t4c_align'] 								= array('center' => 'Center', 'top' => 'Top', 'right' => 'Right', 'bottom'	=> 'Bottom', 'left'	=> 'Left');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_slideshow_transition'] 				= array('Slideshow transition:', 'Set the transition between slides.');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_slideshow_transition_duration'] 		= array('Transition duration', 'Set the transition duration in milliseconds. Could be auto so the transition duration will be equal to the slide delay.');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_slideshow_animation'] 				= array('Slideshow animation', 'Set the transition between slides.');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_slideshow_images']					= array('Images', '');
/* Overlay Mask  */
$GLOBALS['TL_LANG']['tl_article']['t4c_add_row_overlay'] 						= array('Overlay mask pattern?', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_overlay_type'] 						= array('Background overlay type');
$GLOBALS['TL_LANG']['tl_article']['ref_t4c_overlay'] 							= array('color' => 'Color', 'gradient' => 'Gradient');
$GLOBALS['TL_LANG']['tl_article']['t4c_overlay_pattern'] 						= array('Overlay pattern', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_overlay_opacity'] 					= array('Overlay color mask opacity', 'Set the value from 1 to 0. Eg. 0.5');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_overlay_color'] 						= array('Color', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_overlay_gradient_start'] 			= array('Gradient color (start)', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_overlay_gradient_end'] 				= array('Gradient color (end)', '');
$GLOBALS['TL_LANG']['tl_article']['ref_t4c_overlay_gradient_orientation'] 		= array('vertical' => 'Vertical ↓',	'horizontal' => 'Horizontal →',	'left_top' => 'Diagonal ↘',	'left_bottom' => 'Diagonal ↗',	'radial' => 'Radial ○');

/* Row Separator */
$GLOBALS['TL_LANG']['tl_article']['t4c_row_add_top_separator'] 					= array('Add top row separator', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_serparator_style'] 				= array('Separator Style', '');
$GLOBALS['TL_LANG']['tl_article']['ref_t4c_separator_style'] 					= array(
																					'pro-style-arrow' => 'Arrow',
																					'pro-style-bigTriangle' => 'Big Triangle',
																					'pro-style-bigTriangle-left' => 'Big Triangle Left',
																					'pro-style-bigTriangle-right' => 'Big Triangle Right',
																					'pro-style-clouds' => 'Clouds',
																					'pro-style-curve' => 'Curve Center',
																					'pro-style-curve-left' => 'Curve Left',
																					'pro-style-curve-right' => 'Curve Right',
																					'pro-style-half-circle' => 'Half Circle',
																					'pro-style-puzzle' => 'Puzzle',
																					'pro-style-rounded-in' => 'Rounded',
																					'pro-style-tilt-left' => 'Tilt Left',
																					'pro-style-tilt-right' => 'Tilt Right',
																					'pro-style-smallTriangle' => 'Triangle',
																					'pro-style-triangles' => 'Triangles',
																					'pro-style-waves' => 'Waves');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_separator_height'] 				= array('Top separator height', 'px');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_separator_bgcolor'] 				= array('Top separator background color', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_add_top_icon'] 						= array('Add Icon','');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_icon_type'] 						= array('Icon type', '');
$GLOBALS['TL_LANG']['tl_article']['ref_t4c_separator_icon_type'] 				= array('icon' => 'Icon', 'image' => 'Image');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_icon'] 							= array('Select icon','');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_icon_size'] 						= array('Icon size (px)','');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_icon_margin'] 					= array('Icon top margin (px)', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_icon_color'] 					= array('Icon color', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_icon_padding'] 					= array('Icon padding (px)', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_icon_bgcolor'] 					= array('Icon background color', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_icon_border_color'] 				= array('Icon border color', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_icon_border_width'] 				= array('Icon border size (px)', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_icon_border_radius'] 			= array('Icon border radius', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_icon_image_file'] 				= array('Icon image', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_add_bottom_separator'] 				= array('Add bottom row separator', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_serparator_style'] 			= array('Separator style', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_separator_height'] 			= array('Top separator height', 'px');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_separator_bgcolor'] 			= array('Top separator background color', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_add_bottom_icon'] 					= array('Add Icon','');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_icon_type'] 					= array('Icon type', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_icon'] 						= array('Select icon','');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_icon_size'] 					= array('Icon size (px)','');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_icon_margin'] 				= array('Icon top margin (px)', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_icon_color'] 					= array('Icon color', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_icon_padding'] 				= array('Icon padding (px)', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_icon_bgcolor'] 				= array('Icon background color', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_icon_border_color'] 			= array('Icon border color', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_icon_border_width'] 			= array('Icon border size (px)', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_icon_border_radius'] 			= array('Icon border radius', '');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_icon_image_file'] 			= array('Icon image', '');

/* Background Video */
$GLOBALS['TL_LANG']['tl_article']['t4c_row_video_youtube'] 						= array('Youtube Video ID', 'https://www.youtube.com/watch?v=<strong>HzGHgQBPyV0</strong>');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_video_poster'] 						= array('Video preview image', 'This Image will be showed up until video is loaded. If video is not supported or could not load on user\'s machine, the image will stay in background.');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_video_mp4'] 							= array('Background video (.MP4)', 'Upload your video with .MP4 extension. (Compatibility for:Chrome, FireFox, Opera, Safari and IE9).');
$GLOBALS['TL_LANG']['tl_article']['t4c_row_video_webm'] 						= array('Background video (.WebM)', 'Upload your video with .WebM extension. (Compatibility for:Chrome, FireFox, Opera).');

?>