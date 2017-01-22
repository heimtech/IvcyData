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
 * Add the table to themes module
 */
$GLOBALS['BE_MOD']['design']['themes']['tables'][] = 'tl_themes4contao';


/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['miscellaneous']['t4c_template'] = '\themes4contao\ModuleT4CTemplate';


/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['generatePage'][] = array('\themes4contao\themes4contao', 'initializeSystem');
$GLOBALS['TL_HOOKS']['generatePage'][] = array('\themes4contao\themes4contao', 'addCssStyles');
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('\themes4contao\themes4contao', 'replaceConfigTags');


/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_themes4contao'] = 'themes4contao\Themes4contaoModel';


/**
 * Themes
 */
$GLOBALS['T4C_THEMES'] = array();


/**
 * Versions
 */
$GLOBALS['T4C_VERSIONS']['fontastic'] = '4.0.3';

