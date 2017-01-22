<?php

/**
 * themes4contao extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package themes4contao
 * @author Lukas Manka <support@themes4contao.com>
 * @license Commercial
 */

$this->loadDataContainer('tl_content');

/**
 * Extend the tl_layout palette
 */
$GLOBALS['TL_DCA']['tl_article']['palettes']['default'] = str_replace('author;', 'author;{row_legend},t4c_row_layout,t4c_row_height,t4c_row_full_height,t4c_row_padding,t4c_row_fontcolor,t4c_row_bg_type,t4c_add_row_overlay;{top_row_legend:hide},t4c_row_add_top_separator;{bottom_row_legend:hide},t4c_row_add_bottom_separator;', $GLOBALS['TL_DCA']['tl_article']['palettes']['default']);


/**
 * Add fields to tl_article
 */
 
$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_layout'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_layout'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('boxed', 'full_background', 'full_content', 'full_content_no_paddings'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_article']['ref_row_layout'],
    'eval'                    => array('tl_class'=>'w50 clr'),
    'sql'                     => "varchar(32) NOT NULL default ''"
); 

$GLOBALS['TL_DCA']['tl_article']['palettes']['__selector__'][] =  't4c_row_bg_type';
$GLOBALS['TL_DCA']['tl_article']['palettes']['__selector__'][] =  't4c_add_row_overlay';
$GLOBALS['TL_DCA']['tl_article']['palettes']['__selector__'][] =  't4c_row_overlay_type';
$GLOBALS['TL_DCA']['tl_article']['palettes']['__selector__'][] =  't4c_row_add_top_separator';
$GLOBALS['TL_DCA']['tl_article']['palettes']['__selector__'][] =  't4c_row_add_top_icon';
$GLOBALS['TL_DCA']['tl_article']['palettes']['__selector__'][] =  't4c_row_top_icon_type';
$GLOBALS['TL_DCA']['tl_article']['palettes']['__selector__'][] =  't4c_row_add_bottom_separator';
$GLOBALS['TL_DCA']['tl_article']['palettes']['__selector__'][] =  't4c_row_add_bottom_icon';
$GLOBALS['TL_DCA']['tl_article']['palettes']['__selector__'][] =  't4c_row_bottom_icon_type';


$GLOBALS['TL_DCA']['tl_article']['subpalettes']['t4c_row_bg_type_color']= 't4c_row_bgcolor';
$GLOBALS['TL_DCA']['tl_article']['subpalettes']['t4c_row_bg_type_image']= 't4c_row_image,t4c_row_bg_image_settings,t4c_row_bg_image_attachment,t4c_row_bg_image_position,t4c_row_bgcolor';
$GLOBALS['TL_DCA']['tl_article']['subpalettes']['t4c_row_bg_type_parallax']= 't4c_row_image,t4c_row_bg_parallax_speed,t4c_row_bg_image_parallax_settings';
$GLOBALS['TL_DCA']['tl_article']['subpalettes']['t4c_row_bg_type_slideshow']= 't4c_row_slideshow_images,t4c_row_slideshow_preload_images,t4c_row_slideshow_preload_timer,t4c_row_slideshow_preload_delay,t4c_row_slideshow_cover,t4c_row_slideshow_color,t4c_row_slideshow_horizontal_align,t4c_row_slideshow_vertical_align,t4c_row_slideshow_transition,t4c_row_slideshow_transition_duration,t4c_row_slideshow_animation';
$GLOBALS['TL_DCA']['tl_article']['subpalettes']['t4c_row_bg_type_video']= 't4c_row_video_mp4,t4c_row_video_webm,t4c_row_video_poster,t4c_row_video_youtube';
$GLOBALS['TL_DCA']['tl_article']['subpalettes']['t4c_add_row_overlay'] = 't4c_row_overlay_type,t4c_row_overlay_opacity,t4c_overlay_pattern';
$GLOBALS['TL_DCA']['tl_article']['subpalettes']['t4c_row_overlay_type_color'] = 't4c_row_overlay_color';
$GLOBALS['TL_DCA']['tl_article']['subpalettes']['t4c_row_overlay_type_gradient'] = 't4c_row_overlay_gradient_orientation,t4c_row_overlay_gradient_start,t4c_row_overlay_gradient_end';
$GLOBALS['TL_DCA']['tl_article']['subpalettes']['t4c_row_add_top_separator'] = 't4c_row_top_serparator_style,t4c_row_top_separator_height,t4c_row_top_separator_bgcolor,t4c_row_add_top_icon';
$GLOBALS['TL_DCA']['tl_article']['subpalettes']['t4c_row_add_top_icon'] = 't4c_row_top_icon_type';
$GLOBALS['TL_DCA']['tl_article']['subpalettes']['t4c_row_top_icon_type_icon'] = 't4c_row_top_icon,t4c_row_top_icon_size,t4c_row_top_icon_margin,t4c_row_top_icon_color,t4c_row_top_icon_bgcolor,t4c_row_top_icon_border_color,t4c_row_top_icon_padding,t4c_row_top_icon_border_width,t4c_row_top_icon_border_radius';
$GLOBALS['TL_DCA']['tl_article']['subpalettes']['t4c_row_top_icon_type_image'] = 't4c_row_top_icon_image_file';
$GLOBALS['TL_DCA']['tl_article']['subpalettes']['t4c_row_add_bottom_separator'] = 't4c_row_bottom_serparator_style,t4c_row_bottom_separator_height,t4c_row_bottom_separator_bgcolor,t4c_row_add_bottom_icon';
$GLOBALS['TL_DCA']['tl_article']['subpalettes']['t4c_row_add_bottom_icon'] = 't4c_row_bottom_icon_type';
$GLOBALS['TL_DCA']['tl_article']['subpalettes']['t4c_row_bottom_icon_type_icon'] = 't4c_row_bottom_icon,t4c_row_bottom_icon_size,t4c_row_bottom_icon_margin,t4c_row_bottom_icon_color,t4c_row_bottom_icon_bgcolor,t4c_row_bottom_icon_padding,t4c_row_bottom_icon_border_color,t4c_row_bottom_icon_border_width,t4c_row_bottom_icon_border_radius';
$GLOBALS['TL_DCA']['tl_article']['subpalettes']['t4c_row_bottom_icon_type_image'] = 't4c_row_bottom_icon_image_file';

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_bg_type'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_bg_type'],
	'default'                 => 'default',
	'exclude'                 => true,
	'filter'                  => true,
	'inputType'               => 'select',
	'options'       		 => array('no_background', 'color', 'image', 'parallax', 'slideshow', 'video'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_article']['ref_t4c_row_bg_type'],
	'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'w50 clr '),
	'sql'                     => "varchar(12) NOT NULL default ''"
);



$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_full_height'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_full_height'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''"
);
 
$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_height'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_height'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'                    => array('maxlength'=>10, 'rgxp'=>'digit', 'tl_class'=>'w50 clr'),
    'sql'                     => "varchar(10) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_bgcolor'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_bgcolor'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_fontcolor'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_fontcolor'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_image'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_image'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes'], 'tl_class'=>'clr'),
    'sql'                     => "binary(16) NULL"
);
 
$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_bg_image_settings'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_bg_image_settings'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('', 'cover', 'contain', 'repeat', 'repeat-x', 'repeat-y', 'no-repeat'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_article']['ref_t4c_row_bg_image_settings'],
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(10) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_bg_image_parallax_settings'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_bg_image_settings'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('cover', 'contain'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_article']['ref_t4c_row_bg_image_settings'],
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(10) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_bg_image_attachment'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_bg_image_attachment'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('', 'fixed', 'scroll'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_article']['ref_t4c_row_bg_image_attachment'],
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_bg_image_position'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_bg_image_position'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('', 'Center Center', 'Left Top', 'Right Top', 'Left Bottom', 'Right Bottom', 'Left Center', 'Right Center', 'Center Top', 'Center Bottom'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_article']['ref_t4c_row_bg_image_position'],
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_bg_parallax_speed'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_bg_parallax_speed'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'default'				  => '0.5',
	'eval'                    => array('maxlength'=>4, 'rgxp'=>'digit', 'tl_class'=>'w50'),
    'sql'                     => "varchar(4) NOT NULL default '0.5'"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_slideshow_images'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_slideshow_images'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('multiple'=>true, 'fieldType'=>'checkbox', 'orderField'=>'t4c_orderSRC', 'files'=>true, 'mandatory'=>true, 'tl_class'=>'long clr'),
    'sql'                     => "blob NULL",
	'load_callback' => array
			(
				array('tl_content', 'setMultiSrcFlags')
			)
);
$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_orderSRC'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['orderSRC'],
	'sql'                     => "blob NULL"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_slideshow_preload_images'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_slideshow_preload_images'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50 m12'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_slideshow_preload_timer'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_slideshow_preload_timer'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50 m12'),
    'sql'                     => "char(1) NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_slideshow_preload_delay'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_slideshow_preload_delay'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'default'				  => '5000',
	'eval'                    => array('maxlength'=>4, 'rgxp'=>'digit', 'tl_class'=>'w50'),
    'sql'                     => "smallint(6) unsigned NOT NULL default '5000'"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_slideshow_cover'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_slideshow_cover'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50 m12'),
    'sql'                     => "char(1) NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_slideshow_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_slideshow_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_slideshow_horizontal_align'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_slideshow_horizontal_align'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('center', 'top', 'right', 'bottom', 'left'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_article']['ref_t4c_align'],
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_slideshow_vertical_align'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_slideshow_vertical_align'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('center', 'top', 'right', 'bottom', 'left'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_article']['ref_t4c_align'],
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_slideshow_transition'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_slideshow_transition'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('fade','fade2','slideLeft','slideLeft2','slideRight','slideRight2','slideUp','slideUp2','slideDown','slideDown2','zoomIn','zoomIn2','zoomOut','zoomOut2','swirlLeft','swirlLeft2','swirlRight','swirlRight2','burn','burn2','blur','blur2','flash','flash2','random'),
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_slideshow_transition_duration'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_slideshow_transition_duration'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'default'				  => '1000',
	'eval'                    => array('maxlength'=>4, 'rgxp'=>'digit', 'tl_class'=>'w50'),
    'sql'                     => "smallint(6) unsigned NOT NULL default '1000'"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_slideshow_animation'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_slideshow_animation'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('','kenburns','kenburnsUp','kenburnsDown','kenburnsRight','kenburnsLeft','kenburnsUpLeft','kenburnsUpRight','kenburnsDownLeft','kenburnsDownRight','random'),
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(16) NOT NULL default ''"
);


$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_video_mp4'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_video_mp4'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>'mp4', 'tl_class'=>'clr'),
    'sql'                     => "binary(16) NULL"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_video_webm'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_video_webm'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>'webm', 'tl_class'=>'clr'),
    'sql'                     => "binary(16) NULL"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_video_poster'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_video_poster'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes'], 'tl_class'=>'clr'),
    'sql'                     => "binary(16) NULL"
);


$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_video_youtube'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_video_youtube'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'default'				  => '',
	'eval'                    => array('maxlength'=>16, 'tl_class'=>'w50'),
    'sql'                     => "varchar(16) NOT NULL default ''"
);


$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_add_row_overlay'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_add_row_overlay'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'long m12 clr', 'submitOnChange'=>true),
	'save_callback' 	  	  => array(array('themes4contao_article', 'resetFields')),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_overlay_type'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_overlay_type'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'reference'               => &$GLOBALS['TL_LANG']['tl_article']['ref_t4c_overlay'],
    'options'                 => array('','color','gradient'),
    'eval'                    => array('tl_class'=>'w50', 'submitOnChange'=>true),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_overlay_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_overlay_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_overlay_gradient_orientation'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_overlay_gradient_orientation'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'reference'               => &$GLOBALS['TL_LANG']['tl_article']['ref_t4c_overlay_gradient_orientation'],
    'options'                 => array('vertical','horizontal','left_top','left_bottom','radial'),
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_overlay_gradient_start'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_overlay_gradient_start'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_overlay_gradient_end'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_overlay_gradient_end'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_overlay_pattern'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_overlay_pattern'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes'], 'tl_class'=>'clr'),
    'sql'                     => "binary(16) NULL"
);


$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_overlay_opacity'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_overlay_opacity'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'default'				  => '0.6',
	'eval'                    => array('maxlength'=>4, 'tl_class'=>'w50'),
    'sql'                     => "varchar(64) NOT NULL default '0.6'"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_add_top_separator'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_add_top_separator'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'long m12 clr', 'submitOnChange'=>true),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_top_serparator_style'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_serparator_style'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'reference'               => &$GLOBALS['TL_LANG']['tl_article']['ref_t4c_separator_style'],
    'options'                 => array('pro-style-arrow','pro-style-bigTriangle','pro-style-bigTriangle-left','pro-style-bigTriangle-right','pro-style-clouds','pro-style-curve','pro-style-curve-left','pro-style-curve-right','pro-style-half-circle','pro-style-puzzle','pro-style-rounded-in','pro-style-tilt-left','pro-style-tilt-right','pro-style-smallTriangle','pro-style-triangles','pro-style-waves'),    
	'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_top_separator_height'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_separator_height'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'default'				  => '100',
	'eval'                    => array('maxlength'=>8, 'rgxp'=>'digit', 'tl_class'=>'w50'),
    'sql'                     => "smallint(6) unsigned NOT NULL default '100'"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_top_separator_bgcolor'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_separator_bgcolor'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_add_top_icon'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_add_top_icon'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50 m12', 'submitOnChange'=>true),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_top_icon_type'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_icon_type'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'reference'               => &$GLOBALS['TL_LANG']['tl_article']['ref_t4c_separator_icon_type'],
    'options'                 => array('','icon','image'),    
	'eval'                    => array('tl_class'=>'w50', 'submitOnChange'=>true),
    'sql'                     => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_top_icon'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_icon'],
    'exclude'                 => true,
    'inputType'               => 'iconpicker',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_top_icon_size'] = array
(
			'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_icon_size'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>10),
			'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_top_icon_margin'] = array
(
			'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_icon_margin'],
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>10),
			'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_top_icon_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_icon_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_top_icon_padding'] = array
(
			'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_icon_padding'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>10),
			'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_top_icon_bgcolor'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_icon_bgcolor'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_top_icon_border_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_icon_border_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_top_icon_border_width'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_icon_border_width'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>10),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_top_icon_border_radius'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_icon_border_radius'],
	'exclude'                 => true,
	'inputType'               => 'trbl',
	'options'                 => array('px','%'),
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(128) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_top_icon_image_file'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_top_icon_image_file'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes'], 'tl_class'=>'clr'),
    'sql'                     => "binary(16) NULL"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_add_bottom_separator'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_add_bottom_separator'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'long m12 clr', 'submitOnChange'=>true),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_bottom_serparator_style'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_serparator_style'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'reference'               => &$GLOBALS['TL_LANG']['tl_article']['ref_t4c_separator_style'],
    'options'                 => array('pro-style-arrow','pro-style-bigTriangle','pro-style-bigTriangle-left','pro-style-bigTriangle-right','pro-style-clouds','pro-style-curve','pro-style-curve-left','pro-style-curve-right','pro-style-half-circle','pro-style-puzzle','pro-style-rounded-in','pro-style-tilt-left','pro-style-tilt-right','pro-style-smallTriangle','pro-style-triangles','pro-style-waves'),    
	'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_bottom_separator_height'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_separator_height'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'default'				  => '100',
	'eval'                    => array('maxlength'=>8, 'rgxp'=>'digit', 'tl_class'=>'w50'),
    'sql'                     => "smallint(6) unsigned NOT NULL default '100'"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_bottom_separator_bgcolor'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_separator_bgcolor'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_add_bottom_icon'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_add_bottom_icon'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'long m12 clr', 'submitOnChange'=>true),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_bottom_icon_type'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_icon_type'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'reference'               => &$GLOBALS['TL_LANG']['tl_article']['ref_t4c_separator_icon_type'],
    'options'                 => array('','icon','image'),    
	'eval'                    => array('tl_class'=>'w50', 'submitOnChange'=>true),
    'sql'                     => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_bottom_icon'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_icon'],
    'exclude'                 => true,
    'inputType'               => 'iconpicker',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_bottom_icon_size'] = array
(
			'label'                   => &$GLOBALS['TL_DCA']['tl_article']['t4c_row_bottom_icon_size'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>10),
			'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_bottom_icon_margin'] = array
(
			'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_icon_margin'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>10),
			'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_bottom_icon_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_icon_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_bottom_icon_padding'] = array
(
			'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_icon_padding'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>10),
			'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_bottom_icon_bgcolor'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_icon_bgcolor'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_bottom_icon_border_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_icon_border_color'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_bottom_icon_border_width'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_icon_border_width'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>10),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_bottom_icon_border_radius'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_icon_border_radius'],
	'exclude'                 => true,
	'inputType'               => 'trbl',
	'options'                 => array('px','%'),
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(128) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_bottom_icon_image_file'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_bottom_icon_image_file'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes'], 'tl_class'=>'clr'),
    'sql'                     => "binary(16) NULL"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['t4c_row_padding'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['t4c_row_padding'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('multiple'=>true, 'size'=>2, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50 clr'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

class themes4contao_article extends Backend{
	
	
	/**
	 * Reset Fields
	 * @param integer
	 * @param \DataContainer
	 */
	public function resetFields($varValue,$dc)
	{
		
		if ($varValue == ''){
			switch ($dc->field){
				case 't4c_add_row_overlay':
					$this->Database->prepare("UPDATE tl_article SET t4c_row_overlay_type='' WHERE id=?")
						   ->execute($dc->id);
				break;
				
				case 't4c_row_add_top_icon':
					$this->Database->prepare("UPDATE tl_article SET t4c_row_top_icon_type='' WHERE id=?")
						   ->execute($dc->id);
				break;
				
				case 't4c_row_add_bottom_icon':
					$this->Database->prepare("UPDATE tl_article SET t4c_row_bottom_icon_type='' WHERE id=?")
						   ->execute($dc->id);
				break;
			
			}
		}
		return $varValue;
	}
}


?>