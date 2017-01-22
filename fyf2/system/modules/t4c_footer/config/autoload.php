<?php

/**
 * Footer extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package t4c_footer
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
    'themes4contao\FooterModel' => 'system/modules/t4c_footer/models/FooterModel.php',
   
	// Modules
	'themes4contao\FooterModule' => 'system/modules/t4c_footer/modules/FooterModule.php'
));


/**
 * Register the templates
 */
 

TemplateLoader::addFiles(array
(
	'mod_t4c_footer'     => 'system/modules/t4c_footer/templates',
	't4c_footer_item'	 =>  'system/modules/t4c_footer/templates'
));
