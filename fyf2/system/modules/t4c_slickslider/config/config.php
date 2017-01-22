<?php

/**
 * MegaMenu extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package t4c_slickslider
 * @author  Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */




/**
 * Content elements
 */
$GLOBALS['TL_CTE']['t4c_elements']['t4c_slick_slider_start']	= 'themes4contao\ContentSlickSliderStart';
$GLOBALS['TL_CTE']['t4c_elements']['t4c_slick_slider_stop']		= 'themes4contao\ContentSlickSliderStop';

/**
 * Wrapper elements
 */
$GLOBALS['TL_WRAPPERS']['start'][] 								= 't4c_slick_slider_start';
$GLOBALS['TL_WRAPPERS']['stop'][] 								= 't4c_slick_slider_stop';

/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['content'], 7, array
(
	'slickslider' => array
	(
		'tables'      => array('tl_slickslider'),
		'icon'        => 'system/modules/t4c_slickslider/assets/slickslider.png'
	)
));


/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_slickslider'] = 'themes4contao\SlickSliderModel';

