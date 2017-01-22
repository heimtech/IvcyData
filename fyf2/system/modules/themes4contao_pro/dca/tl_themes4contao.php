<?php

/**
 * themes4contao_alpha extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package themes4contao_alpha
 * @author  Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @license Commercial
 */

$this->loadDataContainer('tl_content');

/**
 * Add pelettes to tl_themes4contao
 */

$GLOBALS['TL_DCA']['tl_themes4contao']['palettes']['pro'] = '
	{general_legend:hide},
		pro_page_layout,
		pro_text_font_family,
		pro_text_size,
		pro_content_width,
		pro_menu_breakpoint,
		pro_page_margin,
		pro_button_radius,
		pro_form_style,
		pro_sticky_footer,
		custom,
		custom_js;
		
	{general_theme_color_legend:hide},
		pro_main_theme_color,
		pro_text_color,
		pro_text_strong_color,
		pro_link_color,
		pro_link_hover_color,
		pro_comments_color,
		pro_comments_background,
		pro_divider_color
		;
	{form_color_legend:hide},
		pro_input_text_color,
		pro_input_background_color,
		pro_input_border_color,
		pro_input_focus_background_color,
		pro_input_focus_border_color,
		pro_label_text_color,
		pro_submit_text_color,
		pro_submit_background_color
		;	
	{background_legend:hide},
		pro_body_background_color,
		pro_background_image,
		pro_background_image_position,
		pro_background_image_repeat,
		pro_background_image_size,
		pro_background_attachment;	
		
	{header_legend:hide},
		pro_header_layout,
		pro_header_style,
		pro_header_postion,
		pro_header_height,
		pro_header_width,
		pro_header_margin,
		pro_subheader_height,
		pro_logo_padding,
		pro_header_sticky,
		pro_header_height_sticky,
		pro_sticky_logo_padding,
		pro_logo_mobile_padding,
		pro_header_background,
		pro_header_bgcolor,
		pro_header_background_repeat,
		pro_header_background_position,
		pro_sticky_header_bgcolor,
		pro_transparent_header
		;
	
	{content_legend:hide},
		pro_content_layout,
		pro_content_background_color,
		pro_content_margin,
		pro_content_padding
	;
	{header-toolbar_legend:hide},
		pro_add_toolbar,
		pro_toolbar_layout,
		pro_toolbar_tagline,
		pro_toolbar_email,
		pro_toolbar_phone,
		pro_header_contactinfo_position,
		pro_header_form_position,
		pro_header_show_login_form,
		pro_header_show_register_form,
		pro_header_show_newsletter_form,
		pro_header_show_changelanguage,
		pro_toolbar_left_content,
		pro_toolbar_right_content,
		pro_toolbar_textcolor,
		pro_toolbar_bgcolor,
		pro_toolbar_dropdown_color,
		pro_toolbar_border_color,
		pro_toolbar_separator_color;
	
	{header_logo:hide},
		pro_logo,
		pro_logo_retina,
		pro_logo_retina_size,
		pro_logo_sticky_header,
		pro_logo_sticky_header_retina,
		pro_logo_sticky_header_retina_size,
		pro_mobile_logo,
		pro_mobile_logo_retina,
		pro_mobile_logo_retina_size;
	
	{header_favicon:hide},
		pro_favicon,
		pro_apple_iphone_icon,
		pro_apple_iphone_retina_icon,
		pro_apple_ipad_icon,
		pro_apple_ipad_retina_icon;
		
	{header_icons:hide},
		pro_header_icon_color,
		pro_header_icon_background_color,
		pro_header_icon_border_color,
		pro_header_icon_hover_color,
		pro_header_icon_hover_background_color,
		pro_header_icon_hover_border_color;	
	
	{headline_legend:hide},
		pro_headline_font_family,
		pro_headline_color,
		pro_headline_text_transform,
		pro_headline1_font_size,
		pro_headline1_margin,
		pro_headline2_font_size,
		pro_headline2_margin,
		pro_headline3_font_size,
		pro_headline3_margin,
		pro_headline4_font_size,
		pro_headline4_margin,
		pro_headline5_font_size,
		pro_headline5_margin,
		pro_headline6_font_size,
		pro_headline6_margin;
		
	{social_networks_legend},
		pro_social_networks_list,
		pro_header_social_position;
		
	{mainmenu_legend:hide},
		pro_main_menu_style,
		pro_main_menu_font_family,
		pro_main_menu_font_size,
		pro_main_menu_text_transform,
		pro_items_space,
		pro_items_space_sticky,
		pro_menu_arrows,		
		pro_menu_top_margin,
		pro_menu_level1_color,
		pro_menu_level1_hover_color,
		pro_menu_level2_text_color,
		pro_menu_level2_hover_text_color,
		pro_menu_level2_border_color,
		pro_menu_level2_background_color,
		pro_menu_level2_hover_background_color,
		pro_menu_top_border,
		pro_main_menu_show_search,
		pro_search_box_background;
	
	{mobilemenu_legend:hide},
		pro_mobilemenu_background,
		pro_mobile_menu_font_family,
		pro_mobile_menu_font_size,
		pro_mobile_menu_level1_color,
		pro_mobile_menu_level1_hover_color,
		pro_mobile_menu_level1_background,
		pro_mobile_menu_level1_hover_background,
		pro_mobile_menu_level1_border_color,
		pro_mobile_menu_level2_color,
		pro_mobile_menu_level2_hover_color,
		pro_mobile_menu_level2_background,
		pro_mobile_menu_level2_hover_background,
		pro_mobile_menu_level2_border_color,
		pro_mobile_menu_level3_color,
		pro_mobile_menu_level3_hover_color,
		pro_mobile_menu_level3_background,
		pro_mobile_menu_level3_hover_background,
		pro_mobile_menu_level3_border_color;		
		
	{sidebar_menu_legend:hide},
		pro_sidebar_menu_font_family,
		pro_sidebar_menu_font_size,
		pro_sidebar_menu_level1_color,
		pro_sidebar_menu_level1_hover_color,
		pro_sidebar_menu_level1_background,
		pro_sidebar_menu_level1_hover_background,
		pro_sidebar_menu_level1_border_color,
		pro_sidebar_menu_level2_color,
		pro_sidebar_menu_level2_hover_color,
		pro_sidebar_menu_level2_background,
		pro_sidebar_menu_level2_hover_background,
		pro_sidebar_menu_level2_border_color,
		pro_sidebar_menu_level3_color,
		pro_sidebar_menu_level3_hover_color,
		pro_sidebar_menu_level3_background,
		pro_sidebar_menu_level3_hover_background,
		pro_sidebar_menu_level3_border_color;
		
	{quick_contact_legend:hide},
		pro_show_quick_contact_form,
		pro_show_gotop_icon,
		pro_icon_style,
		pro_icon_position;
	
	{breadcrumb_legend:hide},
		pro_breadcrumb_color,
		pro_breadcrumb_background,
		pro_breadcrumb_height,
		pro_breadcrumb_font_size,
		pro_breadcrumb_separator;
	
';

$GLOBALS['TL_DCA']['tl_themes4contao']['palettes']['__selector__'][] =  'pro_header_show_login_form';
$GLOBALS['TL_DCA']['tl_themes4contao']['subpalettes']['pro_header_show_login_form']= 'pro_header_login_form_module';

$GLOBALS['TL_DCA']['tl_themes4contao']['palettes']['__selector__'][] =  'pro_header_show_newsletter_form';
$GLOBALS['TL_DCA']['tl_themes4contao']['subpalettes']['pro_header_show_newsletter_form'] = 'pro_header_newletter_form_module';

$GLOBALS['TL_DCA']['tl_themes4contao']['palettes']['__selector__'][] =  'pro_header_show_register_form';
$GLOBALS['TL_DCA']['tl_themes4contao']['subpalettes']['pro_header_show_register_form'] = 'pro_header_register_form_module';


$GLOBALS['TL_DCA']['tl_themes4contao']['palettes']['__selector__'][] =  'pro_header_show_changelanguage';
$GLOBALS['TL_DCA']['tl_themes4contao']['subpalettes']['pro_header_show_changelanguage'] = 'pro_header_changelanguage_module,pro_header_changelanguage_position';

$GLOBALS['TL_DCA']['tl_themes4contao']['palettes']['__selector__'][] =  'pro_header_show_changelanguage';
$GLOBALS['TL_DCA']['tl_themes4contao']['subpalettes']['pro_header_show_changelanguage'] = 'pro_header_changelanguage_module,pro_header_changelanguage_position';

$GLOBALS['TL_DCA']['tl_themes4contao']['palettes']['__selector__'][] =  'pro_main_menu_show_search';
$GLOBALS['TL_DCA']['tl_themes4contao']['subpalettes']['pro_main_menu_show_search'] = 'pro_main_menu_search_form';

$GLOBALS['TL_DCA']['tl_themes4contao']['palettes']['__selector__'][] =  'pro_show_quick_contact_form';
$GLOBALS['TL_DCA']['tl_themes4contao']['subpalettes']['pro_show_quick_contact_form'] = 'pro_quick_contact_form,pro_quick_contact_form_background';



/**
 * General Settings
 */

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_page_layout'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_page_layout'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('full_width', 'boxed'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_themes4contao']['ref_pro_page_layout'],
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(24) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_text_size'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_text_size'],
    'exclude'                 => true,
    'inputType'               => 'inputUnit',
    'options'                 => array('px', '%', 'em', 'rem', 'ex', 'pt', 'pc', 'in', 'cm', 'mm'),
    'eval'                    => array('includeBlankOption'=>true, 'rgxp'=>'digit_inherit', 'maxlength'=>20, 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$defaultTextSize', 'format' => 'unit'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);


$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_add_toolbar'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_add_toolbar'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50 m12'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_form_style'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_form_style'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('form_style_1', 'form_style_2', 'form_style_3', 'form_style_4'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_themes4contao']['ref_pro_form_style'],
    'eval'                    => array('tl_class'=>'w50', 'helpwizard'=>true),
    'sql'                     => "varchar(24) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_content_width'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_content_width'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'digit', 'maxlength'=>6, 'tl_class'=>'w50', 'minval' => 960, 'maxval' => '1380'),
	'sass'					  => array('name'=>'$largeWidth', 'format' => 'content-width'),
    'sql'                     => "varchar(6) NOT NULL default ''"
);


$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_menu_breakpoint'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_menu_breakpoint'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'digit', 'maxlength'=>6, 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$menuBreakpoint', 'format' => 'height'),
    'sql'                     => "varchar(6) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_page_margin'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_page_margin'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('multiple'=>true, 'size'=>2, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$pageMargin', 'format' => 'page-margin'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);


$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_button_radius'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_button_radius'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'digit', 'maxlength'=>6, 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$buttonDefaultRadius', 'format' => 'height'),
    'sql'                     => "varchar(6) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_sticky_footer'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_sticky_footer'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50 m12'),
    'sql'                     => "char(1) NOT NULL default ''"
);

/**
 * Genral Color Settings
 */
$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_main_theme_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_main_theme_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'wizard'),
	'sass'					  => array('name'=>'$themeColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_text_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_text_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$themeTextColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);


$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_text_strong_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_text_strong_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$themeStrongTextColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_link_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_link_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$linkColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_link_hover_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_link_hover_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$linkHoverColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_divider_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_divider_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$dividerColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_comments_background'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_comments_background'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$commentsBackground', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_comments_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_comments_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$commentsColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

/**
 * Content settings
 */

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_content_layout'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_content_layout'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('full_width', 'boxed'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_themes4contao']['ref_pro_page_layout'],
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_content_margin'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_content_margin'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('multiple'=>true, 'size'=>2, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$containerMargin', 'format' => 'page-margin'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_content_padding'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_content_padding'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('multiple'=>true, 'size'=>2, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$containerPadding', 'format' => 'content-padding'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

/**
 * Backgrround
 */

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_background_image'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_background_image'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes'], 'tl_class'=>'clr'),
	'sass'					  => array('name'=>'$bodyBackgroundImage', 'format' => 'image'),
    'sql'                     => "binary(16) NULL"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_body_background_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_body_background_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$bodyBackgroundColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_content_background_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_content_background_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$contentBackgroundColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_background_image_repeat'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_background_image_repeat'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('repeat', 'repeat-x', 'repeat-y', 'no-repeat'),
    'eval'                    => array('tl_class'=>'w50', 'includeBlankOption'=>true),
	'sass'					  => array('name'=>'$bodyBackgroundImageRepeat', 'format' => 'value'),
    'sql'                     => "varchar(10) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_background_image_size'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_background_image_size'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('cover', 'contain'),
    'eval'                    => array('tl_class'=>'w50', 'includeBlankOption'=>true),
	'sass'					  => array('name'=>'$bodyBackgroundImagetSize', 'format' => 'value'),
    'sql'                     => "varchar(8) NOT NULL default ''"
);


$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_background_image_position'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_background_image_position'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('Center Center', 'Left Top', 'Right Top', 'Left Bottom', 'Right Bottom', 'Left Center', 'Right Center', 'Center Top', 'Center Bottom'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_article']['ref_t4c_row_bg_image_position'],
    'eval'                    => array('tl_class'=>'w50', 'includeBlankOption'=>true),
	'sass'					  => array('name'=>'$bodyBackgroundImagePosiion', 'format' => 'value'),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_background_attachment'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_background_attachment'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('scroll', 'fixed'),
    'eval'                    => array('tl_class'=>'w50'),
	'sass'					  => array('name'=>'$bodyBackgroundAttachment', 'format' => 'value'),
    'sql'                     => "varchar(10) NOT NULL default ''"
);

/**
 * Forms
 */
$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_input_background_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_input_background_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$inputBackgroundColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_input_text_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_input_text_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$inputTextColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_input_border_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_input_border_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'wizard'),
	'sass'					  => array('name'=>'$inputBorderColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_input_focus_background_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_input_focus_background_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$inputFocusBackgroundColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_input_focus_border_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_input_focus_border_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$inputFocusBorderColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_submit_background_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_submit_background_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$inputSubmitBackround', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_submit_text_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_submit_text_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$inputSubmitColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_label_text_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_label_text_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'wizard'),
	'sass'					  => array('name'=>'$formLabelColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);


/**
 * Header Toolbar Settings
 */

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_toolbar_layout'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_toolbar_layout'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('boxed', 'full_background', 'full_content'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_themes4contao']['ref_pro_header_layout'],
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(32) NOT NULL default ''"
);


$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_toolbar_tagline'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['toolbar_tagline'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_toolbar_email'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['toolbar_email'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50', 'rgxp'=>'email'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_toolbar_phone'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['toolbar_phone'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_contactinfo_position'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_contactinfo_position'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('left','right'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_themes4contao']['ref_positon'],
    'eval'                    => array('tl_class'=>'w50', 'includeBlankOption'=>true),
    'sql'                     => "varchar(25) NOT NULL default ''"
);



$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_show_login_form'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_show_login_form'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'long m12 clr', 'submitOnChange'=>true),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_login_form_module'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_login_form_module'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_content', 'getModules'),
	'eval'                    => array('mandatory'=>true, 'chosen'=>true, 'submitOnChange'=>true, 'tl_class'=>'w50 clr'),
	'wizard' => array
	(
		array('tl_content', 'editModule')
	),
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_show_register_form'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_show_register_form'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'long m12 clr', 'submitOnChange'=>true),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_register_form_module'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_register_form_module'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_content', 'getModules'),
	'eval'                    => array('mandatory'=>true, 'chosen'=>true, 'submitOnChange'=>true, 'tl_class'=>'w50 clr'),
	'wizard' => array
	(
		array('tl_content', 'editModule')
	),
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_show_newsletter_form'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_show_newsletter_form'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'long m12 clr', 'submitOnChange'=>true),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_show_changelanguage'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_show_changelanguage'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'long m12 clr', 'submitOnChange'=>true),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_form_position'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_form_position'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('left','right'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_themes4contao']['ref_positon'],
    'eval'                    => array('tl_class'=>'w50', 'includeBlankOption'=>true),
    'sql'                     => "varchar(25) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_changelanguage_module'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_changelanguage_module'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_content', 'getModules'),
	'eval'                    => array('mandatory'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
	'wizard' => array
	(
		array('tl_content', 'editModule')
	),
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_changelanguage_position'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_changelanguage_position'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('left','right'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_themes4contao']['ref_positon'],
    'eval'                    => array('tl_class'=>'w50', 'includeBlankOption'=>true),
    'sql'                     => "varchar(25) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_newletter_form_module'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_newsletter_form_module'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_content', 'getModules'),
	'eval'                    => array('mandatory'=>true, 'chosen'=>true, 'tl_class'=>'w50 clr'),
	'wizard' => array
	(
		array('tl_content', 'editModule')
	),
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);


$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_toolbar_bgcolor'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_toolbar_bgcolor'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$toolbarBackground', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_toolbar_dropdown_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_toolbar_dropdown_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$toolbarDropdownBackground', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_toolbar_textcolor'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_toolbar_textcolor'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$toolbarColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_toolbar_border_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_toolbar_border_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$toolbarBottomBorder', 'format' => 'border-bottom'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_toolbar_separator_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_toolbar_separator_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$toolbarSeparatorColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);




/**
 * Header Settings
 */


$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_layout'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_layout'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('boxed', 'full_background', 'full_content'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_themes4contao']['ref_pro_header_layout'],
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_style'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_style'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('header_style_1', 'header_style_2', 'header_style_3', 'header_style_4', 'header_style_5', 'header_style_6', 'header_style_7', 'header_style_8', 'header_style_9', 'header_style_10', 'header_style_11'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_themes4contao']['ref_pro_header_style'],
    'eval'                    => array('tl_class'=>'w50',  'helpwizard'=>true),
    'sql'                     => "varchar(24) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_transparent_header'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_transparent_header'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50 m12'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_margin'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_margin'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('multiple'=>true, 'size'=>2, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$headerMargin', 'format' => 'page-margin'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_height'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_height'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'digit', 'maxlength'=>20, 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$headerHeight', 'format' => 'height'),
    'sql'                     => "varchar(20) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_width'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_width'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'digit', 'maxlength'=>6, 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$headerWidth', 'format' => 'height'),
    'sql'                     => "varchar(6) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_logo_padding'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_logo_padding'],
	'exclude'                 => true,
   'inputType'               => 'trbl',
    'options'                 => array('px'),
    'eval'                    => array('includeBlankOption'=>true, 'rgxp'=>'digit_auto_inherit', 'tl_class'=>'w50 clr'),
	'sass'					  => array('name'=>'$logoPadding', 'format' => 'trbl'),
    'sql'                     => "varchar(128) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_logo_mobile_padding'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_logo_mobile_padding'],
	'exclude'                 => true,
   'inputType'               => 'trbl',
    'options'                 => array('px'),
    'eval'                    => array('includeBlankOption'=>true, 'rgxp'=>'digit_auto_inherit', 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$logoMobilePadding', 'format' => 'trbl'),
    'sql'                     => "varchar(128) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_height_sticky'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_height_sticky'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'digit', 'maxlength'=>20, 'tl_class'=>'w50 clr'),
	'sass'					  => array('name'=>'$headerStickyHeight', 'format' => 'height'),
    'sql'                     => "varchar(20) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_sticky_logo_padding'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_sticky_logo_padding'],
	'exclude'                 => true,
   'inputType'               => 'trbl',
    'options'                 => array('px'),
    'eval'                    => array('includeBlankOption'=>true, 'rgxp'=>'digit_auto_inherit', 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$stickyLogoPadding', 'format' => 'trbl'),
    'sql'                     => "varchar(128) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_sticky'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_sticky'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50 m12 clr'),
    'sql'                     => "char(1) NOT NULL default '1'"
);


$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_bgcolor'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_bgcolor'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$headerBackgroundColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);


$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_background'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_background'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes'], 'tl_class'=>'clr'),
	'sass'					  => array('name'=>'$headerBackgroundImage', 'format' => 'image'),
    'sql'                     => "binary(16) NULL"
);
 		

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_background_repeat'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_background_repeat'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('repeat', 'repeat-x', 'repeat-y', 'no-repeat'),
    'eval'                    => array('tl_class'=>'w50', 'includeBlankOption'=>true),
	'sass'					  => array('name'=>'$headerBackgroundRepeat', 'format' => 'value'),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_background_position'] = array
(
   'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_background_position'],
   'exclude'                 => true,
   'inputType'               => 'select',
   'options'                 => array('Center Center', 'Left Top', 'Right Top', 'Left Bottom', 'Right Bottom', 'Left Center', 'Right Center', 'Center Top', 'Center Bottom'),
   'eval'                    => array('tl_class'=>'w50', 'includeBlankOption'=>true),
   'sass'					  => array('name'=>'$headerBackgroundPosition', 'format' => 'value'),
   'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_sticky_header_bgcolor'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_sticky_header_bgcolor'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$headerStickyBackgroundColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_subheader_height'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_subheader_height'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'digit', 'maxlength'=>20, 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$subheaderHeight', 'format' => 'height'),
    'sql'                     => "varchar(20) NOT NULL default ''"
);



/**
 * Logo Settings
 */

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_logo'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_logo'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes'], 'tl_class'=>'clr'),
    'sql'                     => "binary(16) NULL"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_logo_retina'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_logo_retina'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes'], 'tl_class'=>'clr'),
    'sql'                     => "binary(16) NULL"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_logo_retina_size'] = array
(
			'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_logo_retina_size'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('multiple'=>true, 'size'=>2, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'clr'),
			'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_logo_sticky_header'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_logo_sticky_header'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes'], 'tl_class'=>'clr'),
    'sql'                     => "binary(16) NULL"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_logo_sticky_header_retina'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_logo_sticky_header_retina'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes'], 'tl_class'=>'clr'),
    'sql'                     => "binary(16) NULL"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_logo_sticky_header_retina_size'] = array
(
			'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_logo_sticky_header_retina_size'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('multiple'=>true, 'size'=>2, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'clr'),
			'sql'                     => "varchar(64) NOT NULL default ''"
);

 
$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_mobile_logo'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_mobile_logo'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes'], 'tl_class'=>'clr'),
    'sql'                     => "binary(16) NULL"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_mobile_logo_retina'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_mobile_logo_retina'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes'], 'tl_class'=>'clr'),
    'sql'                     => "binary(16) NULL"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_mobile_logo_retina_size'] = array
(
			'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_mobile_logo_retina_size'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('multiple'=>true, 'size'=>2, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'clr'),
			'sql'                     => "varchar(64) NOT NULL default ''"
);



/**
 * Favicon
 */
 

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_favicon'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_favicon'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes'], 'tl_class'=>'clr'),
    'sql'                     => "binary(16) NULL"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_apple_iphone_icon'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_apple_iphone_icon'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes'], 'tl_class'=>'clr'),
    'sql'                     => "binary(16) NULL"
); 

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_apple_iphone_retina_icon'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_apple_iphone_retina_icon'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes'], 'tl_class'=>'clr'),
    'sql'                     => "binary(16) NULL"
); 

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_apple_ipad_icon'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_apple_ipad_icon'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes'], 'tl_class'=>'clr'),
    'sql'                     => "binary(16) NULL"
); 

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_apple_ipad_retina_icon'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_apple_ipad_retina_icon'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes'], 'tl_class'=>'clr'),
    'sql'                     => "binary(16) NULL"
);


/*
 * Header Icons
 */
 
$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_icon_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_icon_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$headerIconColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_icon_background_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_icon_background_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$headerIconBackgroundColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_icon_border_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_icon_border_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard clr'),
	'sass'					  => array('name'=>'$headerIconBorderColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_icon_hover_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_icon_hover_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 clr wizard'),
	'sass'					  => array('name'=>'$headerIconHoverColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_icon_hover_background_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_icon_hover_background_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$headerIconHoverBackgroundColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_icon_hover_border_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_icon_hover_border_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$headerIconHoverBorderColor', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

/*
 * Social Networks
 */

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_header_social_position'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_header_social_position'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('left','right','header'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_themes4contao']['ref_positon'],
    'eval'                    => array('tl_class'=>'w50', 'includeBlankOption'=>true),
    'sql'                     => "varchar(25) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_social_networks_list'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_social_networks'],
	'exclude' 		=> true,
	'inputType' 	=> 'multiColumnWizard',
	'eval' 			=> array
	(
		'columnFields' => array
		(
			'pro_social_networks_icon' => array
			(
				'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_social_networks_icon'],
				'exclude'                 => true,
				'inputType'               => 'iconpicker',
				'eval' 					  => array('style' => 'width:250px')
			),
			'pro_social_networks_link' => array
			(
				'label'			 		=> &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_social_networks_link'],
				'inputType' 			=> 'text',
				'eval'                  => array('style'=>'width:400px')
			),
		)
	),
	'sql'                     => "blob NULL"
); 


/**
 * Main Menu Settings
 */

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_main_menu_style'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_main_menu_style'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('menu_style1', 'menu_style2', 'menu_style3', 'menu_style4', 'menu_style5', 'menu_style6', 'menu_style7', 'menu_style8'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_themes4contao']['ref_pro_main_menu_style'],
    'eval'                    => array('tl_class'=>'w50', 'helpwizard' => true),
    'sql'                     => "varchar(24) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_main_menu_font_family'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_main_menu_font_family'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sass'					  => array('name'=>'$menuFont', 'format' => 'value'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_main_menu_text_transform'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_main_menu_text_transform'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('none', 'uppercase','lowercase'),
    'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$menuTextTransform', 'format' => 'value'),
    'sql'                     => "varchar(24) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_main_menu_font_size'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_main_menu_font_size'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'digit', 'maxlength'=>6, 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$mainMenuFontSize', 'format' => 'height'),
    'sql'                     => "varchar(6) NOT NULL default ''"
);


$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_menu_arrows'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_menu_arrows'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'long m12 clr'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_main_menu_border'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_main_menu_border'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50 m12'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_main_menu_arrows'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_main_menu_arrows'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50 m12'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_items_space'] = array
(
			'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_items_space'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50','maxlength'=>6),
			'sass'					  => array('name'=>'$mainMenuItemsMargin', 'format' => 'height'),
			'sql'                     => "varchar(6) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_menu_top_margin'] = array
(
			'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_menu_top_margin'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50','maxlength'=>6),
			'sass'					  => array('name'=>'$mainMenuTopMargin', 'format' => 'height'),
			'sql'                     => "varchar(6) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_items_space_sticky'] = array
(
			'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_items_space_sticky'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50','maxlength'=>6),
			'sass'					  => array('name'=>'$mainMenuItemsMarginSticky', 'format' => 'height'),
			'sql'                     => "varchar(6) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_main_menu_show_search'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_main_menu_show_search'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'long clr m12','submitOnChange'=>true),
    'sql'                     => "char(1) NOT NULL default ''"
);


$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_main_menu_search_form'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_main_menu_search_form'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_content', 'getForms'),
	'eval'                    => array('mandatory'=>true, 'chosen'=>true, 'submitOnChange'=>true, 'tl_class'=>'w50'),
	'wizard' => array
	(
		array('tl_content', 'editForm')
	),
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_search_box_background'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_search_box_background'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$searchFormBoxColor', 'format' => 'color', 'tl_class'=>'w50'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_menu_level1_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_menu_level1_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 clr wizard'),
	'sass'					  => array('name'=>'$mainMenuTextColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_menu_level1_hover_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_menu_level1_hover_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$mainMenuHoverTextColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_menu_level2_text_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_menu_level2_text_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$mainMenuSubmenuTextColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_menu_level2_hover_text_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_menu_level2_hover_text_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$submenuHoverTextColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_menu_level2_border_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_menu_level2_border_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$submenuSeparator', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_menu_level2_background_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_menu_level2_background_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 clr wizard'),
	'sass'					  => array('name'=>'$submenuBackgroundColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_menu_level2_hover_background_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_menu_level2_hover_background_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$submenuHoverBackgroundColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_menu_top_border'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_menu_top_border'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$topBorderColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);



/**
 * Quick Contact
 */
 
$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_show_quick_contact_form'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_show_quick_contact_form'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'long m12 clr', 'submitOnChange'=>true),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_quick_contact_form'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_quick_contact_form'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_content', 'getForms'),
	'eval'                    => array('mandatory'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
	'wizard' => array
	(
		array('tl_content', 'editModule')
	),
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_quick_contact_form_background'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_quick_contact_form_background'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$quickContactBackground', 'format' => 'color'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_show_gotop_icon'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_show_gotop_icon'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'long m12 clr'),
    'sql'                     => "char(1) NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_icon_style'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_icon_style'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('black', 'white'),
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(6) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_icon_position'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_icon_position'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('right', 'left'),
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(6) NOT NULL default ''"
);

/**
 * Mobile menu
 */
 
$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_mobilemenu_background'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_mobilemenu_background'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'clr wizard'),
	'sass'					  => array('name'=>'$mobileMenuBackground', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_mobile_menu_level1_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_mobile_menu_level1_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$mobileLevel1TextColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_mobile_menu_level1_hover_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_mobile_menu_level1_hover_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$mobileLevel1ActiveTextColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_mobile_menu_level1_background'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_mobile_menu_level1_background'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$mobileLevel1BgColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_mobile_menu_level1_hover_background'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_mobile_menu_level1_hover_background'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$mobileLevel1ActiveBgColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_mobile_menu_level1_border_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_mobile_menu_level1_border_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'wizard clr'),
	'sass'					  => array('name'=>'$mobileLevel1BorderColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_mobile_menu_level2_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_mobile_menu_level2_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$mobileLevel2TextColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_mobile_menu_level2_hover_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_mobile_menu_level2_hover_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$mobileLevel2ActiveTextColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_mobile_menu_level2_background'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_mobile_menu_level2_background'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$mobileLevel2BgColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_mobile_menu_level2_hover_background'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_mobile_menu_level2_hover_background'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$mobileLevel2ActiveBgColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_mobile_menu_level2_border_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_mobile_menu_level2_border_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'wizard clr'),
	'sass'					  => array('name'=>'$mobileLevel2BorderColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_mobile_menu_level3_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_mobile_menu_level3_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$mobileLevel3TextColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_mobile_menu_level3_hover_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_mobile_menu_level3_hover_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$mobileLevel3ActiveTextColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_mobile_menu_level3_background'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_mobile_menu_level3_background'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$mobileLevel3BgColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_mobile_menu_level3_hover_background'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_mobile_menu_level3_hover_background'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$mobileLevel3ActiveBgColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_mobile_menu_level3_border_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_mobile_menu_level3_border_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$mobileLevel3BorderColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_mobile_menu_font_family'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_mobile_menu_font_family'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('tl_class'=>'w50','maxlength'=>255),
	'sass'					  => array('name'=>'$mobileMenuFont', 'format' => 'value', 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_mobile_menu_font_size'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_mobile_menu_font_size'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('tl_class'=>'w50','maxlength'=>6),
	'sass'					  => array('name'=>'$mobileMenuFontSize', 'format' => 'height', 'tl_class'=>'w50 clr'),
	'sql'                     => "varchar(6) NOT NULL default ''"
);


/**
 * Sidebar menu
 */
$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_sidebar_menu_level1_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_sidebar_menu_level1_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$level1TextColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_sidebar_menu_level1_hover_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_sidebar_menu_level1_hover_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$level1ActiveTextColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_sidebar_menu_level1_background'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_sidebar_menu_level1_background'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$level1BgColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_sidebar_menu_level1_hover_background'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_sidebar_menu_level1_hover_background'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$level1ActiveBgColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_sidebar_menu_level1_border_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_sidebar_menu_level1_border_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'wizard clr'),
	'sass'					  => array('name'=>'$level1BorderColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_sidebar_menu_level2_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_sidebar_menu_level2_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$level2TextColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_sidebar_menu_level2_hover_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_sidebar_menu_level2_hover_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$level2ActiveTextColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_sidebar_menu_level2_background'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_sidebar_menu_level2_background'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$level2BgColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_sidebar_menu_level2_hover_background'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_sidebar_menu_level2_hover_background'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$level2ActiveBgColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_sidebar_menu_level2_border_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_sidebar_menu_level2_border_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'wizard clr'),
	'sass'					  => array('name'=>'$level2BorderColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_sidebar_menu_level3_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_sidebar_menu_level3_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$level3TextColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_sidebar_menu_level3_hover_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_sidebar_menu_level3_hover_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$level3ActiveTextColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_sidebar_menu_level3_background'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_sidebar_menu_level3_background'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$level3BgColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_sidebar_menu_level3_hover_background'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_sidebar_menu_level3_hover_background'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$level3ActiveBgColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_sidebar_menu_level3_border_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_sidebar_menu_level3_border_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$level3BorderColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_sidebar_menu_font_family'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_sidebar_menu_font_family'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('tl_class'=>'w50','maxlength'=>255),
	'sass'					  => array('name'=>'$sidebarMenuFont', 'format' => 'value', 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_sidebar_menu_font_size'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_sidebar_menu_font_size'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('tl_class'=>'w50','maxlength'=>6),
	'sass'					  => array('name'=>'$sidebarMenuFontSize', 'format' => 'height', 'tl_class'=>'w50 clr'),
	'sql'                     => "varchar(6) NOT NULL default ''"
);


/**
 * Breadcrumb options
 */

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_breadcrumb_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_breadcrumb_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$breadcrumbColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_breadcrumb_background'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_breadcrumb_background'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$breadcrumbBackground', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_breadcrumb_separator'] = array
(
			'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_breadcrumb_separator'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'deafult'				  => '&rsaquo;',
			'eval'                    => array('nospace'=>true, 'tl_class'=>'w50','maxlength'=>6),
			'sql'                     => "varchar(6) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_breadcrumb_height'] = array
(
			'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_breadcrumb_height'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('nospace'=>true,'rgxp'=>'digit', 'tl_class'=>'w50','maxlength'=>6),
			'sass'					  => array('name'=>'$breadcrumbHeight', 'format' => 'height'),
			'sql'                     => "varchar(6) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_breadcrumb_font_size'] = array
(
			'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_breadcrumb_font_size'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('nospace'=>true,'rgxp'=>'digit', 'tl_class'=>'w50','maxlength'=>6),
			'sass'					  => array('name'=>'$breadcrumbFontSize', 'format' => 'height'),
			'sql'                     => "varchar(6) NOT NULL default ''"
);


/**
 * Headline settings
 */

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_headline_font_family'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['font_family'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sass'					  => array('name'=>'$headlineFont', 'format' => 'value'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_text_font_family'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_text_font_family'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50 clr'),
    'sass'					  => array('name'=>'$defaultFont', 'format' => 'value'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_headline_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['color'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sass'					  => array('name'=>'$headlineColor', 'format' => 'color'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_headline_text_transform'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['pro_headline_text_transform'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('none', 'uppercase','lowercase'),
    'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
    'sass'					  => array('name'=>'$headlineTextTransform', 'format' => 'value'),
	'sql'                     => "varchar(24) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_headline1_font_size'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['headline1_font_size'],
    'exclude'                 => true,
    'inputType'               => 'inputUnit',
    'options'                 => array('px', '%', 'em', 'rem', 'ex', 'pt', 'pc', 'in', 'cm', 'mm'),
    'eval'                    => array('includeBlankOption'=>true, 'rgxp'=>'digit_inherit', 'maxlength'=>20, 'tl_class'=>'w50 clr'),
	'sass'					  => array('name'=>'$headlineH1size', 'format' => 'unit'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_headline2_font_size'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['headline2_font_size'],
    'exclude'                 => true,
    'inputType'               => 'inputUnit',
    'options'                 => array('px', '%', 'em', 'rem', 'ex', 'pt', 'pc', 'in', 'cm', 'mm'),
    'eval'                    => array('includeBlankOption'=>true, 'rgxp'=>'digit_inherit', 'maxlength'=>20, 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$headlineH2size', 'format' => 'unit'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_headline3_font_size'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['headline3_font_size'],
    'exclude'                 => true,
    'inputType'               => 'inputUnit',
    'options'                 => array('px', '%', 'em', 'rem', 'ex', 'pt', 'pc', 'in', 'cm', 'mm'),
    'eval'                    => array('includeBlankOption'=>true, 'rgxp'=>'digit_inherit', 'maxlength'=>20, 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$headlineH3size', 'format' => 'unit'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_headline4_font_size'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['headline4_font_size'],
    'exclude'                 => true,
    'inputType'               => 'inputUnit',
    'options'                 => array('px', '%', 'em', 'rem', 'ex', 'pt', 'pc', 'in', 'cm', 'mm'),
    'eval'                    => array('includeBlankOption'=>true, 'rgxp'=>'digit_inherit', 'maxlength'=>20, 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$headlineH4size', 'format' => 'unit'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_headline5_font_size'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['headline5_font_size'],
    'exclude'                 => true,
    'inputType'               => 'inputUnit',
    'options'                 => array('px', '%', 'em', 'rem', 'ex', 'pt', 'pc', 'in', 'cm', 'mm'),
    'eval'                    => array('includeBlankOption'=>true, 'rgxp'=>'digit_inherit', 'maxlength'=>20, 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$headlineH5size', 'format' => 'unit'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_headline6_font_size'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['headline6_font_size'],
    'exclude'                 => true,
    'inputType'               => 'inputUnit',
    'options'                 => array('px', '%', 'em', 'rem', 'ex', 'pt', 'pc', 'in', 'cm', 'mm'),
    'eval'                    => array('includeBlankOption'=>true, 'rgxp'=>'digit_inherit', 'maxlength'=>20, 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$headlineH6size', 'format' => 'unit'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_headline1_margin'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['headline1_margin'],
    'exclude'                 => true,
    'inputType'               => 'trbl',
    'options'                 => array('px', '%', 'em', 'rem', 'ex', 'pt', 'pc', 'in', 'cm', 'mm'),
    'eval'                    => array('includeBlankOption'=>true, 'rgxp'=>'digit_auto_inherit', 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$headlineH1margin', 'format' => 'trbl'),
    'sql'                     => "varchar(128) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_headline2_margin'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['headline2_margin'],
    'exclude'                 => true,
    'inputType'               => 'trbl',
    'options'                 => array('px', '%', 'em', 'rem', 'ex', 'pt', 'pc', 'in', 'cm', 'mm'),
    'eval'                    => array('includeBlankOption'=>true, 'rgxp'=>'digit_auto_inherit', 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$headlineH2margin', 'format' => 'trbl'),
    'sql'                     => "varchar(128) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_headline3_margin'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['headline3_margin'],
    'exclude'                 => true,
    'inputType'               => 'trbl',
    'options'                 => array('px', '%', 'em', 'rem', 'ex', 'pt', 'pc', 'in', 'cm', 'mm'),
    'eval'                    => array('includeBlankOption'=>true, 'rgxp'=>'digit_auto_inherit', 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$headlineH3margin', 'format' => 'trbl'),
    'sql'                     => "varchar(128) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_headline4_margin'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['headline4_margin'],
    'exclude'                 => true,
    'inputType'               => 'trbl',
    'options'                 => array('px', '%', 'em', 'rem', 'ex', 'pt', 'pc', 'in', 'cm', 'mm'),
    'eval'                    => array('includeBlankOption'=>true, 'rgxp'=>'digit_auto_inherit', 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$headlineH4margin', 'format' => 'trbl'),
    'sql'                     => "varchar(128) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_headline5_margin'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['headline5_margin'],
    'exclude'                 => true,
    'inputType'               => 'trbl',
    'options'                 => array('px', '%', 'em', 'rem', 'ex', 'pt', 'pc', 'in', 'cm', 'mm'),
    'eval'                    => array('includeBlankOption'=>true, 'rgxp'=>'digit_auto_inherit', 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$headlineH5margin', 'format' => 'trbl'),
    'sql'                     => "varchar(128) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_themes4contao']['fields']['pro_headline6_margin'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['headline6_margin'],
    'exclude'                 => true,
    'inputType'               => 'trbl',
    'options'                 => array('px', '%', 'em', 'rem', 'ex', 'pt', 'pc', 'in', 'cm', 'mm'),
    'eval'                    => array('includeBlankOption'=>true, 'rgxp'=>'digit_auto_inherit', 'tl_class'=>'w50'),
	'sass'					  => array('name'=>'$headlineH6margin', 'format' => 'trbl'),
    'sql'                     => "varchar(128) NOT NULL default ''"
);