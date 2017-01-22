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
 * Back end modules
 */
$GLOBALS['BE_MOD']['content']['cfg_slider_revolution'] = array
(
    'tables' => array('tl_cfg_slider_revolution', 'tl_cfg_slider_revolution_slide', 'tl_content'),
    'icon'   => 'system/modules/cfg_slider_revolution/assets/images/icon.png'
);

/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['miscellaneous']['cfg_slider_revolution'] = 'Codefog\SliderRevolution\SliderHybrid';

/**
 * Content elements
 */
$GLOBALS['TL_CTE']['includes']['cfg_slider_revolution'] = 'Codefog\SliderRevolution\SliderHybrid';

// Limit the slider elements to Slider Revolution module
if (TL_MODE == 'FE' || (TL_MODE == 'BE' && \Input::get('do') == 'cfg_slider_revolution')) {
    array_insert($GLOBALS['TL_CTE'], 0, [
        'cfg_slider_revolution_elements' => [
            'cfg_slider_revolution_button' => 'Codefog\SliderRevolution\ContentElement\ButtonElement',
            'cfg_slider_revolution_html'   => 'Codefog\SliderRevolution\ContentElement\HtmlElement',
            'cfg_slider_revolution_image'  => 'Codefog\SliderRevolution\ContentElement\ImageElement',
            'cfg_slider_revolution_video'  => 'Codefog\SliderRevolution\ContentElement\VideoElement',
        ]
    ]);
}

/**
 * Back end form fields
 */
$GLOBALS['BE_FFL']['cfg_slider_revolution_data'] = 'Codefog\SliderRevolution\DataWidget';

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_cfg_slider_revolution']       = 'Codefog\SliderRevolution\Model\SliderModel';
$GLOBALS['TL_MODELS']['tl_cfg_slider_revolution_slide'] = 'Codefog\SliderRevolution\Model\SlideModel';
