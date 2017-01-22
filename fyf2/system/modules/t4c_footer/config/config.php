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
$GLOBALS['FE_MOD']['t4c_footer'] = array
(
	't4c_footer' => '\themes4contao\FooterModule'
);

/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['design'], 3, array
(
	'footer' => array
	(
		'tables'      => array('tl_footer', 'tl_content'),
		'icon'        => 'system/modules/t4c_footer/assets/footer.png'
	)
));


/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_footer'] = 'themes4contao\FooterModel';

