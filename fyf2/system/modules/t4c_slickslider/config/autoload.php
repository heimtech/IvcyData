<?php

/**
 * MegaMenu extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package t4c_slickslider
 * @author  Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */

/**
 * Register the namespace
 */
ClassLoader::addNamespace('themes4contao');


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	 // Models
    'themes4contao\SlickSliderModel' => 'system/modules/t4c_slickslider/models/SlickSliderModel.php',
   
	// Content Elements
	'themes4contao\ContentSlickSliderStart'		=> 'system/modules/t4c_slickslider/elements/ContentSlickSliderStart.php',
	'themes4contao\ContentSlickSliderStop'		=> 'system/modules/t4c_slickslider/elements/ContentSlickSliderStop.php',
));


/**
 * Register the templates
 */
 

TemplateLoader::addFiles(array
(
	'ce_t4c_slick_slider_start'     => 'system/modules/t4c_slickslider/templates',
	'ce_t4c_slick_slider_stop'      => 'system/modules/t4c_slickslider/templates',
));
