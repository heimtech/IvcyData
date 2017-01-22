<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'ProductsService'       => 'system/modules/fyfproducts/modules/ProductsService.php',
	'ModuleFYFCreateProduct' => 'system/modules/fyfproducts/modules/ModuleFYFCreateProduct.php',
	'ModuleFYFProductsList' => 'system/modules/fyfproducts/modules/ModuleFYFProductsList.php',
	'ModuleFYFOwnProduct' => 'system/modules/fyfproducts/modules/ModuleFYFOwnProduct.php',
	'ModuleFYFUserDashboard' => 'system/modules/fyfproducts/modules/ModuleFYFUserDashboard.php',
	'ModuleFYFProductsSearch' => 'system/modules/fyfproducts/modules/ModuleFYFProductsSearch.php',
	'ModuleFYFRegioProducts' => 'system/modules/fyfproducts/modules/ModuleFYFRegioProducts.php'
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_fyf_products_list' => 'system/modules/fyfproducts/templates',
	'mod_fyf_create_product' => 'system/modules/fyfproducts/templates',
	'mod_fyf_own_product' => 'system/modules/fyfproducts/templates',
	'mod_fyf_user_dashboard' => 'system/modules/fyfproducts/templates',
	'mod_fyf_products_search' => 'system/modules/fyfproducts/templates',
	'mod_fyf_products_search' => 'system/modules/fyfproducts/templates',
	'mod_fyf_regio_products' => 'system/modules/fyfproducts/templates'
		
		
));
