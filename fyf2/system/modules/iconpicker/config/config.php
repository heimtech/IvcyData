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
 * Extension version
 */
@define('ICONPICKER_VERSION', '1.0');
@define('ICONPICKER_BUILD', '0');

/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['design']['iconsets'] = array
(
    'tables' => array('tl_iconset'),
    'icon'   => 'system/modules/iconpicker/assets/icon.png',
);

/**
 * Back end widgets
 */
$GLOBALS['BE_FFL']['iconpicker'] = 'Codefog\IconPicker\IconPickerWidget';

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_iconset'] = 'Codefog\IconPicker\IconSetModel';

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['generatePage'][] = array('Codefog\IconPicker\Manager', 'generatePage');

/**
 * Icon sets engines
 */
$GLOBALS['ICONPICKER_ENGINES'] = array
(
    'icomoon' => 'Codefog\IconPicker\Engine\IcoMoonEngine',
);
