<?php

/**
 * iconpicker extension for Contao Open Source CMS
 *
 * Copyright (C) 2011-2015 Codefog
 *
 * @package iconpicker
 * @author  Codefog <http://codefog.pl>
 * @author  Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @license LGPL
 */

/**
 * Register the namespace
 */
ClassLoader::addNamespace('Codefog\IconPicker');

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Classes
    'Codefog\IconPicker\Manager' => 'system/modules/iconpicker/library/Manager.php',

    // Engines
    'Codefog\IconPicker\Engine\IcoMoonEngine' => 'system/modules/iconpicker/library/Engine/IcoMoonEngine.php',

    // Interfaces
    'Codefog\IconPicker\EngineInterface' => 'system/modules/iconpicker/library/EngineInterface.php',

    // Models
    'Codefog\IconPicker\IconSetModel' => 'system/modules/iconpicker/library/IconSetModel.php',

    // Widgets
    'Codefog\IconPicker\IconPickerWidget' => 'system/modules/iconpicker/library/IconPickerWidget.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'be_iconpicker'        => 'system/modules/iconpicker/templates/backend',
    'be_iconpicker_widget' => 'system/modules/iconpicker/templates/backend',
));
