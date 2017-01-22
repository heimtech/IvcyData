<?php

/**
 * themes4contao extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package themes4contao
 * @author  Kamil Kuzminski <kamil.kuzminski@codefog.pl>
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
    // Classes
    'themes4contao\themes4contao_pro'     	=> 'system/modules/themes4contao_pro/classes/themes4contao_pro.php',

));

TemplateLoader::addFiles(array
(
	't4c_toolbar_contact'     				=> 'system/modules/themes4contao_pro/templates',
	't4c_toolbar_changelanguage'     		=> 'system/modules/themes4contao_pro/templates',
	't4c_toolbar_sociallist'     			=> 'system/modules/themes4contao_pro/templates',
	't4c_toolbar_forms'     				=> 'system/modules/themes4contao_pro/templates',
));


