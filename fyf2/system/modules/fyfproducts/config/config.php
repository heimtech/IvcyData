<?php
 
/**
 * Back end modules
 */
$GLOBALS['FE_MOD']['fyfproducts'] = array
(
	'products_list'     => 'ModuleFYFProductsList',
	'create_product'     => 'ModuleFYFCreateProduct',
	'own_products'     => 'ModuleFYFOwnProduct',
	'user_dashboard'     => 'ModuleFYFUserDashboard',
	'products_search'     => 'ModuleFYFProductsSearch',
		'regio_products'     => 'ModuleFYFRegioProducts'
		
);

/*
$GLOBALS['TL_HOOKS']['simpleAjax'][] = array('ProductsService', 'getProducts'); // Klassenname - Methodenname
?>
*/