<?php

/**
 * t4c_columns extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package t4c_columns
 * @author  Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */


if (TL_MODE == 'BE')
        {
		 	$GLOBALS['TL_JAVASCRIPT']['t4c_jquery'] = 'assets/jquery/core/' . $GLOBALS['TL_ASSETS']['JQUERY'] . '/jquery.min.js';
			$GLOBALS['TL_JAVASCRIPT']['t4c_jquery_con_confilct'] = 'system/modules/t4c_elements/assets/js/jquery.noconflict.js';
			$GLOBALS['TL_JAVASCRIPT']['t4c_columns'] = 'system/modules/t4c_columns/assets/js/t4c_columns.js';
			$GLOBALS['TL_CSS']['t4c_backend'] = 'system/modules/t4c_columns/assets/css/backend.css';
        }

/**
 * Content elements
 */
$GLOBALS['TL_CTE']['t4c_columns'] = array
(
    't4c_column_wrapper_start' 						=> 'themes4contao\ContentColumnWrapperStart',
    't4c_column_wrapper_stop'  						=> 'themes4contao\ContentColumnWrapperStop',
    't4c_column_start'         						=> 'themes4contao\ContentColumnStart',
    't4c_column_stop'          						=> 'themes4contao\ContentColumnStop',
);


/**
 * Front end form fields
 */
$GLOBALS['TL_FFL']['t4c_column_wrapper_start'] 		= 'themes4contao\FormColumnWrapperStart';
$GLOBALS['TL_FFL']['t4c_column_wrapper_stop']  		= 'themes4contao\FormColumnWrapperStop';
$GLOBALS['TL_FFL']['t4c_column_start']         		= 'themes4contao\FormColumnStart';
$GLOBALS['TL_FFL']['t4c_column_stop']          		= 'themes4contao\FormColumnStop';


/**
 * Register wrappers
 */
$GLOBALS['TL_WRAPPERS']['start'][] 					= 't4c_column_wrapper_start';
$GLOBALS['TL_WRAPPERS']['start'][] 					= 't4c_column_start';
$GLOBALS['TL_WRAPPERS']['stop'][] 					= 't4c_column_wrapper_stop';
$GLOBALS['TL_WRAPPERS']['stop'][] 					= 't4c_column_stop';


/**
 * Add the stylesheet to Form back end module
 */
$GLOBALS['BE_MOD']['content']['form']['stylesheet'][] = 'system/modules/t4c_columns/assets/css/backend.css';
