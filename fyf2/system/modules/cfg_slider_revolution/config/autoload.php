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
 * Register the namespaces
 */
CodefogAutoloader::addNamespace('Codefog\SliderRevolution', 'system/modules/cfg_slider_revolution/library');

/**
 * Register the templates
 */
TemplateLoader::addFiles([
    'cfg_slider_revolution_image'  => 'system/modules/cfg_slider_revolution/templates/elements',
    'cfg_slider_revolution_hybrid' => 'system/modules/cfg_slider_revolution/templates/hybrids',
    'cfg_slider_revolution_widget' => 'system/modules/cfg_slider_revolution/templates/widgets',
    'cfg_slider_revolution'        => 'system/modules/cfg_slider_revolution/templates/slider_revolution',
]);
