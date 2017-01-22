<?php

/**
 * t4c_columns extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package t4c_columns
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
    'themes4contao\Columns'                   => 'system/modules/t4c_columns/classes/Columns.php',

    // Content elements
    'themes4contao\ContentColumnWrapperStart' => 'system/modules/t4c_columns/elements/ContentColumnWrapperStart.php',
    'themes4contao\ContentColumnWrapperStop'  => 'system/modules/t4c_columns/elements/ContentColumnWrapperStop.php',
    'themes4contao\ContentColumnStart'        => 'system/modules/t4c_columns/elements/ContentColumnStart.php',
    'themes4contao\ContentColumnStop'         => 'system/modules/t4c_columns/elements/ContentColumnStop.php',

    // Form fields
    'themes4contao\FormColumnWrapperStart'    => 'system/modules/t4c_columns/forms/FormColumnWrapperStart.php',
    'themes4contao\FormColumnWrapperStop'     => 'system/modules/t4c_columns/forms/FormColumnWrapperStop.php',
    'themes4contao\FormColumnStart'           => 'system/modules/t4c_columns/forms/FormColumnStart.php',
    'themes4contao\FormColumnStop'            => 'system/modules/t4c_columns/forms/FormColumnStop.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    // Content elements
    'ce_t4c_column_wrapper_start'   => 'system/modules/t4c_columns/templates/elements',
    'ce_t4c_column_wrapper_stop'    => 'system/modules/t4c_columns/templates/elements',
    'ce_t4c_column_start'           => 'system/modules/t4c_columns/templates/elements',
    'ce_t4c_column_stop'            => 'system/modules/t4c_columns/templates/elements',

    // Form fields
    'form_t4c_column_wrapper_start' => 'system/modules/t4c_columns/templates/forms',
    'form_t4c_column_wrapper_stop'  => 'system/modules/t4c_columns/templates/forms',
    'form_t4c_column_start'         => 'system/modules/t4c_columns/templates/forms',
    'form_t4c_column_stop'          => 'system/modules/t4c_columns/templates/forms',
));
