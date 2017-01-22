<?php

/**
 * t4c_portfolio extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package t4c_portfolio
 * @author  Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @license Commercial
 */


/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['content']['t4c_portfolio'] = array
(
    'tables' => array('tl_t4c_portfolio', 'tl_t4c_portfolio_item', 'tl_content'),
    'icon'   => 'system/modules/t4c_portfolio/assets/images/icon.png'
);


/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['t4c_portfolio'] = array
(
    't4c_portfolio_list'   => 'themes4contao\ModulePortfolioList',
    't4c_portfolio_reader' => 'themes4contao\ModulePortfolioReader'
);


/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_t4c_portfolio']      = 'themes4contao\PortfolioModel';
$GLOBALS['TL_MODELS']['tl_t4c_portfolio_item'] = 'themes4contao\PortfolioItemModel';


/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array('themes4contao\Portfolio', 'getSearchablePages');
