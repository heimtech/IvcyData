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
 * Extend the tl_layout palette
 */
$GLOBALS['TL_DCA']['tl_layout']['palettes']['default'] = str_replace('loadingOrder;', 'loadingOrder;{iconsets_legend:hide},iconsets;', $GLOBALS['TL_DCA']['tl_layout']['palettes']['default']);

/**
 * Add fields to tl_layout
 */
$GLOBALS['TL_DCA']['tl_layout']['fields']['iconsets'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['iconsets'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'foreignKey'              => 'tl_iconset.name',
    'eval'                    => array('multiple'=>true, 'tl_class'=>'clr'),
    'sql'                     => "blob NULL"
);
