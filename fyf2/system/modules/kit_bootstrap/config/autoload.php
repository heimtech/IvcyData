<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package     km_bootstrap
 * @copyright   Kuehl Media 2014
 * @author      Matthias Kuehl <http://www.kuehl-media.de>
 * @link        http://www.kuehl-media.de
 * @license     http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'KuehlMedia',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'KuehlMedia\Bootstrap\ModuleBootstrap' => 'system/modules/kit_bootstrap/modules/ModuleBootstrap.php',
));