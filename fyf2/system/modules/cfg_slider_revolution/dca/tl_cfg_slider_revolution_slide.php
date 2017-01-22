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
 * Table tl_cfg_slider_revolution_slide
 */
$GLOBALS['TL_DCA']['tl_cfg_slider_revolution_slide'] = array
(

    // Config
    'config' => array
    (
        'dataContainer'               => 'Table',
        'ptable'                      => 'tl_cfg_slider_revolution',
        'ctable'                      => array('tl_content'),
        'enableVersioning'            => true,
        'switchToEdit'                => true,
        'onload_callback' => array
        (
            array('Codefog\SliderRevolution\SlideDca', 'initBackgroundSubpalettes')
        ),
        'sql' => array
        (
            'keys' => array
            (
                'id' => 'primary',
                'pid' => 'index'
            )
        )
    ),

    // List
    'list' => array
    (
        'sorting' => array
        (
            'mode'                    => 4,
            'fields'                  => array('sorting'),
            'headerFields'            => array('name', 'tstamp', 'startwidth', 'startheight'),
            'panelLayout'             => 'filter;search,limit',
            'child_record_callback'   => array('Codefog\SliderRevolution\SlideDca', 'generateLabel')
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
                'label'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['edit'],
                'href'                => 'table=tl_content',
                'icon'                => 'edit.gif'
            ),
            'editheader' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['editheader'],
                'href'                => 'act=edit',
                'icon'                => 'header.gif'
            ),
            'copy' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['copy'],
                'href'                => 'act=copy',
                'icon'                => 'copy.gif'
            ),
            'delete' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['delete'],
                'href'                => 'act=delete',
                'icon'                => 'delete.gif',
                'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
            ),
			'toggle' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['toggle'],
				'icon'                => 'visible.gif',
				'attributes'          => 'onclick="Backend.getScrollOffset();return AjaxRequest.toggleVisibility(this,%s)"',
				'button_callback'     => array('Codefog\SliderRevolution\SlideDca', 'toggleIcon')
			),
            'show' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['show'],
                'href'                => 'act=show',
                'icon'                => 'show.gif'
            )
        )
    ),

    // Palettes
    'palettes' => array
    (
        '__selector__'                => array('kenburns'),
        'default'                     => '
            {name_legend},
            name,
            slideIndex,
            published;

            {background_legend},
            background;

            {transition_legend},
            transition,
            easein,
            easeout,
            slotamount,
            masterspeed,
            rotate,
            delay;

            {fstransition_legend:hide},
            fstransition,
            fsslotamount,
            fsmasterspeed;

            {kenburns_legend:hide},
            kenburns;

            {parallax_legend:hide},
            parallax;

            {link_legend:hide},
            link,
            newWindow,
            linktoslide;

            {thumbnail_legend:hide},
            thumb;

            {title_legend:hide},
            title,
            description'
    ),

    // Subpalettes
    'subpalettes' => array
    (
        'kenburns'                    => 'kenburns_duration,kenburns_ease,kenburns_scalestart,kenburns_scaleend,kenburns_offsetstart,kenburns_offsetend,kenburns_rotatestart,kenburns_rotateend',
        'background_image'            => 'bgImage,lazyLoad,bgPosition,bgFit,bgRepeat',
        'background_video'            => 'bgImage,video_forcerewind,video_volume,video_videorate,video_videostartat,video_videoendat,video_videoloop,video_forceCover,video_aspectratio,video_nextslideatend,video_ytid,video_vimeoid,video_files,video_videoattributes',
        'background_color'            => 'bgColor',
        'background_transparent'      => '',
    ),

    // Fields
    'fields' => array
    (
        'id' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL auto_increment"
        ),
        'pid' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'sorting' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'tstamp' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'name' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['name'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'slideIndex' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['slideIndex'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'published' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['published'],
            'exclude'                 => true,
            'filter'                  => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('doNotCopy'=>true, 'tl_class'=>'w50'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'background' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['background'],
            'default'                 => 'image',
            'exclude'                 => true,
            'filter'                  => true,
            'inputType'               => 'select',
            'options'                 => array('image', 'video', 'color', 'transparent'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['background'],
            'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'clr'),
            'sql'                     => "varchar(16) NOT NULL default ''"
        ),
        'bgImage' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['bgImage'],
            'exclude'                 => true,
            'inputType'               => 'fileTree',
            'eval'                    => array('files'=>true, 'filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>\Config::get('validImageTypes'), 'tl_class'=>'clr long'),
            'sql'                     => "binary(16) NULL"
        ),
        'lazyLoad' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['lazyLoad'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('files'=>true, 'filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>\Config::get('validImageTypes'), 'tl_class'=>'clr long'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'bgPosition' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['bgPosition'],
            'default'                 => 'left top',
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>32, 'helpwizard'=>true, 'tl_class'=>'w50'),
            'explanation'             => 'cfg_slider_revolution.bgPosition',
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'bgFit' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['bgFit'],
            'default'                 => 'cover',
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>32, 'helpwizard'=>true, 'tl_class'=>'w50'),
            'explanation'             => 'cfg_slider_revolution.bgFit',
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'bgRepeat' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['bgRepeat'],
            'default'                 => 'no-repeat',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('no-repeat', 'repeat', 'repeat-x', 'repeat-y'),
            'eval'                    => array('includeBlankOption'=>true, 'helpwizard'=>true, 'tl_class'=>'clr'),
            'explanation'             => 'cfg_slider_revolution.bgRepeat',
            'sql'                     => "varchar(16) NOT NULL default ''"
        ),
        'bgColor' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['bgColor'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>6, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
            'sql'                     => "varchar(6) NOT NULL default ''"
        ),
        'transition' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition'],
            'exclude'                 => true,
            'filter'                  => true,
            'inputType'               => 'select',
            'options'                 => \Codefog\SliderRevolution\SlideDca::getSliderOptions('layer_transitions'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition'],
            'eval'                    => array('mandatory'=>true, 'includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
            'sql'                     => "varchar(64) NOT NULL default ''"
        ),
        'easein' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['easein'],
            'default'                 => 'Default',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => \Codefog\SliderRevolution\SlideDca::getSliderOptions('easings'),
            'eval'                    => array('includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'easeout' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['easeout'],
            'default'                 => 'Default',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => \Codefog\SliderRevolution\SlideDca::getSliderOptions('easings'),
            'eval'                    => array('includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'slotamount' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['slotamount'],
            'default'                 => 10,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'masterspeed' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['masterspeed'],
            'default'                 => 'default',
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>8, 'tl_class'=>'w50'),
            'sql'                     => "varchar(8) NOT NULL default ''"
        ),
        'fstransition' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['fstransition'],
            'exclude'                 => true,
            'filter'                  => true,
            'inputType'               => 'select',
            'options'                 => \Codefog\SliderRevolution\SlideDca::getSliderOptions('layer_transitions'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['transition'],
            'eval'                    => array('includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
            'sql'                     => "varchar(64) NOT NULL default ''"
        ),
        'fsslotamount' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['fsslotamount'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "varchar(5) NOT NULL default ''"
        ),
        'fsmasterspeed' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['fsmasterspeed'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>8, 'tl_class'=>'w50'),
            'sql'                     => "varchar(8) NOT NULL default ''"
        ),
        'rotate' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['rotate'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) NOT NULL default '0'"
        ),
        'delay' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['delay'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>8, 'tl_class'=>'w50'),
            'sql'                     => "varchar(8) NOT NULL default ''"
        ),
        'link' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['link'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'fieldType'=>'radio', 'filesOnly'=>true, 'tl_class'=>'long wizard'),
            'wizard' => array
            (
                function (\DataContainer $dc) {
                    return ' <a href="contao/page.php?do=' . \Input::get('do') . '&amp;table=' . $dc->table . '&amp;field=' . $dc->field . '&amp;value=' . $dc->value . '" title="' . specialchars($GLOBALS['TL_LANG']['MSC']['pagepicker']) . '" onclick="Backend.getScrollOffset();Backend.openModalSelector({\'width\':768,\'title\':\'' . specialchars(str_replace("'", "\\'", $GLOBALS['TL_LANG']['MOD']['page'][0])) . '\',\'url\':this.href,\'id\':\'' . $dc->field . '\',\'tag\':\'ctrl_'. $dc->field . ((\Input::get('act') == 'editAll') ? '_' . $dc->id : '') . '\',\'self\':this});return false">' . \Image::getHtml('pickpage.gif', $GLOBALS['TL_LANG']['MSC']['pagepicker'], 'style="vertical-align:top;cursor:pointer"') . '</a>';
                }
            ),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'newWindow' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['newWindow'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'linktoslide' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['linktoslide'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "varchar(16) NOT NULL default ''"
        ),
        'thumb' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['thumb'],
            'exclude'                 => true,
            'inputType'               => 'fileTree',
            'eval'                    => array('files'=>true, 'filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes'], 'tl_class'=>'long'),
            'sql'                     => "binary(16) NULL"
        ),
        'title' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['title'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'long'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'description' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['description'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'long'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'video_forcerewind' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_forcerewind'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'video_volume' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_volume'],
            'default'                 => 'mute',
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>4, 'tl_class'=>'w50'),
            'sql'                     => "varchar(4) NOT NULL default ''"
        ),
        'video_videorate' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videorate'],
            'default'                 => 1,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>4, 'tl_class'=>'w50'),
            'sql'                     => "varchar(4) NOT NULL default ''"
        ),
        'video_videostartat' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videostartat'],
            'default'                 => '00:00',
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "varchar(5) NOT NULL default ''"
        ),
        'video_videoendat' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videoendat'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "varchar(5) NOT NULL default ''"
        ),
        'video_videoloop' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videoloop'],
            'default'                 => 'loop',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('loop', 'loopandnoslidestop'),
            'eval'                    => array('includeBlankOption'=>true, 'helpwizard'=>true, 'tl_class'=>'w50'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videoloop'],
            'sql'                     => "varchar(16) NOT NULL default ''"
        ),
        'video_forceCover' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_forceCover'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50 m12'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'video_aspectratio' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_aspectratio'],
            'default'                 => '4:3',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('4:3', '16:9'),
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "varchar(4) NOT NULL default ''"
        ),
        'video_nextslideatend' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_nextslideatend'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'clr'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'video_ytid' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_ytid'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>16, 'tl_class'=>'w50'),
            'sql'                     => "varchar(16) NOT NULL default ''"
        ),
        'video_vimeoid' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_vimeoid'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>16, 'tl_class'=>'w50'),
            'sql'                     => "varchar(16) NOT NULL default ''"
        ),
        'video_files' => array
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
        ),
        'video_videoattributes' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['video_videoattributes'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'helpwizard'=>true, 'tl_class'=>'clr long'),
            'explanation'             => 'cfg_slider_revolution.video_videoattributes',
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'kenburns' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['kenburns'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'clr'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'kenburns_duration' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['kenburns_duration'],
            'default'                 => 10000,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'kenburns_ease' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['kenburns_ease'],
            'default'                 => 'Power3.easeInOut',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => \Codefog\SliderRevolution\SlideDca::getSliderOptions('easings'),
            'eval'                    => array('chosen'=>true, 'tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'kenburns_scalestart' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['kenburns_scalestart'],
            'default'                 => 100,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'kenburns_scaleend' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['kenburns_scaleend'],
            'default'                 => 120,
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'kenburns_offsetstart' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['kenburns_offsetstart'],
            'default'                 => '-250 -100',
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>16, 'tl_class'=>'w50'),
            'sql'                     => "varchar(16) NOT NULL default ''"
        ),
        'kenburns_offsetend' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['kenburns_offsetend'],
            'default'                 => '250 100',
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>16, 'tl_class'=>'w50'),
            'sql'                     => "varchar(16) NOT NULL default ''"
        ),
        'kenburns_rotatestart' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['kenburns_rotatestart'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) NOT NULL default '0'"
        ),
        'kenburns_rotateend' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cfg_slider_revolution_slide']['kenburns_rotateend'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) NOT NULL default '0'"
        ),
    )
);
