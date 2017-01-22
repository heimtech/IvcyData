<?php

/**
 * cfg_slider_revolution extension for Contao Open Source CMS
 *
 * Copyright (C) 2011-2015 Codefog
 *
 * @package cfg_slider_revolution
 * @author  Codefog <http://codefog.pl>
 * @author  Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @license Commercial
 */

/**
 * Load the tl_cfg_slider_revolution_slide language file
 */
\System::loadLanguageFile('tl_cfg_slider_revolution_slide');

/**
 * Adjust the tl_content table for slider revolution
 */
if (\Input::get('do') == 'cfg_slider_revolution') {
    $GLOBALS['TL_DCA']['tl_content']['config']['ptable']                = 'tl_cfg_slider_revolution_slide';
    $GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][]     = array('Codefog\SliderRevolution\ContentDca', 'initLoopSubpalettes');
    $GLOBALS['TL_DCA']['tl_content']['list']['sorting']['headerFields'] = array('name', 'tstamp');

    // Add button palette
    $GLOBALS['TL_DCA']['tl_content']['palettes']['cfg_slider_revolution_button'] = '
    {type_legend},type,headline;
    {text_legend},html;
    {protected_legend:hide},protected;
    {expert_legend:hide},guests,cssID,space;
    {invisible_legend:hide},invisible,start,stop';

    // Add HTML palette
    $GLOBALS['TL_DCA']['tl_content']['palettes']['cfg_slider_revolution_html'] = '
    {type_legend},type,headline;
    {text_legend},html;
    {protected_legend:hide},protected;
    {expert_legend:hide},guests,cssID,space;
    {invisible_legend:hide},invisible,start,stop';

    // Add image palette
    $GLOBALS['TL_DCA']['tl_content']['palettes']['cfg_slider_revolution_image'] = '
    {type_legend},type,headline;
    {source_legend},singleSRC,cfg_slider_revolution_ww,cfg_slider_revolution_hh;
    {protected_legend:hide},protected;
    {expert_legend:hide},guests,cssID,space;
    {invisible_legend:hide},invisible,start,stop';

    // Add video palette
    $GLOBALS['TL_DCA']['tl_content']['palettes']['cfg_slider_revolution_video'] = '
    {type_legend},type,headline;
    {cfg_slider_revolution_video_legend},
        cfg_slider_revolution_video_forcerewind,
        cfg_slider_revolution_video_volume,
        cfg_slider_revolution_video_videorate,
        cfg_slider_revolution_video_videowidth,
        cfg_slider_revolution_video_videoheight,
        cfg_slider_revolution_video_videocontrols,
        cfg_slider_revolution_video_videostartat,
        cfg_slider_revolution_video_videoendat,
        cfg_slider_revolution_video_videoloop,
        cfg_slider_revolution_video_autoplay,
        cfg_slider_revolution_video_forceCover,
        cfg_slider_revolution_video_aspectratio,
        cfg_slider_revolution_video_nextslideatend,
        cfg_slider_revolution_video_ytid,
        cfg_slider_revolution_video_vimeoid,
        cfg_slider_revolution_video_files,
        cfg_slider_revolution_video_videoattributes,
        cfg_slider_revolution_video_videoposter,
        cfg_slider_revolution_video_posterOnMObile,
        cfg_slider_revolution_video_stopallvideos,
        cfg_slider_revolution_video_showcoveronpause;
    {protected_legend:hide},protected;
    {expert_legend:hide},guests,cssID,space;
    {invisible_legend:hide},invisible,start,stop';

    // Subpalettes
    $GLOBALS['TL_DCA']['tl_content']['subpalettes']['cfg_slider_revolution_loop_pendulum']  = 'cfg_slider_revolution_loop_easing,cfg_slider_revolution_loop_startdeg,cfg_slider_revolution_loop_enddeg,cfg_slider_revolution_loop_speed,cfg_slider_revolution_loop_origin';
    $GLOBALS['TL_DCA']['tl_content']['subpalettes']['cfg_slider_revolution_loop_rotate']    = 'cfg_slider_revolution_loop_easing,cfg_slider_revolution_loop_startdeg,cfg_slider_revolution_loop_enddeg,cfg_slider_revolution_loop_speed,cfg_slider_revolution_loop_origin';
    $GLOBALS['TL_DCA']['tl_content']['subpalettes']['cfg_slider_revolution_loop_slideloop'] = 'cfg_slider_revolution_loop_easing,cfg_slider_revolution_loop_xs,cfg_slider_revolution_loop_ys,cfg_slider_revolution_loop_xe,cfg_slider_revolution_loop_ye,cfg_slider_revolution_loop_speed';
    $GLOBALS['TL_DCA']['tl_content']['subpalettes']['cfg_slider_revolution_loop_pulse']     = 'cfg_slider_revolution_loop_easing,cfg_slider_revolution_loop_angle,cfg_slider_revolution_loop_radius,cfg_slider_revolution_loop_origin,cfg_slider_revolution_loop_speed';
    $GLOBALS['TL_DCA']['tl_content']['subpalettes']['cfg_slider_revolution_loop_wave']      = 'cfg_slider_revolution_loop_easing,cfg_slider_revolution_loop_zoomstart,cfg_slider_revolution_loop_zoomend,cfg_slider_revolution_loop_speed';

    // Add the layer settings
    foreach ($GLOBALS['TL_DCA']['tl_content']['palettes'] as $k => $v) {
        if ($k == '__selector__') {
            continue;
        }

        $GLOBALS['TL_DCA']['tl_content']['palettes'][$k] = $v . ';
            {cfg_slider_revolution_legend},
            cfg_slider_revolution_start,
            cfg_slider_revolution_end,
            cfg_slider_revolution_x,
            cfg_slider_revolution_y,
            cfg_slider_revolution_hoffset,
            cfg_slider_revolution_voffset,
            cfg_slider_revolution_responsive_offset,
            cfg_slider_revolution_actions;

            {cfg_slider_revolution_style_legend:hide},
            cfg_slider_revolution_style,
            cfg_slider_revolution_class,
            cfg_slider_revolution_width,
            cfg_slider_revolution_height,
            cfg_slider_revolution_whitespace,
            cfg_slider_revolution_lineheight,
            cfg_slider_revolution_fontsize,
            cfg_slider_revolution_fontweight,
            cfg_slider_revolution_color,
            cfg_slider_revolution_basealign,
            cfg_slider_revolution_customStyle;

            {cfg_slider_revolution_basic_animations_legend:hide},
            cfg_slider_revolution_transform_in,
            cfg_slider_revolution_transform_out;

            {cfg_slider_revolution_advanced_animations_legend:hide},
            cfg_slider_revolution_transform_idle,
            cfg_slider_revolution_transform_hover,
            cfg_slider_revolution_style_hover;

            {cfg_slider_revolution_loops_legend:hide},
            cfg_slider_revolution_loop_type;';
    }
}

/**
 * Add the slider revolution palette
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['cfg_slider_revolution'] = '{type_legend},type,headline;{source_legend},cfg_slider_revolution;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

/**
 * Add fields to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'foreignKey'              => 'tl_cfg_slider_revolution.name',
    'eval'                    => array('mandatory'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
    'sql'                     => "int(10) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_ww'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_ww'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>32, 'helpwizard'=>true, 'tl_class'=>'w50'),
    'explain'                 => 'cfg_slider_revolution.layer_ww',
    'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_hh'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_hh'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>32, 'helpwizard'=>true, 'tl_class'=>'w50'),
    'explain'                 => 'cfg_slider_revolution.layer_hh',
    'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_start'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_start'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'digit', 'maxlength'=>10, 'tl_class'=>'w50'),
    'sql'                     => "varchar(10) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_end'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_end'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'digit', 'maxlength'=>10, 'tl_class'=>'w50'),
    'sql'                     => "varchar(10) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_style'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_style'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => \Codefog\SliderRevolution\SlideDca::getSliderOptions('caption_styles'),
    'eval'                    => array('includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
    'sql'                     => "varchar(128) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_class'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_class'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>128, 'tl_class'=>'w50'),
    'sql'                     => "varchar(128) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_x'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_x'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('mandatory'=>true, 'maxlength'=>8, 'helpwizard'=>true, 'tl_class'=>'w50'),
    'explanation'             => 'cfg_slider_revolution.layer_x',
    'sql'                     => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_y'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_y'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('mandatory'=>true, 'maxlength'=>8, 'helpwizard'=>true, 'tl_class'=>'w50'),
    'explanation'             => 'cfg_slider_revolution.layer_y',
    'sql'                     => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_hoffset'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_hoffset'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>32, 'helpwizard'=>true, 'tl_class'=>'w50'),
    'explanation'             => 'cfg_slider_revolution.layer_hoffset',
    'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_voffset'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_voffset'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>32, 'helpwizard'=>true, 'tl_class'=>'w50'),
    'explanation'             => 'cfg_slider_revolution.layer_voffset',
    'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_width'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_width'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>32, 'helpwizard'=>true, 'tl_class'=>'w50'),
    'explanation'             => 'cfg_slider_revolution.layer_width',
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_height'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_height'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>32, 'helpwizard'=>true, 'tl_class'=>'w50'),
    'explanation'             => 'cfg_slider_revolution.layer_height',
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_whitespace'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_whitespace'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>32, 'helpwizard'=>true, 'tl_class'=>'w50'),
    'explanation'             => 'cfg_slider_revolution.layer_whitespace',
    'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_lineheight'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_lineheight'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>32, 'helpwizard'=>true, 'tl_class'=>'w50'),
    'explanation'             => 'cfg_slider_revolution.layer_lineheight',
    'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_fontsize'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_fontsize'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>32, 'helpwizard'=>true, 'tl_class'=>'w50'),
    'explanation'             => 'cfg_slider_revolution.layer_fontsize',
    'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_fontweight'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_fontweight'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>32, 'helpwizard'=>true, 'tl_class'=>'w50'),
    'explanation'             => 'cfg_slider_revolution.layer_fontweight',
    'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_color'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_color'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>64, 'helpwizard'=>true, 'tl_class'=>'w50'),
    'explanation'             => 'cfg_slider_revolution.layer_color',
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_basealign'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_basealign'],
    'default'                 => 'grid',
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('grid', 'slide'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_basealign'],
    'eval'                    => array('helpwizard'=>true, 'tl_class'=>'w50'),
    'sql'                     => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_responsive_offset'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_responsive_offset'],
    'default'                 => 1,
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('helpwizard'=>true, 'tl_class'=>'clr'),
    'explanation'             => 'cfg_slider_revolution.layer_responsive_offset',
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_actions'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_actions'],
    'exclude'                 => true,
    'inputType'               => 'textarea',
    'eval'                    => array('preserveTags'=>true, 'decodeEntities'=>true, 'helpwizard'=>true, 'class'=>'monospace', 'rte'=>'ace|javascript', 'tl_class'=>'clr'),
    'explanation'             => 'cfg_slider_revolution.layer_actions',
    'sql'                     => "text NULL"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_transform_idle'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_idle'],
    'exclude'                 => true,
    'inputType'               => 'cfg_slider_revolution_data',
    'eval'                    => array
    (
        'cfg_slider_revolution_fields' => array('o', 'sX', 'sY', 'skX', 'skY', 'rX', 'rY', 'rZ', 'z'),
        'cfg_slider_revolution_labels' => $GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_idle'],
        'tl_class'                     => 'clr'
    ),
    'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_transform_hover'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_hover'],
    'exclude'                 => true,
    'inputType'               => 'cfg_slider_revolution_data',
    'explanation'             => 'cfg_slider_revolution.easing',
    'eval'                    => array
    (
        'cfg_slider_revolution_fields' => array('o', 'sX', 'sY', 'skX', 'skY', 'rX', 'rY', 'rZ', 'z', 's', 'e'),
        'cfg_slider_revolution_labels' => $GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_hover'],
        'helpwizard'                   => true,
        'tl_class'                     => 'clr'
    ),
    'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_style_hover'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_style_hover'],
    'exclude'                 => true,
    'inputType'               => 'cfg_slider_revolution_data',
    'eval'                    => array
    (
        'cfg_slider_revolution_fields' => array('c', 'td', 'bg', 'bc', 'bs', 'bw', 'br'),
        'cfg_slider_revolution_labels' => $GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_style'],
        'tl_class'                     => 'clr'
    ),
    'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_transform_in'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_in'],
    'exclude'                 => true,
    'inputType'               => 'cfg_slider_revolution_data',
    'explanation'             => 'cfg_slider_revolution.transform_easing',
    'eval'                    => array
    (
        'cfg_slider_revolution_menu'   => \Codefog\SliderRevolution\SlideDca::getSliderOptions('animations_in'),
        'cfg_slider_revolution_fields' => array('x', 'y', 'z', 'o', 'sX', 'sY', 'skX', 'skY', 'rX', 'rY', 'rZ', 's', 'e', 'mX', 'mY', 'split', 'splitDelay'),
        'cfg_slider_revolution_labels' => $GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_in'],
        'helpwizard'                   => true,
        'tl_class'                     => 'clr'
    ),
    'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_transform_out'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_out'],
    'exclude'                 => true,
    'inputType'               => 'cfg_slider_revolution_data',
    'explanation'             => 'cfg_slider_revolution.transform_easing',
    'eval'                    => array
    (
        'cfg_slider_revolution_menu'   => \Codefog\SliderRevolution\SlideDca::getSliderOptions('animations_out'),
        'cfg_slider_revolution_fields' => array('x', 'y', 'z', 'o', 'sX', 'sY', 'skX', 'skY', 'rX', 'rY', 'rZ', 's', 'e', 'mX', 'mY', 'split', 'splitDelay'),
        'cfg_slider_revolution_labels' => $GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_transform_out'],
        'helpwizard'                   => true,
        'tl_class'                     => 'clr'
    ),
    'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_loop_type'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_type'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('pendulum', 'rotate', 'slideloop', 'pulse', 'wave'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_type'],
    'eval'                    => array('includeBlankOption'=>true, 'submitOnChange'=>true, 'tl_class'=>'clr'),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_loop_easing'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_easing'],
    'default'                 => 'Default',
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => \Codefog\SliderRevolution\SlideDca::getSliderOptions('easings'),
    'eval'                    => array('includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
    'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_loop_startdeg'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_startdeg'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_loop_enddeg'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_enddeg'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_loop_origin'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_origin'],
    'default'                 => '50% 50%',
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>10, 'tl_class'=>'w50'),
    'sql'                     => "varchar(10) NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_loop_xs'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_xs'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_loop_ys'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_ys'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_loop_xe'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_xe'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_loop_ye'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_ye'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_loop_angle'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_angle'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_loop_radius'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_radius'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_loop_zoomstart'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_zoomstart'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>4, 'tl_class'=>'w50'),
    'sql'                     => "varchar(4) NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_loop_zoomend'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_loop_zoomend'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>4, 'tl_class'=>'w50'),
    'sql'                     => "varchar(4) NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_video_forcerewind'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_forcerewind'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50 m12'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_video_volume'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_volume'],
    'default'                 => 'mute',
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>4, 'tl_class'=>'w50'),
    'sql'                     => "varchar(4) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_video_videorate'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videorate'],
    'default'                 => 1,
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>4, 'tl_class'=>'w50'),
    'sql'                     => "varchar(4) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_video_videowidth'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videowidth'],
    'default'                 => '100%',
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>8, 'tl_class'=>'w50'),
    'sql'                     => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_video_videoheight'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videoheight'],
    'default'                 => '100%',
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>8, 'tl_class'=>'w50'),
    'sql'                     => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_video_videocontrols'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videocontrols'],
    'default'                 => 1,
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50 m12'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_video_videostartat'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videostartat'],
    'default'                 => '00:00',
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>5, 'tl_class'=>'w50'),
    'sql'                     => "varchar(5) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_video_videoendat'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videoendat'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>5, 'tl_class'=>'w50'),
    'sql'                     => "varchar(5) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_video_videoloop'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videoloop'],
    'default'                 => 'loop',
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('loop', 'loopandnoslidestop'),
    'eval'                    => array('includeBlankOption'=>true, 'helpwizard'=>true, 'tl_class'=>'w50'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videoloop'],
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_video_autoplay'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_autoplay'],
    'default'                 => 'on',
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('on', 'off', '1sttime', 'no1sttime'),
    'eval'                    => array('includeBlankOption'=>true, 'helpwizard'=>true, 'tl_class'=>'w50'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_autoplay'],
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_video_forceCover'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_forceCover'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50 m12'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_video_aspectratio'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_aspectratio'],
    'default'                 => '4:3',
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('4:3', '16:9'),
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(4) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_video_nextslideatend'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_nextslideatend'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'clr'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_video_ytid'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_ytid'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>16, 'tl_class'=>'w50'),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_video_vimeoid'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_vimeoid'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>16, 'tl_class'=>'w50'),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_video_files'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_files'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array
    (
        'multiple'   => true,
        'files'      => true,
        'filesOnly'  => true,
        'fieldType'  => 'checkbox',
        'extensions' => 'mp4,webm,ogv',
        'tl_class'   => 'clr',
    ),
    'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_video_videoattributes'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videoattributes'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'helpwizard'=>true, 'tl_class'=>'clr long'),
    'explanation'             => 'cfg_slider_revolution.video_videoattributes',
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_video_videoposter'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videoposter'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'filesOnly'=>true, 'extensions'=>Config::get('validImageTypes'), 'fieldType'=>'radio', 'tl_class'=>'long clr wizard'),
    'wizard' => array
    (
        function (\DataContainer $dc) {
            return ' <a href="contao/file.php?do='.\Input::get('do').'&amp;table='.$dc->table.'&amp;field='.$dc->field.'&amp;value='.$dc->value.'" title="'.specialchars(str_replace("'", "\\'", $GLOBALS['TL_LANG']['MSC']['filepicker'])).'" onclick="Backend.getScrollOffset();Backend.openModalSelector({\'width\':768,\'title\':\''.specialchars($GLOBALS['TL_LANG']['MOD']['files'][0]).'\',\'url\':this.href,\'id\':\''.$dc->field.'\',\'tag\':\'ctrl_'.$dc->field . ((\Input::get('act') == 'editAll') ? '_' . $dc->id : '').'\',\'self\':this});return false">' . \Image::getHtml('pickfile.gif', $GLOBALS['TL_LANG']['MSC']['filepicker'], 'style="vertical-align:top;cursor:pointer"') . '</a>';
        }
    ),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_video_posterOnMObile'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_posterOnMObile'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_video_stopallvideos'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_stopallvideos'],
    'default'                 => 1,
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_video_showcoveronpause'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_showcoveronpause'],
    'default'                 => 1,
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution_customStyle'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cfg_slider_revolution_customStyle'],
    'exclude'                 => true,
    'inputType'               => 'textarea',
    'eval'                    => array('decodeEntities'=>true, 'class'=>'monospace', 'rte'=>'ace', 'tl_class'=>'clr'),
    'sql'                     => "text NULL"
);
