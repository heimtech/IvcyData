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

$this->loadDataContainer('tl_megamenu');


$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] = str_replace('description;', 'description;{t4c_megamenu_legend:hide},t4c_megamenu_show;', $GLOBALS['TL_DCA']['tl_page']['palettes']['regular']);

$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'][] =  't4c_megamenu_show';
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['t4c_megamenu_show']= 't4c_megamenu_selected_module';

$GLOBALS['TL_DCA']['tl_page']['fields']['t4c_megamenu_show'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['t4c_megamenu_show'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12',  'submitOnChange'=>true),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_page']['fields']['t4c_megamenu_selected_module'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_page']['t4c_megamenu_selected_module'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_megamenu', 'getMenus'),
	'eval'                    => array('mandatory'=>true, 'chosen'=>true, 'tl_class'=>'w50 clr'),
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);