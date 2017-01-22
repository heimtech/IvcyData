<?php

/**
 * Footer extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package t4c_onepage_nav
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
// Modules
	'themes4contao\OnePageNav' => 'system/modules/t4c_onepage_nav/modules/OnePageNav.php'
));


/**
 * Register the templates
 */
 

TemplateLoader::addFiles(array
(
	'mod_t4c_onepage_nav'     => 'system/modules/t4c_onepage_nav/templates',
));
