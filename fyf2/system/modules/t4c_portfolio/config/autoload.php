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
 * Register the namespace
 */
ClassLoader::addNamespace('themes4contao');


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Classes
    'themes4contao\Portfolio'             => 'system/modules/t4c_portfolio/classes/Portfolio.php',

    // Modules
    'themes4contao\ModulePortfolio'       => 'system/modules/t4c_portfolio/modules/ModulePortfolio.php',
    'themes4contao\ModulePortfolioList'   => 'system/modules/t4c_portfolio/modules/ModulePortfolioList.php',
    'themes4contao\ModulePortfolioReader' => 'system/modules/t4c_portfolio/modules/ModulePortfolioReader.php',

    // Models
    'themes4contao\PortfolioModel'        => 'system/modules/t4c_portfolio/models/PortfolioModel.php',
    'themes4contao\PortfolioItemModel'    => 'system/modules/t4c_portfolio/models/PortfolioItemModel.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    // Modules
    'mod_t4c_portfolio_list'   			=> 'system/modules/t4c_portfolio/templates/modules',
    'mod_t4c_portfolio_reader' 			=> 'system/modules/t4c_portfolio/templates/modules',

    // Portfolio
    't4c_portfolio_list'      			=> 'system/modules/t4c_portfolio/templates/portfolio',
    't4c_portfolio_reader'     			=> 'system/modules/t4c_portfolio/templates/portfolio',
	't4c_portfolio_style_1'       		=> 'system/modules/t4c_portfolio/templates/portfolio',
	't4c_portfolio_style_2'       		=> 'system/modules/t4c_portfolio/templates/portfolio',
	't4c_portfolio_style_3'       		=> 'system/modules/t4c_portfolio/templates/portfolio',
	't4c_portfolio_style_4'       		=> 'system/modules/t4c_portfolio/templates/portfolio',
	't4c_portfolio_style_5'      		=> 'system/modules/t4c_portfolio/templates/portfolio',
	't4c_portfolio_style_6'       		=> 'system/modules/t4c_portfolio/templates/portfolio',
	't4c_portfolio_style_7'       		=> 'system/modules/t4c_portfolio/templates/portfolio',
	't4c_portfolio_style_8'      		=> 'system/modules/t4c_portfolio/templates/portfolio',
	't4c_portfolio_style_9'       		=> 'system/modules/t4c_portfolio/templates/portfolio',
	't4c_portfolio_style_10'       		=> 'system/modules/t4c_portfolio/templates/portfolio',
	't4c_portfolio_style_11'       		=> 'system/modules/t4c_portfolio/templates/portfolio',
));
