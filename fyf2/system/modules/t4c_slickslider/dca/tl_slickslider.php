<?php

/**
 * MegaMenu extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package t4cslickslider
 * @author  Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */


/**
 * Load tl_content language file
 */
System::loadLanguageFile('tl_content');


/**
 * Table tl_slickslider
 */
$GLOBALS['TL_DCA']['tl_slickslider'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary'			)
		)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 1,
			'fields'                  => array('title'),
			'panelLayout'             => 'filter;sort,search,limit'
		),
		
		'label' => array
		(
			'fields'                  => array('title'),
			'format'                  => '%s'
		),
		
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset()" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_slickslider']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_slickslider']['copy'],
				'href'                => 'act=paste&amp;mode=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_slickslider']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_slickslider']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'default'                     => '{title_legend},
										  title;
										  {settings_legend},
										  t4c_slick_accessibility,
										  t4c_slick_autoplay,
										  t4c_slick_autoplay_speed,
										  t4c_slick_centermode,
										  t4c_slick_autoplay_speed,
										  t4c_slick_center_padding,
										  t4c_slick_css_ease,
										  t4c_slick_dots,
										  t4c_slick_dots_class,
										  t4c_slick_draggable,
										  t4c_slick_edge_friction,
										  t4c_slick_fade,
										  t4c_slick_arrows,
										  t4c_slick_prev_arrow,
										  t4c_slick_next_arrow,
										  t4c_slick_infinite,
										  t4c_slick_initial_slide,
										  t4c_slick_lazyload,
										  t4c_slick_pause_hover,
										  t4c_slick_pause_hover_dots,
										  t4c_slick_respond_to,
										  t4c_slick_slide,
										  t4c_slick_slide_show,
										  t4c_slick_slide_scroll,
										  t4c_slick_speed,
										  t4c_slick_swipe,
										  t4c_slick_swipe_to_slide,
										  t4c_slick_touch_move,
										  t4c_slick_touch_threshold,
										  t4c_slick_variable_width,
										  t4c_slick_vertical,
										  t4c_slick_rtl,
										  t4c_slick_animate;
										  
										  {slick_responsive_setting_legend:hide},
										  t4c_slick_slide_show_tablet,
										  t4c_slick_slide_scroll_tablet,
										  t4c_slick_arrows_tablet,
										  t4c_slick_dots_tablet,
										  t4c_slick_slide_show_mobile,
										  t4c_slick_slide_scroll_mobile,
										  t4c_slick_arrows_mobile,
										  t4c_slick_dots_mobile;
										  
										  {slick_navigation_settings:hide},
										  t4c_slick_arrow_style,
										  t4c_slick_arrow_color,
										  t4c_slick_arrow_size,
										  t4c_slick_dot_style,
										  t4c_slick_dot_size,
										  t4c_slick_dot_border,
										  t4c_slick_dot_color,
										  t4c_slick_dot_border_color,
										  t4c_slick_active_dot_color,
										  t4c_slick_active_dot_border_color;'
	),

	// Fields
	'fields' => array
	(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		
		'title' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_title'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
						 
		't4c_slick_accessibility' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_accessibility'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default '1'"
		),
		
		't4c_slick_autoplay' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_autoplay'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		
		't4c_slick_autoplay_speed'	  => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_autoplay_speed'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>6, 'tl_class'=>'w50', 'mandatory' => true),
			'sql'                     => "varchar(6) NOT NULL default '3000'"
		),
		
		't4c_slick_centermode' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_centermode'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		
		't4c_slick_autoplay_speed' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_autoplay_speed'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>6, 'tl_class'=>'w50', 'mandatory' => true),
			'sql'                     => "varchar(6) NOT NULL default '3000'"
		),
		
		't4c_slick_center_padding' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_center_padding'],
			'exclude'                 => true,
			'inputType'               => 'inputUnit',
			'options'                 => array('px', '%'),
			'eval'                    => array('maxlength'=>128, 'tl_class'=>'w50', 'includeBlankOption'=>true),
			'sql'                     => "varchar(128) NOT NULL default ''"
		),
		
		't4c_slick_css_ease' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_css_ease'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('linear','ease','ease-in','ease-out','ease-in-out'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_slickslider']['ref_t4c_slick_css_ease'],
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(12) NOT NULL default ''"
		),
		
		't4c_slick_dots' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_dots'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default '1'"
		),
		
		't4c_slick_dots_class' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_dots_class'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default 'slick-dots'"
		),
		
		't4c_slick_draggable' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_draggable'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		
		't4c_slick_edge_friction' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_edge_friction'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>6, 'tl_class'=>'w50', 'maxval' => 1, 'minval' => 0),
			'sql'                     => "varchar(6) NOT NULL default '0.15'"
		),
		
		't4c_slick_fade' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_fade'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		
		't4c_slick_arrows' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_arrows'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
				
		't4c_slick_infinite' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_infinite'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default '1'"
		),
		
		't4c_slick_initial_slide' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_initial_slide'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>4, 'tl_class'=>'w50', 'rgxp'=>'digit'),
			'sql'                     => "varchar(4) NOT NULL default '0'"
		),
		
		't4c_slick_lazyload' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_lazyload'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('ondemand','progressive'),
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(11) NOT NULL default ''"
		),
		
		't4c_slick_pause_hover' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_pause_hover'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default '1'"
		),
		
		't4c_slick_pause_hover_dots' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_pause_hover_dots'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default '1'"
		),
		
		't4c_slick_respond_to' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_respond_to'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('window','slider','min'),
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(6) NOT NULL default ''"
		),
		
		
		't4c_slick_slide' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_slide'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		
		't4c_slick_slide_show' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_slide_show'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>4, 'tl_class'=>'w50','minval' => 1, 'rgxp' => 'digit'),
			'sql'                     => "varchar(4) NOT NULL default '4'"
		),
		
		't4c_slick_slide_scroll' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_slide_scroll'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>4, 'tl_class'=>'w50','minval' => 1, 'rgxp' => 'digit'),
			'sql'                     => "varchar(4) NOT NULL default '1'"
		),
		
		't4c_slick_speed' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_speed'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>6, 'tl_class'=>'w50','minval' => 0, 'rgxp' => 'digit'),
			'sql'                     => "varchar(6) NOT NULL default '300'"
		),
		
		't4c_slick_swipe' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_swipe'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default '1'"
		),
		
		't4c_slick_swipe_to_slide' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_swipe_to_slide'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		
		't4c_slick_touch_move' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_touch_move'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default '1'"
		),
		
		't4c_slick_touch_threshold' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_touch_threshold'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>4, 'tl_class'=>'w50'),
			'sql'                     => "varchar(4) NOT NULL default '5'"
		),
		
		't4c_slick_variable_width' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_variable_width'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		
		't4c_slick_vertical' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_vertical'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		
		't4c_slick_rtl' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_rtl'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		
		't4c_slick_animate' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_animate'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default '1'"
		),
		
		't4c_slick_slide_show_tablet' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_slide_show'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>3, 'tl_class'=>'w50','minval' => 1, 'rgxp' => 'digit', 'mandatory' => true),
			'sql'                     => "varchar(3) NOT NULL default '2'"
		),
		
		't4c_slick_slide_scroll_tablet' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_slide_scroll'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>3, 'tl_class'=>'w50','minval' => 1, 'rgxp' => 'digit', 'mandatory' => true),
			'sql'                     => "varchar(3) NOT NULL default '1'"
		),
		
		't4c_slick_arrows_tablet' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_arrows'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		
		't4c_slick_dots_tablet' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_dots'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default '1'"
		),
		
		't4c_slick_slide_show_mobile' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_slide_show'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>10, 'tl_class'=>'w50','minval' => 1, 'rgxp' => 'digit','mandatory' => true),
			'sql'                     => "varchar(3) NOT NULL default '1'"
		),
		
		't4c_slick_slide_scroll_mobile' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_slide_scroll'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>10, 'tl_class'=>'w50','minval' => 1, 'rgxp' => 'digit','mandatory' => true),
			'sql'                     => "varchar(3) NOT NULL default '1'"
		),
		
		't4c_slick_arrows_mobile' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_arrows'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		
		't4c_slick_dots_mobile' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_dots'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default '1'"
		),
		
		't4c_slick_arrow_style' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_arrow_style'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('1','2','3','4','5','6','7'),
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(1) NOT NULL default ''"
		),
		
		't4c_slick_arrow_color' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_arrow_color'],
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		
		't4c_slick_arrow_size' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_arrow_size'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>4, 'tl_class'=>'w50','minval' => 0, 'rgxp' => 'digit'),
			'sql'                     => "varchar(4) NOT NULL default '24'"
		),
		
		't4c_slick_dot_style' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_dot_style'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('dots','squares'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_slickslider']['ref_t4c_slick_dot_style'],
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(7) NOT NULL default ''"
		),
		
		't4c_slick_dot_size' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_dot_size'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>3, 'tl_class'=>'w50','minval' => 0, 'rgxp' => 'digit'),
			'sql'                     => "varchar(3) NOT NULL default '8'"
		),
		
		't4c_slick_dot_border' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_dot_border'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>3, 'tl_class'=>'w50','minval' => 0, 'rgxp' => 'digit'),
			'sql'                     => "varchar(3) NOT NULL default '2'"
		),
		
		't4c_slick_dot_color' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_dot_color'],
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		
		't4c_slick_dot_border_color' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_dot_border_color'],
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		
		't4c_slick_active_dot_color' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_active_dot_color'],
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		
		't4c_slick_active_dot_border_color' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_slickslider']['t4c_slick_active_dot_border_color'],
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		)

	)
);

class tl_slickslider extends Backend
{
	/**
	 * Get all menus and return them as array
	 *
	 * @return array
	 */
	public function getMenus()
	{
		
		$arrMenus = array();
		$obMenus = $this->Database->execute("SELECT * FROM tl_slickslider ORDER BY title");

		while ($obMenus->next())
		{
			$arrMenus[$obMenus->id] = $obMenus->title . ' (ID ' . $obMenus->id . ')';
		}

		return $arrMenus;
	}

}

