<?php
/**
 * t4c_elements extension for Contao Open Source CMS
 *
 * Copyright (C) 2015 themes4contao
 *
 * @package t4c_elements
 * @author  Lukas Manka <support@themes4contao.com>
 * @license Commercial
 */

/*
 * Adipoli Image
 */
$GLOBALS['TL_LANG']['CTE']['t4c_adipoli_image']  								= array('Adipoli Image','');
$GLOBALS['TL_LANG']['tl_content']['t4c_adipoli_start'] 							= array('Start effect', 'Default style of image.');
$GLOBALS['TL_LANG']['tl_content']['ref_t4c_adipoli_start']						= array('transparent' => 'Transparent','normal' => 'Normal','overlay' => 'Overlay','grayscale' => 'Grayscale');
$GLOBALS['TL_LANG']['tl_content']['t4c_adipoli_hover'] 							= array('Hover effect', 'Image style on mouse over.');
$GLOBALS['TL_LANG']['tl_content']['ref_t4c_adipoli_hover'] 						= array(
																					'normal' => 'Normal',
																					'popout' => 'Popout',
																					'sliceDown' => 'Slice down',
																					'sliceDownLeft' => 'Slice down left',
																					'sliceUp' => 'Slice up',
																					'sliceUpLeft' => 'Slice up left',
																					'sliceUpRandom' => 'Slice up random',
																					'sliceUpDown' => 'Slice up down',
																					'sliceUpDownLeft' => 'Slice up down left',
																					'fold' => 'Fold',
																					'foldLeft' => 'Fold left',
																					'boxRandom' => 'Box random',
																					'boxRain' => 'Box rain',
																					'boxRainReverse' => 'Box rain reverse',
																					'boxRainGrow' => 'Box rain grow',
																					'boxRainGrowReverse' => 'Box rain grow reverse');
$GLOBALS['TL_LANG']['tl_content']['t4c_adipoli_opacity'] 						= array('Image opacity','Opacity of image considered when start effect is transparent or overlay.');
$GLOBALS['TL_LANG']['tl_content']['t4c_adipoli_anim_speed'] 					= array('Animation speed', 'Animation speed in milliseconds (1000ms = 1s).');
$GLOBALS['TL_LANG']['tl_content']['t4c_adipoli_fill_color'] 					= array('Fill color','');
$GLOBALS['TL_LANG']['tl_content']['t4c_adipoli_overlay_text'] 					= array('Overlay text','Default HTML to be displayed on overlay.');
$GLOBALS['TL_LANG']['tl_content']['t4c_adipoli_slices']							= array('Slices', 'Number of slices for slice animations.');
$GLOBALS['TL_LANG']['tl_content']['t4c_adipoli_box_cols']						= array('Box cols','Number of boxes in a row for box animations.');
$GLOBALS['TL_LANG']['tl_content']['t4c_adipoli_box_rows']						= array('Box rows','Number of rows in a row for box animations.');
$GLOBALS['TL_LANG']['tl_content']['t4c_adipoli_margin']							= array('Pop out margin', 'Margin of Image popout.');
$GLOBALS['TL_LANG']['tl_content']['t4c_adipoli_shadow'] 						= array('Pop out shadow','Shadow length of popout image. Shadow works for those browsers which support text-shadow css.');

/*
 * Adipoli Gallery
 */
$GLOBALS['TL_LANG']['CTE']['t4c_adipoli_gallery']  								= array('Adipoli Gallery','');

/*
 * Advanced Banner
 */

$GLOBALS['TL_LANG']['CTE']['t4c_advanced_banner']  								= array('Advanced Banner','');
$GLOBALS['TL_LANG']['tl_content']['t4c_adv_effects']							= array('Effect','');
$GLOBALS['TL_LANG']['tl_content']['ref_t4c_adv_effects']						= array(
																					'effect-lily' => 'Effect: Lily',
																					'effect-sadie' => 'Effect: Sadie',
																					'effect-roxy' => 'Effect: Roxy',
																					'effect-bubba' => 'Effect: Bubba',
																					'effect-romeo' => 'Effect: Romeo',
																					'effect-layla' => 'Effect: Layla',
																					'effect-honey' => 'Effect: Honey',
																					'effect-oscar' => 'Effect: Oscar',
																					'effect-marley' => 'Effect: Marley',
																					'effect-ruby' => 'Effect: Ruby',
																					'effect-milo' => 'Effect: Milo',
																					'effect-dexter' => 'Effect: Dexter',
																					'effect-zoe' => 'Effect: Zoe',
																					'effect-chico' => 'Effect: Chico');

/*
 * Alert Box
 */
$GLOBALS['TL_LANG']['CTE']['t4c_alert_box']  									= array('Alert Box','');
$GLOBALS['TL_LANG']['tl_content']['t4c_ab_type']								= array('Type of alert box','');
$GLOBALS['TL_LANG']['tl_content']['ref_t4c_ab_type']							= array('info' => 'Info', 'warning' => 'Warning', 'error' => 'Error', 'success' => 'Success', 'custom' => 'Custom');
$GLOBALS['TL_LANG']['tl_content']['t4c_ab_close_icon']							= array('Show close icon','');
$GLOBALS['TL_LANG']['tl_content']['t4c_ab_icon_position'] 						= array('Icon position', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_box_ab_settings_legend']     			= 'Box settings';

/*
 * Blockquote
 */
$GLOBALS['TL_LANG']['tl_content']['t4c_author'] 								= array('Author','');
$GLOBALS['TL_LANG']['tl_content']['t4c_text_align']								= array('Text alignment','');
$GLOBALS['TL_LANG']['tl_content']['ref_t4c_text_align'] 						= array('left' => 'Left', 'center' => 'Center', 'right' => 'Right');
$GLOBALS['TL_LANG']['tl_content']['t4c_bgcolor']								= array ('Background color', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_textcolor']								= array ('Text color', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_b_quotation_marks']						= array('Quotation Marks', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_border_radius']						= array('Border radius', '');
$GLOBALS['TL_LANG']['CTE']['t4c_blockquote']  									= array('Blockquote','');

/*
 * Button
 */
$GLOBALS['TL_LANG']['CTE']['t4c_button']  									= array('Button','');
//$GLOBALS['TL_LANG']['tl_content']['t4c_button_icon_position']				= array('Icon position','');
$GLOBALS['TL_LANG']['tl_content']['t4c_button_size']						= array('Button size','');
$GLOBALS['TL_LANG']['tl_content']['t4c_button_style']						= array('Button style','');
$GLOBALS['TL_LANG']['tl_content']['t4c_button_hover']						= array('Hover effect','');
$GLOBALS['TL_LANG']['tl_content']['t4c_borderColor']						= array('Border color','');
$GLOBALS['TL_LANG']['tl_content']['t4c_border_width']						= array('Border width (px)','');
$GLOBALS['TL_LANG']['tl_content']['t4c_button_border_radius']				= array('Border radius (px)','');
$GLOBALS['TL_LANG']['tl_content']['t4c_iconBgColor']						= array('Icon background color','');

/*
 * Circle Progress
 */
$GLOBALS['TL_LANG']['tl_content']['t4c_title'] 									= array('Title','');
$GLOBALS['TL_LANG']['tl_content']['t4c_cp_value'] 								= array('Value','This is the only required option. It should be from 0.0 to 1.0. Default: 0');
$GLOBALS['TL_LANG']['tl_content']['t4c_cp_size'] 								= array('Size','Size of the circle / canvas in pixels. Default: 100');
$GLOBALS['TL_LANG']['tl_content']['t4c_cp_reverse'] 							= array('Reverse','Reverse animation and arc draw. Default: false.');
$GLOBALS['TL_LANG']['tl_content']['t4c_cp_thickness'] 							= array('Thickness','Width of the arc. By default it\'s automatically calculated as 1/14 of size but you may set your own number. Default: "auto"');
$GLOBALS['TL_LANG']['tl_content']['t4c_cp_line_cap'] 							= array('Line Cap','Arc line cap: "butt", "round" or "square". Default: "butt"');
$GLOBALS['TL_LANG']['tl_content']['t4c_cp_empty_fill'] 							= array('Empty fill', 'Color of the "empty" arc. Only a color fill supported by now.');
$GLOBALS['TL_LANG']['tl_content']['t4c_cp_duration'] 							= array('Duration','Animation duration.');
$GLOBALS['TL_LANG']['tl_content']['t4c_cp_animation_start_value'] 				= array('Animation Start Value', 'Default animation starts at 0.0 and ends at specified value. Let\'s call this direct animation. If you want to make reversed animation then you should set animationStartValue to 1.0. Also you may specify any other value from 0.0 to 1.0. Default: 0.0');
$GLOBALS['TL_LANG']['tl_content']['t4c_cp_color'] 								= array('Fill color','');
$GLOBALS['TL_LANG']['tl_content']['t4c_cp_gradient_1'] 							= array('Fill gradient color 1','');
$GLOBALS['TL_LANG']['tl_content']['t4c_cp_gradient_2'] 							= array('Fill gradient color 2','');
$GLOBALS['TL_LANG']['tl_content']['t4c_cp_gradient_3'] 							= array('Fill gradient color 3','');
$GLOBALS['TL_LANG']['tl_content']['t4c_cp_fill'] 								= array('Fill','The arc fill config.');
$GLOBALS['TL_LANG']['tl_content']['t4c_cp_image']								= array('Fill image', '');
$GLOBALS['TL_LANG']['CTE']['t4c_elements']              						= 'T4C - Elements';
$GLOBALS['TL_LANG']['CTE']['t4c_circle_progress']  								= array('Circle Progress','');

/*
 * Circular Countdowns
 */
$GLOBALS['TL_LANG']['CTE']['t4c_circular_countdowns']  							= array('Circular Countdowns','');
$GLOBALS['TL_LANG']['tl_content']['t4c_cc_anim_type'] 							= array('Animation type','');
$GLOBALS['TL_LANG']['tl_content']['ref_t4c_cc_anim_type']						= array('smooth' => 'Smooth','ticks' => 'Ticks');
$GLOBALS['TL_LANG']['tl_content']['t4c_cc_direction']							= array('Direction','This option can be set to change the direction in which the circles fill up.');
$GLOBALS['TL_LANG']['tl_content']['ref_t4c_cc_direction']						= array('Clockwise' => 'Clockwise','Counter-clockwise' => 'Counter-clockwise');
$GLOBALS['TL_LANG']['tl_content']['t4c_cc_circle_width'] 						= array('Circle width', 'From 0.003 to 0.13');
$GLOBALS['TL_LANG']['tl_content']['t4c_cc_background_width']					= array('Background width','From 0.1 to 2.9');
$GLOBALS['TL_LANG']['tl_content']['t4c_cc_days']								= array('Show days','');
$GLOBALS['TL_LANG']['tl_content']['t4c_cc_label']								= array('Label','');
$GLOBALS['TL_LANG']['tl_content']['t4c_cc_color']								= array('Circle color', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_cc_hours']								= array('Hours', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_cc_minutes']								= array('Minutes', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_cc_seconds'] 							= array('Seconds', '');

/*
 * Contact Info
 */
$GLOBALS['TL_LANG']['CTE']['t4c_contactinfo']  									= array('Contact info','');
$GLOBALS['TL_LANG']['tl_content']['t4c_contact_info']							= array('Contact details','');
$GLOBALS['TL_LANG']['tl_content']['t4c_contact_info_icon']						= array('Icon', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_contact_info_value']						= array('Text','');

/*
 * Custom List
 */
$GLOBALS['TL_LANG']['CTE']['t4c_custom_list']  									= array('Custom List','');

/*
 * Dividers
 */

$GLOBALS['TL_LANG']['tl_content']['t4c_divider_type']							= array('Type', '');
$GLOBALS['TL_LANG']['tl_content']['ref_t4c_divider_type']						= array('line' => 'Line', 'title_text' => 'Text', 'icon' => 'Icon');

/*
 * Filp Box
 */
$GLOBALS['TL_LANG']['CTE']['t4c_flip_box']										= array('Filp Box','');
$GLOBALS['TL_LANG']['tl_content']['t4c_fb_effect']								= array('Effect', ''); 
$GLOBALS['TL_LANG']['tl_content']['ref_t4c_fb_effect'] 							= array('horizontal' => 'Horizontal','vertical' => 'Vertical');
$GLOBALS['TL_LANG']['tl_content']['t4c_fb_height']								= array('Box height (px)', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_fb_radius']								= array('Box radius (px)','');
$GLOBALS['TL_LANG']['tl_content']['t4c_fb_front_title']							= array('Front title', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_fb_front_text']							= array('Front text','');
$GLOBALS['TL_LANG']['tl_content']['t4c_fb_front_textcolor'] 					= array('Front text color','');
$GLOBALS['TL_LANG']['tl_content']['t4c_fb_front_bgcolor'] 						= array('Front background color', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_fb_front_bgcolor_border_style'] 			= array('Front border style','');
$GLOBALS['TL_LANG']['tl_content']['t4c_fb_front_bordercolor'] 					= array('Front border color','');
$GLOBALS['TL_LANG']['tl_content']['t4c_fb_front_border_width']					= array('Front border width (px)','');
$GLOBALS['TL_LANG']['tl_content']['t4c_front_legend'] 							= 'Front';
$GLOBALS['TL_LANG']['tl_content']['t4c_fb_back_title']							= array('Back title', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_fb_back_text']							= array('Back text','');
$GLOBALS['TL_LANG']['tl_content']['t4c_fb_back_textcolor'] 						= array('Back text color','');
$GLOBALS['TL_LANG']['tl_content']['t4c_fb_back_bgcolor'] 						= array('Back background color', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_fb_back_bgcolor_border_style'] 			= array('Back border style','');
$GLOBALS['TL_LANG']['tl_content']['t4c_fb_back_bordercolor'] 					= array('Back border color','');
$GLOBALS['TL_LANG']['tl_content']['t4c_fb_back_border_width']					= array('Back border width (px)','');
$GLOBALS['TL_LANG']['tl_content']['t4c_back_legend'] 							= 'Back';

/*
 * Filp Clock
 */
$GLOBALS['TL_LANG']['CTE']['t4c_flip_clock']  									= array('Filp clock','');
$GLOBALS['TL_LANG']['tl_content']['t4c_fc_minutes'] 							= array('Minutes', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_fc_end_date'] 							= array('End date','');
$GLOBALS['TL_LANG']['tl_content']['t4c_fc_type'] 								= array('Clock type',''); 
$GLOBALS['TL_LANG']['tl_content']['ref_t4c_fc_type'] 							= array(
																					'HourlyCounter' => 'Hourly Counter',
																					'MinuteCounter' => 'Minute Counter',
																					'DailyCounter' => 'Daily Counter',
																					'TwelveHourClock' => 'Twelve Hour Clock',
																					'TwentyFourHourClock' => 'Twenty Four Hour Clock',
																					'Counter' => 'Counter'); 
$GLOBALS['TL_LANG']['tl_content']['t4c_fc_start'] 								= array('Start','');
$GLOBALS['TL_LANG']['tl_content']['t4c_fc_minutes'] 							= array('Minutes', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_fc_timeout'] 							= array('Timeout');

/*
 * Google Trends
 */
$GLOBALS['TL_LANG']['CTE']['t4c_google_trends']  								= array('Google trends','');
$GLOBALS['TL_LANG']['tl_content']['t4c_googletr_terms'] 						= array('Comparison terms','Enter maximum 5 terms separated by comma.');
$GLOBALS['TL_LANG']['tl_content']['t4c_googletr_loaction']						= array('Location', '');
$GLOBALS['TL_LANG']['tl_content']['ref_t4c_googletr_loaction']					= array(
																					'' => 'Worldwide',
																					'SA' => 'Saudi Arabia',
																					'AR' => 'Argentina',
																					'AU' => 'Australia',
																					'AT' => 'Austria',
																					'BD' => 'Bangladesh',
																					'BE' => 'Belgium',
																					'BR' => 'Brazil',
																					'BG' => 'Bulgaria',
																					'CA' => 'Canada',
																					'CL' => 'Chile',
																					'CN' => 'China',
																					'CO' => 'Colombia',
																					'CR' => 'Costa Rica',
																					'HR' => 'Croatia',
																					'CZ' => 'Czech Republic',
																					'DK' => 'Denmark',
																					'DO' => 'Dominican Republic',
																					'EC' => 'Ecuador',
																					'EG' => 'Egypt',
																					'SV' => 'El Salvador',
																					'EE' => 'Estonia',
																					'FI' => 'Finland',
																					'FR' => 'France',
																					'DE' => 'Germany',
																					'GH' => 'Ghana',
																					'GT' => 'Guatemala',
																					'HN' => 'Honduras',
																					'HK' => 'Hong Kong',
																					'HU' => 'Hungary',
																					'IN' => 'India',
																					'ID' => 'Indonesia',
																					'IE' => 'Ireland',
																					'IL' => 'Israel',
																					'IT' => 'Italy',
																					'JP' => 'Japan',
																					'KE' => 'Kenya',
																					'LV' => 'Latvia',
																					'LT' => 'Lithuania',
																					'MY' => 'Malaysia',
																					'MX' => 'Mexico',
																					'NL' => 'Netherlands',
																					'NZ' => 'New Zealand',
																					'NG' => 'Nigeria',
																					'NO' => 'Norway',
																					'PK' => 'Pakistan',
																					'PA' => 'Panama',
																					'PE' => 'Peru',
																					'PH' => 'Philippines',
																					'PL' => 'Poland',
																					'PT' => 'Portugal',
																					'PR' => 'Puerto Rico',
																					'RO' => 'Romania',
																					'RU' => 'Russia',
																					'SN' => 'Senegal',
																					'RS' => 'Serbia',
																					'SG' => 'Singapore',
																					'SK' => 'Slovakia',
																					'SI' => 'Slovenia',
																					'ZA' => 'South Africa',
																					'KR' => 'South Korea',
																					'ES' => 'Spain',
																					'SE' => 'Sweden',
																					'CH' => 'Switzerland',
																					'TW' => 'Taiwan',
																					'TH' => 'Thailand',
																					'TR' => 'Turkey',
																					'UG' => 'Uganda',
																					'UA' => 'Ukraine',
																					'AE' => 'United Arab Emirates',
																					'GB' => 'United Kingdom',
																					'US' => 'United States',
																					'UY' => 'Uruguay',
																					'VE' => 'Venezuela',
																					'VN' => 'Vietnam');
$GLOBALS['TL_LANG']['tl_content']['ref_t4c_googletr_graph']						= array(
																					'TIMESERIES_GRAPH_0' => 'Interest over time',
																					'TIMESERIES_GRAPH_AVERAGES_CHART' => 'Interest over time with average',
																					'GEO_MAP_0_0' => 'Regional interest in map',
																					'GEO_TABLE_0_0' => 'Regional interest in table',
																					'TOP_ENTITIES_0_0' => 'Related searches (Topics)',
																					'TOP_QUERIES_0_0' => 'Related searches (Queries)');
$GLOBALS['TL_LANG']['tl_content']['t4c_googletr_graph'] 						= array('Graph type','');
$GLOBALS['TL_LANG']['tl_content']['t4c_googletr_width'] 						= array('Frame width(optional):','');
$GLOBALS['TL_LANG']['tl_content']['t4c_google_height'] 							= array('Frame height(optional):','');

/*
 * Counters
 */
$GLOBALS['TL_LANG']['CTE']['t4c_counters']  									= array('Counters','');
$GLOBALS['TL_LANG']['tl_content']['t4c_title'] 									= array('Title','');
$GLOBALS['TL_LANG']['tl_content']['t4c_c_value']								= array('Counter value', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_icon_position']							= array('Icon position','');
$GLOBALS['TL_LANG']['tl_content']['ref_t4c_postion']							= array('top' => 'Top', 'left' => 'Left', 'bottom' => 'Bottom', 'right' => 'Right');
$GLOBALS['TL_LANG']['tl_content']['t4c_c_rolling_time']							= array('Rolling time(ms)', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_thousands_separator']					= array('Thousands separator', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_decimal_point']							= array('Replace decimal point','');
$GLOBALS['TL_LANG']['tl_content']['t4c_surffix']								= array('Suffix','Enter suffix for counter value.');
$GLOBALS['TL_LANG']['tl_content']['t4c_prefix']									= array('Prefix','Enter prefix for counter value.');

/*
 * Divider
 */
$GLOBALS['TL_LANG']['CTE']['t4c_dividers']  									= array('Dividers','');
$GLOBALS['TL_LANG']['tl_content']['t4c_divider_type'] 							= array('Type','');
$GLOBALS['TL_LANG']['tl_content']['t4c_divider_width'] 							= array('Width','');
$GLOBALS['TL_LANG']['tl_content']['ref_t4c_divider_type']						= array('line' => 'Line', 'text_text' => 'Text', 'icon' => 'Icon');
$GLOBALS['TL_LANG']['tl_content']['ref_t4c_divider_line'] 						= array(
																					'solid' => 'Solid',
																					'dotted' => 'Dotted',
																					'dashed' => 'Dashed',
																					'double_solid' => 'Double solid',
																					'double_dotted' => 'Double dotted',
																					'double_dashed' => 'Double dashed');
$GLOBALS['TL_LANG']['tl_content']['t4c_divider_line'] 							= array('Line style','');
$GLOBALS['TL_LANG']['tl_content']['t4c_divider_line_color']						= array('Line color', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_bottom_padding'] 						= array('Bottom padding','The value in px');
$GLOBALS['TL_LANG']['tl_content']['t4c_top_padding'] 							= array('Top padding', 'The value in px');
$GLOBALS['TL_LANG']['tl_content']['t4c_text_size'] 								= array('Text size', 'The value in px');
$GLOBALS['TL_LANG']['tl_content']['t4c_divider_icon_repeat'] 					= array('Number of icon','');
$GLOBALS['TL_LANG']['tl_content']['ref_t4c_divider_width'] 						= array('width_40' => '40%', 'width_50' => '50%', 'width_60' => '60%', 'width_70' => '70%', 'width_80' => '80%', 'width_90' => '90%', 'width_100' => '100%');

/*
 * Hover box
 */

$GLOBALS['TL_LANG']['CTE']['t4c_box_wrapper_start']								= array('Hover box - start','');
$GLOBALS['TL_LANG']['CTE']['t4c_box_wrapper_stop'] 								= array('Hover box - stop','');
$GLOBALS['TL_LANG']['tl_content']['t4c_box_wrapper_hover']						= array('Hover effect','');
$GLOBALS['TL_LANG']['tl_content']['t4c_box_wrapper_padding']					= array('Box padding','');
$GLOBALS['TL_LANG']['tl_content']['t4c_box_wrapper_margin']						= array('Box margin','');
$GLOBALS['TL_LANG']['tl_content']['t4c_box_wrapper_color']						= array('Text color','');
$GLOBALS['TL_LANG']['tl_content']['t4c_box_wrapper_background']					= array('Background color','');
$GLOBALS['TL_LANG']['tl_content']['t4c_box_wrapper_hover_color']				= array('Hover text color','');
$GLOBALS['TL_LANG']['tl_content']['t4c_box_wrapper_hover_background']			= array('Hover background color','');

/*
 * Icon
 */
$GLOBALS['TL_LANG']['CTE']['t4c_icon']  										= array('Icon','');
$GLOBALS['TL_LANG']['tl_content']['t4c_tooltip_url'] 							= array('Link Target','Please enter a web address (http://…), an e-mail address (mailto:…) or an insert tag.');
$GLOBALS['TL_LANG']['tl_content']['t4c_tooltip_url_target'] 					= array('Open in new window','Open the link in a new browser window.');
$GLOBALS['TL_LANG']['tl_content']['tooltip_legend'] 							= 'Tooltip';
$GLOBALS['TL_LANG']['tl_content']['t4c_tooltip_text'] 							= array('Tooltip text','');
$GLOBALS['TL_LANG']['tl_content']['t4c_tooltip_postion'] 						= array('Tooltip position','');
$GLOBALS['TL_LANG']['tl_content']['t4c_tooltip_textcolor'] 						= array('Tooltip text color','');
$GLOBALS['TL_LANG']['tl_content']['t4c_tooltip_bgcolor'] 						= array('Tooltip background color','');
$GLOBALS['TL_LANG']['tl_content']['t4c_tooltip_add'] 							= array('Add tooltip','');

/*
 * Icon Box
 */
$GLOBALS['TL_LANG']['CTE']['t4c_icon_box']  									= array('Icon Box','');
$GLOBALS['TL_LANG']['tl_content']['t4c_ib_layout'] 								= array('Box layout','');
$GLOBALS['TL_LANG']['tl_content']['t4c_title'] 									= array('Title','');
$GLOBALS['TL_LANG']['tl_content']['t4c_description'] 							= array('Description','');
$GLOBALS['TL_LANG']['tl_content']['t4c_ib_icon_type'] 							= array('Icon type','');
$GLOBALS['TL_LANG']['tl_content']['ref_t4c_ib_icon'] 							= array('font' => 'Font icon', 'iconimage' => 'Image');
$GLOBALS['TL_LANG']['tl_content']['t4c_image'] 									= array('Image','');
$GLOBALS['TL_LANG']['tl_content']['t4c_icon'] 									= array('Icon', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_icon_size'] 								= array('Icon size (px)','');
$GLOBALS['TL_LANG']['tl_content']['t4c_icon_color'] 							= array('Icon color', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_icon_padding'] 							= array('Icon padding (px)','');
$GLOBALS['TL_LANG']['tl_content']['t4c_icon_color_border'] 						= array('Border color','');
$GLOBALS['TL_LANG']['tl_content']['t4c_icon_color_background'] 					= array('Background color','');
$GLOBALS['TL_LANG']['tl_content']['t4c_icon_border_width'] 						= array('Icon border width (px)','');
$GLOBALS['TL_LANG']['tl_content']['t4c_icon_border_radius'] 					= array('Icon border radius','');
$GLOBALS['TL_LANG']['tl_content']['t4c_ib_add_button'] 							= array('Add button','');
$GLOBALS['TL_LANG']['tl_content']['t4c_ib_button_text'] 						= array('Button text','');
$GLOBALS['TL_LANG']['tl_content']['t4c_ib_button_text_color'] 					= array('Button text color','');
$GLOBALS['TL_LANG']['tl_content']['t4c_ib_button_bgcolor'] 						= array('Button background color', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_ib_button_border_color'] 				= array('Button border color', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_icon_button_border_size'] 				= array('Button border size (px)','');
$GLOBALS['TL_LANG']['tl_content']['t4c_icon_button_border_radius'] 				= array('Button border radius (px)','');
$GLOBALS['TL_LANG']['tl_content']['t4c_ib_hover'] 								= array('Hover effect','');
$GLOBALS['TL_LANG']['tl_content']['ref_t4c_ib_hover'] 							= array('zoom' => 'Zoom', 'rotate'=>'Rotate','opacity'=>'Opacity');
$GLOBALS['TL_LANG']['tl_content']['t4c_add_button_legend']     					= 'Add button';
$GLOBALS['TL_LANG']['tl_content']['t4c_hover_effects_legend'] 		    		= 'Hover effects';
$GLOBALS['TL_LANG']['tl_content']['t4c_icon_settings_legend']     				= 'Icon settings';
$GLOBALS['TL_LANG']['tl_content']['t4c_icon_box_background']					= array('Box background color','');
$GLOBALS['TL_LANG']['tl_content']['t4c_icon_box_border_color']					= array('Box border color', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_icon_box_border_width']					= array('Box border width (px)', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_icon_box_border_style']					= array('Box border style', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_icon_box_border_radius']					= array('Box border radius', '');
$GLOBALS['TL_LANG']['tl_content']['ref_t4c_icon_box_border_style']				= array('dotted' => 'Dotted','dashed' => 'Dashed','solid' => 'Solid','double' => 'Double','groove' => 'Groove','ridge' => 'Ridge');
$GLOBALS['TL_LANG']['tl_content']['t4c_icon_button_hover']						= array('Button hover effect','');
$GLOBALS['TL_LANG']['tl_content']['ref_t4c_icon_button_hover']					= array(
																					'hover_zoom_in' => 'Zoom In',
																					'hover_zoom_out' => 'Zoom Out',
																					'hover_opacity' => 'Opacity',
																					'hover_darker' => 'Darker Color',
																					'hover_lighter' => 'Lighter Color',
																					'hover_glow' => 'Glow');
$GLOBALS['TL_LANG']['tl_content']['ref_t4c_ib_layout'] 							= array(
																					'layout_1' => array(
																						'Layout 1',
																						'<img src="system/modules/t4c_elements/assets/images/icon-box-layout-1.png">'
																					),
																					'layout_2' => array(
																						'Layout 2',
																						'<img src="system/modules/t4c_elements/assets/images/icon-box-layout-2.png">'
																					),
																					'layout_3' => array(
																						'Layout 3',
																						'<img src="system/modules/t4c_elements/assets/images/icon-box-layout-3.png">'
																					),
																					'layout_4' => array(
																						'Layout 4',
																						'<img src="system/modules/t4c_elements/assets/images/icon-box-layout-4.png">'
																					),
																					'layout_5' => array(
																						'Layout 5',
																						'<img src="system/modules/t4c_elements/assets/images/icon-box-layout-5.png">'
																					),
																					'layout_6' => array(
																						'Layout 6',
																						'<img src="system/modules/t4c_elements/assets/images/icon-box-layout-6.png">'
																					),
																					'layout_7' => array(
																						'Layout 7',
																						'<img src="system/modules/t4c_elements/assets/images/icon-box-layout-7.png">'
																					),
																					'layout_8' => array(
																						'Layout 8',
																						'<img src="system/modules/t4c_elements/assets/images/icon-box-layout-8.png">'
																					),
																					'layout_9' => array(
																						'Layout 9',
																						'<img src="system/modules/t4c_elements/assets/images/icon-box-layout-9.png">'
																					),
																					'layout_10' => array(
																						'Layout 10',
																						'<img src="system/modules/t4c_elements/assets/images/icon-box-layout-10.png">'
																					),
																					'layout_11' => array(
																						'Layout 11',
																						'<img src="system/modules/t4c_elements/assets/images/icon-box-layout-11.png">'
																					),
																					'layout_12' => array(
																						'Layout 12',
																						'<img src="system/modules/t4c_elements/assets/images/icon-box-layout-12.png">'
																					),
																					'layout_13' => array(
																						'Layout 13',
																						'<img src="system/modules/t4c_elements/assets/images/icon-box-layout-13.png">'
																					),
																					'layout_1' => array(
																						'Layout 1',
																						'<img src="system/modules/t4c_elements/assets/images/icon-box-layout-1.png">'
																					)
																				);

/*
 * Icons list
 */
$GLOBALS['TL_LANG']['CTE']['t4c_icons_list']  								= array('Icons list','');
$GLOBALS['TL_LANG']['tl_content']['t4c_il_icon_postion'] 					= array('Icon postion');
$GLOBALS['TL_LANG']['tl_content']['t4c_il_add_contector'] 					= array('Add connector','');
$GLOBALS['TL_LANG']['tl_content']['t4c_il_conector_type'] 					= array('Connector type','');
$GLOBALS['TL_LANG']['tl_content']['t4c_il_contector_animation'] 			= array('Connector animation','');
$GLOBALS['TL_LANG']['tl_content']['t4c_il_contector_color'] 				= array('Connector color','');
$GLOBALS['TL_LANG']['tl_content']['t4c_il_icon'] 							= array('Icons list', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_il_icon_file'] 						= array('Icon','');
$GLOBALS['TL_LANG']['tl_content']['t4c_il_icon_title'] 						= array('Title','');
$GLOBALS['TL_LANG']['tl_content']['t4c_il_icon_text'] 						= array('Text','');
 
/*
 * Intense Images
 */
$GLOBALS['TL_LANG']['CTE']['t4c_intense_images']  							= array('Intense Images','');
 
/*
 * Light Gallery
 */
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_show_description']				= array('Show description', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_show_title']						= array('Show title', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_mode']							= array('Mode', 'Type of transition between images.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_use_css']							= array('Use CSS','LightGallery will try to use CSS transitions by default and fall back to jQuery animation if they are not supported. You can force exclusive usage of jQuery animation by setting this option to false.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_css_easing']						= array('CSS Easing', 'Type of easing to be used for css animations.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_easing']							= array('Easing', 'Type of easing to be used for jquery animations.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_speed']							= array('Speed', 'Transition duration (in ms).');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_class']							= array('Add class', 'Add custom class for gallery, can be used to set different style for different gallery.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_preload']							= array('Preload', 'Number of preload slides. will exicute only after the current slide is fully loaded. ex:// you clicked on 4th image and if preload = 1 then 3rd slide and 5th slide will be loaded in the background after the 4th slide is fully loaded.. if preload is 2 then 2nd 3rd 5th 6th slides will be preloaded.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_show_after_load'] 				= array('Show after load', 'Show Content once it is fully loaded.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_thumbnail']						= array('Thumbnail', 'Whether to display a button to show thumbnails.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_show_thumbnail']					= array('Show thumb by default', 'Whether to display thumbnails by default.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_animate_thumbnail']				= array('Animate thumb', 'Enable thumbnail animation.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_pager_position'] 					= array('Current pager position','Position of selected thumbnail.');
$GLOBALS['TL_LANG']['tl_content']['ref_t4c_lg_pager_position']				= array('middle' => 'Middle', 'left' => 'Left', 'right' => 'Right');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_thumb_width']						= array('Thumb width (px)', 'Width of the thumbnaills.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_thumb_margin']					= array ('Thumb margin (px)', 'Spacing between each thumbnails.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_controls']						= array('Controls', 'If false, prev/next buttons will not be displayed.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_hide_controls']					= array('Hide control on end','If true, prev/next button will be hidden on first/last image.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_loop']							= array('Loop', 'If false, will disable the ability to loop back to the beginning of the gallery when on the last element.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_auto']							= array('Auto', 'Enables slideshow mode.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_pause']							= array('Pause', 'The time (in ms) between each auto transition.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_esc']								= array('Esc key', 'Whether the LightGallery could be closed by pressing the "Esc" key.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_closable']						= array('Closable','Allows clicks on dimmer to close gallery.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_counter']							= array('Counter','Whether to show total number of images and index number of currently displayed image.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_lang']							= array('Lang','Define text of labels.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_mobile_src']						= array('Mobile src', 'To make your website faster in mobile devices you can load separate images (low quality) for Mobile devices. Add the path of the image which you wish to load in mobile devices inside data-responsive-src attribute.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_mobile_src_width'] 				= array('Mobile src max width (px)', 'You can define from which resolution the images for mobile devices should be loaded.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_swipe']							= array('Swipe thresholdh (px)', 'By setting the swipeThreshold (in px) you can set how far the user must swipe for the next/prev image.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_touch']							= array('Enable touch','Enables touch support.');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_drag']							= array('Enable drag', 'Enables desktop mouse drag support.');
$GLOBALS['TL_LANG']['CTE']['t4c_light_gallery']  							= array('Light gallery','');
$GLOBALS['TL_LANG']['tl_content']['t4c_lg_settings_legend']     			= 'Light gallery settings';
$GLOBALS['TL_LANG']['tl_content']['t4c_size_mobile']						= array('Image size for mobile devices','To make your website faster in mobile devices you can load separate images (low quality) for Mobile devices.');

/*
 * Notification
 */
$GLOBALS['TL_LANG']['CTE']['t4c_notification']  							= array('Notification','');
$GLOBALS['TL_LANG']['tl_content']['t4c_info']								= array('Info','');
$GLOBALS['TL_LANG']['tl_content']['t4c_message']							= array('Message','');
$GLOBALS['TL_LANG']['tl_content']['t4c_noti_postion']						= array('Position','');
$GLOBALS['TL_LANG']['tl_content']['t4c_noti_in']							= array('In effect:','Notifications appear effect.');
$GLOBALS['TL_LANG']['tl_content']['t4c_noti_out']							= array('Out Effect','Notifications disappear effect.');
$GLOBALS['TL_LANG']['tl_content']['t4c_noti_delay']							= array('Delay','Default auto hide time is 3 seconds you can specify auto hide time with delay option.');
$GLOBALS['TL_LANG']['tl_content']['t4c_noti_sticky']						= array('Sticky','Notifications remain on screen.');
$GLOBALS['TL_LANG']['tl_content']['t4c_noti_close_click']					= array('Close on click','You can close notifications by clicking on them.');
$GLOBALS['TL_LANG']['tl_content']['t4c_noti_close_button']					= array('Close button','You can add close button to notifications.');

/*
 * Promo Box
 */
$GLOBALS['TL_LANG']['CTE']['t4c_promo_box']  								= array('Promo Box','');
$GLOBALS['TL_LANG']['tl_content']['t4c_slogan']								= array('Slogan', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_promo_position']						= array('Title position', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_promo_textcolor']					= array('Title color','');
$GLOBALS['TL_LANG']['tl_content']['t4c_promo_slogancolor']					= array('Slogan color','');
$GLOBALS['TL_LANG']['tl_content']['t4c_promo_sloganbgcolor']				= array('Background slogan color','');
$GLOBALS['TL_LANG']['tl_content']['t4c_promo_hover']						= array('Hover effects','');
$GLOBALS['TL_LANG']['tl_content']['ref_t4c_promo_hover']					= array('no' => 'No','hover_float' => 'Float','hover_sink' => 'Sink','hover_darker' => 'Darker','hover_lighter' => 'Lighter','hover_zoom_in' => 'Zoom in','hover_zoom_out' => 'Zoom out','hover_opacity' => 'Opacity','hover_glow' => 'Glow');


/*
 * Team
 */
$GLOBALS['TL_LANG']['CTE']['t4c_team']  									= array('Team','');
$GLOBALS['TL_LANG']['tl_content']['t4c_team_name'] 							= array('Name','');
$GLOBALS['TL_LANG']['tl_content']['t4c_team_about'] 						= array('About','');
$GLOBALS['TL_LANG']['tl_content']['t4c_team_position'] 						= array('Position','Please enter team member\'s Position in the company.');
$GLOBALS['TL_LANG']['tl_content']['t4c_team_email'] 						= array('Email','');
$GLOBALS['TL_LANG']['tl_content']['t4c_team_facebook'] 						= array('Facebook','Please enter full URL of this social network(include http://).');
$GLOBALS['TL_LANG']['tl_content']['t4c_team_twitter'] 						= array('Twitter','Please enter full URL of this social network(include http://).');
$GLOBALS['TL_LANG']['tl_content']['t4c_team_google'] 						= array('Google+','Please enter full URL of this social network(include http://).');
$GLOBALS['TL_LANG']['tl_content']['t4c_team_linkedin'] 						= array('Linked In','Please enter full URL of this social network(include http://).');

/*
 * Quick Facts
 */
$GLOBALS['TL_LANG']['CTE']['t4c_quick_facts']  								= array('Quick facts','');
$GLOBALS['TL_LANG']['tl_content']['t4c_qf_number']							= array('Number','');
$GLOBALS['TL_LANG']['tl_content']['t4c_qf_number_position']					= array('Number position', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_qf_description'] 					= array('Description','');
$GLOBALS['TL_LANG']['tl_content']['ref_t4c_qf_number_position']				= array('number_top' => 'Top', 'number_left' => 'Left', 'number_bottom' => 'Bottom', 'number_right' => 'Right');

/*
 * Social Icons
 */
$GLOBALS['TL_LANG']['CTE']['t4c_social_icons']  							= array('Social icons','');
$GLOBALS['TL_LANG']['tl_content']['t4c_social_icons']						= array('Icons list', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_social_icons_icon']					= array('Icon', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_social_icons_url']					= array('Link', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_social_icons_text']					= array('Tooltip text', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_social_icons_css']					= array('Css', '');
$GLOBALS['TL_LANG']['tl_content']['t4c_social_list_legend']     			= 'Icon settings';

