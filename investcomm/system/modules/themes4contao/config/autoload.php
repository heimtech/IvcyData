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
    'themes4contao\themes4contao'     => 'system/modules/themes4contao/classes/themes4contao.php',

    // Models
    'themes4contao\Themes4contaoModel' => 'system/modules/themes4contao/models/Themes4contaoModel.php',

    // Modules
    'themes4contao\ModuleT4CTemplate' => 'system/modules/themes4contao/modules/ModuleT4CTemplate.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'mod_t4c_template'     => 'system/modules/themes4contao/templates/modules',
    't4c_template_default' => 'system/modules/themes4contao/templates/t4c',
));

