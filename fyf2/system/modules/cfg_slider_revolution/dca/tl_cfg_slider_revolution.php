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
 * Table tl_cfg_slider_revolution
 */
$GLOBALS['TL_DCA']['tl_cfg_slider_revolution'] = array
(

    // Config
    'config' => array
    (
        'dataContainer'               => 'Table',
        'ctable'                      => array('tl_cfg_slider_revolution_slide'),
        'enableVersioning'            => true,
        'switchToEdit'                => true,
        'sql' => array
        (
            'keys' => array
            (
                'id' => 'primary'
            )
        )
    ),

    // List
    'list' => array
    (
        'sorting' => array
        (
            'mode'                    => 1,
            'fields'                  => array('name'),
            'flag'                    => 1,
            'panelLayout'             => 'search,limit'
        ),
        'label' => array
        (
            'fields'                  => array('name'),
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
                'label'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['edit'],
                'href'                => 'table=tl_cfg_slider_revolution_slide',
                'icon'                => 'edit.gif'
            ),
            'editheader' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['editheader'],
                'href'                => 'act=edit',
                'icon'                => 'header.gif'
            ),
            'copy' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['copy'],
                'href'                => 'act=copy',
                'icon'                => 'copy.gif'
            ),
            'delete' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['delete'],
                'href'                => 'act=delete',
                'icon'                => 'delete.gif',
                'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
            ),
            'show' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['show'],
                'href'                => 'act=show',
                'icon'                => 'show.gif'
            )
        )
    ),

    // Palettes
    'palettes' => array
    (
        '__selector__'                => array('viewPort', 'fallbacks', 'parallax', 'carousel', 'navigation_touch_touchenabled', 'navigation_arrows_enable', 'navigation_bullets_enable', 'navigation_thumbnails_enable', 'navigation_tabs_enable'),
        'default'                     => '
            {name_legend},
            name,
            debug;

            {layout_legend:hide},
            sliderType,
            sliderLayout,
            responsiveLevels,
            gridwidth,
            gridheight,
            autoHeight,
            minHeight,
            maxWidth,
            fullScreenOffsetContainer,
            fullScreenOffset;

            {progressing_legend:hide},
            delay,
            disableProgressBar,
            startDelay,
            stopAfterLoops,
            stopAtSlide,
            viewPort;

            {lazy_loading_legend:hide},
            lazyType;

            {appearance_legend:hide},
            dottedOverlay,
            shadow,
            spinner;

            {fallbacks_legend:hide},
            fallbacks;

            {parallax_legend:hide},
            parallax;

            {carousel_legend:hide},
            carousel;

            {navigation_legend:hide},
            navigation_keyboardNavigation,
            navigation_keyboard_direction,
            navigation_mouseScrollNavigation,
            navigation_onHoverStop;

            {navigation_touch_legend:hide},
            navigation_touch_touchenabled;

            {navigation_arrows_legend:hide},
            navigation_arrows_enable;

            {navigation_bullets_legend:hide},
            navigation_bullets_enable;

            {navigation_thumbnails_legend:hide},
            navigation_thumbnails_enable;

            {navigation_tabs_legend:hide},
            navigation_tabs_enable;',
    ),

    // Subpalettes
    'subpalettes' => array
    (
        'viewPort'                      => 'outof,visible_area',
        'fallbacks'                     => 'panZoomDisableOnMobile,nextSlideOnWindowFocus,disableFocusListener',
        'parallax'                      => 'parallax_type,parallax_origo,parallax_levels,parallax_speed,parallax_bgparallax,parallax_disable_onmobile',
        'carousel'                      => 'carousel_horizontal_align,carousel_vertical_align,carousel_infinity,carousel_space,carousel_maxVisibleItems,carousel_stretch,carousel_fadeout,carousel_maxRotation,carousel_minScale,carousel_vary_fade,carousel_vary_rotation,carousel_vary_scale,carousel_border_radius,carousel_padding_top,carousel_padding_bottom',
        'navigation_touch_touchenabled' => 'navigation_touch_swipe_treshold,navigation_touch_swipe_min_touches,navigation_touch_drag_block_vertical,navigation_touch_swipe_direction',
        'navigation_arrows_enable'      => 'navigation_arrows_style,navigation_arrows_hide_onmobile,navigation_arrows_hide_onleave,navigation_arrows_hide_delay,navigation_arrows_hide_delay_mobile,navigation_arrows_hide_under,navigation_arrows_hide_over,navigation_arrows_tmp,navigation_arrows_left_h_align,navigation_arrows_left_v_align,navigation_arrows_left_h_offset,navigation_arrows_left_v_offset,navigation_arrows_right_h_align,navigation_arrows_right_v_align,navigation_arrows_right_h_offset,navigation_arrows_right_v_offset',
        'navigation_bullets_enable'     => 'navigation_bullets_style,navigation_bullets_hide_onmobile,navigation_bullets_hide_onleave,navigation_bullets_hide_delay,navigation_bullets_hide_delay_mobile,navigation_bullets_hide_under,navigation_bullets_hide_over,navigation_bullets_tmp,navigation_bullets_direction,navigation_bullets_space,navigation_bullets_h_align,navigation_bullets_v_align,navigation_bullets_h_offset,navigation_bullets_v_offset',
        'navigation_thumbnails_enable'  => 'navigation_thumbnails_style,navigation_thumbnails_width,navigation_thumbnails_height,navigation_thumbnails_wrapper_padding,navigation_thumbnails_wrapper_opacity,navigation_thumbnails_wrapper_color,navigation_thumbnails_visibleAmount,navigation_thumbnails_hide_onmobile,navigation_thumbnails_hide_onleave,navigation_thumbnails_hide_delay,navigation_thumbnails_hide_delay_mobile,navigation_thumbnails_hide_under,navigation_thumbnails_hide_over,navigation_thumbnails_tmp,navigation_thumbnails_direction,navigation_thumbnails_span,navigation_thumbnails_position,navigation_thumbnails_space,navigation_thumbnails_h_align,navigation_thumbnails_v_align,navigation_thumbnails_h_offset,navigation_thumbnails_v_offset',
        'navigation_tabs_enable'        => 'navigation_tabs_style,navigation_tabs_width,navigation_tabs_height,navigation_tabs_wrapper_padding,navigation_tabs_wrapper_opacity,navigation_tabs_wrapper_color,navigation_tabs_visibleAmount,navigation_tabs_hide_onmobile,navigation_tabs_hide_onleave,navigation_tabs_hide_delay,navigation_tabs_hide_delay_mobile,navigation_tabs_hide_under,navigation_tabs_hide_over,navigation_tabs_tmp,navigation_tabs_direction,navigation_tabs_span,navigation_tabs_position,navigation_tabs_space,navigation_tabs_h_align,navigation_tabs_v_align,navigation_tabs_h_offset,navigation_tabs_v_offset',
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
        'name' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['name'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'debug' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['debug'],
            'exclude'                 => true,
            'filter'                  => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'sliderType' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['sliderType'],
            'default'                 => 'standard',
            'filter'                  => true,
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('standard', 'hero', 'carousel'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['sliderType'],
            'eval'                    => array('helpwizard'=>true, 'tl_class'=>'w50'),
            'sql'                     => "varchar(8) NOT NULL default ''"
        ),
        'sliderLayout' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['sliderLayout'],
            'default'                 => 'auto',
            'filter'                  => true,
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('auto', 'fullwidth', 'fullscreen'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['sliderLayout'],
            'eval'                    => array('helpwizard'=>true, 'tl_class'=>'w50'),
            'sql'                     => "varchar(16) NOT NULL default ''"
        ),
        'responsiveLevels' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['responsiveLevels'],
            'default'                 => 4096,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'clr'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'gridwidth' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['gridwidth'],
            'default'                 => 1200,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'gridheight' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['gridheight'],
            'default'                 => 700,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'autoHeight' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['autoHeight'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'minHeight' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['minHeight'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>10, 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'maxWidth' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['maxWidth'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>10, 'tl_class'=>'clr'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'fullScreenOffsetContainer' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['fullScreenOffsetContainer'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'w50'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'fullScreenOffset' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['fullScreenOffset'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'delay' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['delay'],
            'default'                 => 9000,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>10, 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'disableProgressBar' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['disableProgressBar'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'startDelay' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['startDelay'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>10, 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'stopAfterLoops' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['stopAfterLoops'],
            'default'                 => -1,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) NOT NULL default '0'"
        ),
        'stopAtSlide' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['stopAtSlide'],
            'default'                 => -1,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) NOT NULL default '0'"
        ),
        'viewPort' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['viewPort'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'clr'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'outof' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['outof'],
            'default'                 => 'wait',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('wait', 'pause'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['outof'],
            'eval'                    => array('helpwizard'=>true, 'tl_class'=>'w50'),
            'sql'                     => "varchar(8) NOT NULL default ''"
        ),
        'visible_area' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['visible_area'],
            'default'                 => '60%',
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>4, 'tl_class'=>'w50'),
            'sql'                     => "varchar(4) NOT NULL default ''"
        ),
        'lazyType' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['lazyType'],
            'default'                 => 'smart',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('all', 'smart', 'single', 'none'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['lazyType'],
            'eval'                    => array('helpwizard'=>true, 'tl_class'=>'w50'),
            'sql'                     => "varchar(8) NOT NULL default ''"
        ),
        'dottedOverlay' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['dottedOverlay'],
            'default'                 => 'none',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('none', 'twoxtwo', 'threexthree', 'twoxtwowhite', 'threexthreewhite'),
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "varchar(16) NOT NULL default ''"
        ),
        'shadow' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['shadow'],
            'default'                 => 0,
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => range(0, 6),
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "smallint(1) unsigned NOT NULL default '0'"
        ),
        'spinner' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['spinner'],
            'default'                 => 'spinner0',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('off', 'spinner0', 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5'),
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "varchar(8) NOT NULL default ''"
        ),
        'fallbacks' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['fallbacks'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'clr'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'panZoomDisableOnMobile' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['panZoomDisableOnMobile'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'nextSlideOnWindowFocus' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['nextSlideOnWindowFocus'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'disableFocusListener' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['disableFocusListener'],
            'default'                 => 1,
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'parallax' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['parallax'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'clr'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'parallax_type' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['parallax_type'],
            'default'                 => 'off',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('off', 'mouse', 'scroll', 'mouse+scroll'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['parallax_type'],
            'eval'                    => array('helpwizard'=>true, 'tl_class'=>'w50'),
            'sql'                     => "varchar(16) NOT NULL default ''"
        ),
        'parallax_origo' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['parallax_origo'],
            'default'                 => 'enterpoint',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('slidercenter', 'enterpoint'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['parallax_origo'],
            'eval'                    => array('helpwizard'=>true, 'tl_class'=>'w50'),
            'sql'                     => "varchar(16) NOT NULL default ''"
        ),
        'parallax_levels' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['parallax_levels'],
            'default'                 => '10,15,20,25,30,35,40,45,50,55,60,65,70,75,80,85',
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'clr long'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'parallax_speed' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['parallax_speed'],
            'default'                 => 400,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>10, 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'parallax_bgparallax' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['parallax_bgparallax'],
            'default'                 => 1,
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'parallax_disable_onmobile' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['parallax_disable_onmobile'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'w50'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'carousel' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'clr'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'carousel_horizontal_align' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_horizontal_align'],
            'default'                 => 'center',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('left', 'right', 'center'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_horizontal_align'],
            'eval'                    => array('helpwizard'=>true, 'tl_class'=>'w50'),
            'sql'                     => "varchar(8) NOT NULL default ''"
        ),
        'carousel_vertical_align' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_vertical_align'],
            'default'                 => 'center',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('top', 'bottom', 'center'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_vertical_align'],
            'eval'                    => array('helpwizard'=>true, 'tl_class'=>'w50'),
            'sql'                     => "varchar(8) NOT NULL default ''"
        ),
        'carousel_infinity' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_infinity'],
            'default'                 => 1,
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'clr'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'carousel_space' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_space'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>10, 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'carousel_maxVisibleItems' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_maxVisibleItems'],
            'default'                 => 3,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'carousel_stretch' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_stretch'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'carousel_fadeout' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_fadeout'],
            'default'                 => 1,
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'carousel_maxRotation' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_maxRotation'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>3, 'tl_class'=>'w50'),
            'sql'                     => "smallint(3) unsigned NOT NULL default '0'"
        ),
        'carousel_minScale' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_minScale'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'prcnt', 'tl_class'=>'w50'),
            'sql'                     => "smallint(3) unsigned NOT NULL default '0'"
        ),
        'carousel_vary_fade' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_vary_fade'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'carousel_vary_rotation' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_vary_rotation'],
            'default'                 => 1,
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'carousel_vary_scale' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_vary_scale'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'carousel_border_radius' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_border_radius'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'carousel_padding_top' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_padding_top'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'carousel_padding_bottom' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['carousel_padding_bottom'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_keyboardNavigation' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_keyboardNavigation'],
            'default'                 => 1,
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'navigation_keyboard_direction' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_keyboard_direction'],
            'default'                 => 'horizontal',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('horizontal', 'vertical'),
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "varchar(16) NOT NULL default ''"
        ),
        'navigation_mouseScrollNavigation' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_mouseScrollNavigation'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'navigation_onHoverStop' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_onHoverStop'],
            'default'                 => 1,
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'navigation_touch_touchenabled' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_touch_touchenabled'],
            'default'                 => 1,
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'clr'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'navigation_touch_swipe_treshold' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_touch_swipe_treshold'],
            'default'                 => 75,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_touch_swipe_min_touches' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_touch_swipe_min_touches'],
            'default'                 => 1,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>2, 'tl_class'=>'w50'),
            'sql'                     => "smallint(2) unsigned NOT NULL default '0'"
        ),
        'navigation_touch_drag_block_vertical' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_touch_drag_block_vertical'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'navigation_touch_swipe_direction' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_touch_swipe_direction'],
            'default'                 => 'horizontal',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('horizontal', 'vertical'),
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "varchar(16) NOT NULL default ''"
        ),
        'navigation_arrows_enable' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_enable'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'clr'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'navigation_arrows_style' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_style'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'clr'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'navigation_arrows_hide_onmobile' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_hide_onmobile'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'navigation_arrows_hide_onleave' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_hide_onleave'],
            'default'                 => 1,
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'navigation_arrows_hide_delay' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_hide_delay'],
            'default'                 => 200,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_arrows_hide_delay_mobile' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_hide_delay_mobile'],
            'default'                 => 1200,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_arrows_hide_under' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_hide_under'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_arrows_hide_over' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_hide_over'],
            'default'                 => 9999,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_arrows_tmp' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_tmp'],
            'exclude'                 => true,
            'inputType'               => 'textarea',
            'eval'                    => array('preserveTags'=>true, 'decodeEntities'=>true, 'class'=>'monospace', 'rte'=>'ace|html', 'tl_class'=>'clr'),
            'sql'                     => "text NULL"
        ),
        'navigation_arrows_left_h_align' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_left_h_align'],
            'default'                 => 'left',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('left', 'right', 'center'),
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "varchar(8) NOT NULL default ''"
        ),
        'navigation_arrows_left_v_align' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_left_v_align'],
            'default'                 => 'center',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('top', 'bottom', 'center'),
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "varchar(8) NOT NULL default ''"
        ),
        'navigation_arrows_left_h_offset' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_left_h_offset'],
            'default'                 => 20,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) NOT NULL default '0'"
        ),
        'navigation_arrows_left_v_offset' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_left_v_offset'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) NOT NULL default '0'"
        ),
        'navigation_arrows_right_h_align' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_right_h_align'],
            'default'                 => 'right',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('left', 'right', 'center'),
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "varchar(8) NOT NULL default ''"
        ),
        'navigation_arrows_right_v_align' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_right_v_align'],
            'default'                 => 'center',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('top', 'bottom', 'center'),
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "varchar(8) NOT NULL default ''"
        ),
        'navigation_arrows_right_h_offset' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_right_h_offset'],
            'default'                 => 20,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) NOT NULL default '0'"
        ),
        'navigation_arrows_right_v_offset' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_arrows_right_v_offset'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) NOT NULL default '0'"
        ),
        'navigation_bullets_enable' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_enable'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'clr'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'navigation_bullets_style' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_style'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'clr'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'navigation_bullets_hide_onmobile' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_hide_onmobile'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'navigation_bullets_hide_onleave' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_hide_onleave'],
            'default'                 => 1,
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'navigation_bullets_hide_delay' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_hide_delay'],
            'default'                 => 200,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_bullets_hide_delay_mobile' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_hide_delay_mobile'],
            'default'                 => 1200,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_bullets_hide_under' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_hide_under'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_bullets_hide_over' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_hide_over'],
            'default'                 => 9999,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_bullets_tmp' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_tmp'],
            'default'                 => '<span class="tp-bullet-image"></span><span class="tp-bullet-title"></span>',
            'exclude'                 => true,
            'inputType'               => 'textarea',
            'eval'                    => array('preserveTags'=>true, 'decodeEntities'=>true, 'class'=>'monospace', 'rte'=>'ace|html', 'tl_class'=>'clr'),
            'sql'                     => "text NULL"
        ),
        'navigation_bullets_direction' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_direction'],
            'default'                 => 'horizontal',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('horizontal', 'vertical'),
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "varchar(16) NOT NULL default ''"
        ),
        'navigation_bullets_space' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_space'],
            'default'                 => 5,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_bullets_h_align' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_h_align'],
            'default'                 => 'center',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('left', 'right', 'center'),
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "varchar(8) NOT NULL default ''"
        ),
        'navigation_bullets_v_align' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_v_align'],
            'default'                 => 'bottom',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('top', 'bottom', 'center'),
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "varchar(8) NOT NULL default ''"
        ),
        'navigation_bullets_h_offset' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_h_offset'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) NOT NULL default '0'"
        ),
        'navigation_bullets_v_offset' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_bullets_v_offset'],
            'default'                 => 10,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) NOT NULL default '0'"
        ),
        'navigation_thumbnails_enable' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_enable'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'clr'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'navigation_thumbnails_style' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_style'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'clr'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'navigation_thumbnails_width' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_width'],
            'default'                 => 100,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_thumbnails_height' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_height'],
            'default'                 => 50,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_thumbnails_wrapper_padding' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_wrapper_padding'],
            'default'                 => 2,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_thumbnails_wrapper_opacity' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_wrapper_opacity'],
            'default'                 => 1,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50'),
            'sql'                     => "varchar(4) NOT NULL default ''"
        ),
        'navigation_thumbnails_wrapper_color' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_wrapper_color'],
            'default'                 => 'f5f5f5',
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>6, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
            'sql'                     => "varchar(6) NOT NULL default ''"
        ),
        'navigation_thumbnails_visibleAmount' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_visibleAmount'],
            'default'                 => 5,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_thumbnails_hide_onmobile' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_hide_onmobile'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'navigation_thumbnails_hide_onleave' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_hide_onleave'],
            'default'                 => 1,
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'navigation_thumbnails_hide_delay' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_hide_delay'],
            'default'                 => 200,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_thumbnails_hide_delay_mobile' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_hide_delay_mobile'],
            'default'                 => 1200,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_thumbnails_hide_under' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_hide_under'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_thumbnails_hide_over' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_hide_over'],
            'default'                 => 9999,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_thumbnails_tmp' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_tmp'],
            'default'                 => '<span class="tp-thumb-image"></span><span class="tp-thumb-title"></span>',
            'exclude'                 => true,
            'inputType'               => 'textarea',
            'eval'                    => array('preserveTags'=>true, 'decodeEntities'=>true, 'class'=>'monospace', 'rte'=>'ace|html', 'tl_class'=>'clr'),
            'sql'                     => "text NULL"
        ),
        'navigation_thumbnails_direction' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_direction'],
            'default'                 => 'horizontal',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('horizontal', 'vertical'),
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "varchar(16) NOT NULL default ''"
        ),
        'navigation_thumbnails_span' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_span'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'navigation_thumbnails_position' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_position'],
            'default'                 => 'inner',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('inner', 'outer-left', 'outer-right', 'outer-bottom', 'outer-top'),
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "varchar(16) NOT NULL default ''"
        ),
        'navigation_thumbnails_space' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_space'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_thumbnails_h_align' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_h_align'],
            'default'                 => 'center',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('left', 'right', 'center'),
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "varchar(8) NOT NULL default ''"
        ),
        'navigation_thumbnails_v_align' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_v_align'],
            'default'                 => 'bottom',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('top', 'bottom', 'center'),
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "varchar(8) NOT NULL default ''"
        ),
        'navigation_thumbnails_h_offset' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_h_offset'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) NOT NULL default '0'"
        ),
        'navigation_thumbnails_v_offset' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_thumbnails_v_offset'],
            'default'                 => 40,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) NOT NULL default '0'"
        ),
        'navigation_tabs_enable' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_enable'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'clr'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'navigation_tabs_style' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_style'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'clr'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'navigation_tabs_width' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_width'],
            'default'                 => 100,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_tabs_height' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_height'],
            'default'                 => 50,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_tabs_wrapper_padding' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_wrapper_padding'],
            'default'                 => 2,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_tabs_wrapper_opacity' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_wrapper_opacity'],
            'default'                 => 1,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50'),
            'sql'                     => "varchar(4) NOT NULL default ''"
        ),
        'navigation_tabs_wrapper_color' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_wrapper_color'],
            'default'                 => 'f5f5f5',
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>6, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
            'sql'                     => "varchar(6) NOT NULL default ''"
        ),
        'navigation_tabs_visibleAmount' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_visibleAmount'],
            'default'                 => 5,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_tabs_hide_onmobile' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_hide_onmobile'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'navigation_tabs_hide_onleave' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_hide_onleave'],
            'default'                 => 1,
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'navigation_tabs_hide_delay' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_hide_delay'],
            'default'                 => 200,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_tabs_hide_delay_mobile' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_hide_delay_mobile'],
            'default'                 => 1200,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_tabs_hide_under' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_hide_under'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_tabs_hide_over' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_hide_over'],
            'default'                 => 9999,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_tabs_tmp' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_tmp'],
            'default'                 => '<span class="tp-thumb-image"></span><span class="tp-thumb-title"></span>',
            'exclude'                 => true,
            'inputType'               => 'textarea',
            'eval'                    => array('preserveTags'=>true, 'decodeEntities'=>true, 'class'=>'monospace', 'rte'=>'ace|html', 'tl_class'=>'clr'),
            'sql'                     => "text NULL"
        ),
        'navigation_tabs_direction' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_direction'],
            'default'                 => 'horizontal',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('horizontal', 'vertical'),
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "varchar(16) NOT NULL default ''"
        ),
        'navigation_tabs_span' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_span'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'navigation_tabs_position' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_position'],
            'default'                 => 'inner',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('inner', 'outer-left', 'outer-right', 'outer-bottom', 'outer-top'),
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "varchar(16) NOT NULL default ''"
        ),
        'navigation_tabs_space' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_space'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'navigation_tabs_h_align' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_h_align'],
            'default'                 => 'center',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('left', 'right', 'center'),
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "varchar(8) NOT NULL default ''"
        ),
        'navigation_tabs_v_align' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_v_align'],
            'default'                 => 'center',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('top', 'bottom', 'center'),
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "varchar(8) NOT NULL default ''"
        ),
        'navigation_tabs_h_offset' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_h_offset'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) NOT NULL default '0'"
        ),
        'navigation_tabs_v_offset' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution']['navigation_tabs_v_offset'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) NOT NULL default '0'"
        ),
    )
);