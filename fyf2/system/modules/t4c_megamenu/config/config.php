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



/**
 * Front end modules
 */
array_insert($GLOBALS['FE_MOD']['navigationMenu'], 2, array
(
	't4c_megamenu' => '\themes4contao\MegaMenuModule'
));

/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['design'], 3, array
(
	'megamenu' => array
	(
		'tables'      => array('tl_megamenu', 'tl_content'),
		'icon'        => 'system/modules/t4c_megamenu/assets/megamenu.png'
	)
));


/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_megamenu'] = 'themes4contao\MegaMenuModel';

