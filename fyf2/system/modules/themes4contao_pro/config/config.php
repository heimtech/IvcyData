<?php

/**
 * themes4contao_alpha extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package themes4contao_alpha
 * @author  Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @license Commercial
 */

$GLOBALS['T4C_CSS'][] = '';

/**
 * Register theme
 */
$GLOBALS['T4C_THEMES'][] = 'pro';

if(Config::isComplete()){
	$GLOBALS['TL_HOOKS']['parseTemplate'][] = array('themes4contao_pro', 'articleCompile');
	$GLOBALS['TL_HOOKS']['parseTemplate'][] = array('themes4contao_pro', 'addElementsAnimation');
	$GLOBALS['TL_HOOKS']['parseTemplate'][] = array('themes4contao_pro', 'extHeadline');
	$GLOBALS['TL_HOOKS']['parseTemplate'][] = array('themes4contao_pro', 'showIcons');
}
$GLOBALS['TL_HOOKS']['generatePage'][] = array('themes4contao_pro', 'generateCss');
$GLOBALS['T4C_SCSS']					= array('alert_box', 'blockquote', 'circle_progress', 'contactinfo', 'counters', 'custom_list',	'dividers',	'flip_box',	'flipclock', 'form', 'header',	'helper', 'icon', 'icon_box', 'icon_button', 'icons_list', 'news', 'quick_facts', 'layout', 'portfolio', 'promo_box', 'rows', 'rows_separator', 'social_icons', 'team', 'timeline', 'typography');
$GLOBALS['T4C_SCSS_ELEMENTS']			= array('alert_box', 'blockquote', 'circle_progress', 'contactinfo', 'counters', 'custom_list',	'dividers',	'flip_box',	'flipclock', 'helper', 'icon', 'icon_box', 'icon_button', 'icons_list', 'quick_facts', 'promo_box', 'social_icons', 'team', 'typography');