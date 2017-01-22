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
 * Extend tl_layout
 */


/**
 * SELECTORS
 */
$GLOBALS['TL_DCA']['tl_layout']['palettes']['__selector__'][] = 'addBootstrap';


/**
 * PALETTES
 */
$GLOBALS['TL_DCA']['tl_layout']['palettes']['default'] = str_replace('{mootools_legend}', '{bootstrap_legend:hide},addBootstrap;{mootools_legend}', $GLOBALS['TL_DCA']['tl_layout']['palettes']['default']);


/**
 * SUBPALETTES
 */
$GLOBALS['TL_DCA']['tl_layout']['subpalettes']['addBootstrap'] = 'bootstrap_source_js,bootstrap_source_css';


/**
 * FIELDS
 */
$GLOBALS['TL_DCA']['tl_layout']['fields']['addBootstrap'] = array
(
  'label'					=> &$GLOBALS['TL_LANG']['tl_layout']['addBootstrap'],
  'exclude'					=> true,
  'inputType'					=> 'checkbox',
  'eval'					=> array('submitOnChange'=>true),
  'sql' 					=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['bootstrap_source_js'] = array
(
  'label'                  			=> &$GLOBALS['TL_LANG']['tl_layout']['bootstrap_source_js'],
  'exclude'                 			=> true,
  'inputType'               			=> 'select',
  'options'					=> array('none','local','cdn','fb'),
  'reference' 					=> &$GLOBALS['TL_LANG']['tl_layout']['bootstrap_source_js_reference'],
  'sql'                     			=> "varchar(5) NOT NULL default 'none'"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['bootstrap_source_css'] = array
(
  'label'                  			=> &$GLOBALS['TL_LANG']['tl_layout']['bootstrap_source_css'],
  'exclude'                 			=> true,
  'inputType'               			=> 'select',
  'options'					=> array('none','local','cdn'),
  'reference' 					=> &$GLOBALS['TL_LANG']['tl_layout']['bootstrap_source_css_reference'],
  'sql'                     			=> "varchar(5) NOT NULL default 'none'"
);