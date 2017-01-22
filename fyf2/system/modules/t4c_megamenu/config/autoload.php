<?php

/**
 * MegaMenu extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package t4c_megamenu
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
    'themes4contao\MegaMenuModel' => 'system/modules/t4c_megamenu/models/MegaMenuModel.php',
   
	// Modules
	'themes4contao\MegaMenuModule' => 'system/modules/t4c_megamenu/modules/MegaMenuModule.php'
));


/**
 * Register the templates
 */
 

TemplateLoader::addFiles(array
(
	'nav_megamenu'     => 'system/modules/t4c_megamenu/templates',
));
