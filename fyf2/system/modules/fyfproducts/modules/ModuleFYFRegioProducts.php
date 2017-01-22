<?php 

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package   bepla
 * @author    Joerg Barres
 * @license   GNU
 * @copyright Joerg Barres 2013

*https://docs.contao.org/books/cookbook/en/custom-module/part3.html
 */



class ModuleFYFRegioProducts extends \Module
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_fyf_regio_products';


	/**
	 * Generate the module
	 */
	protected function compile()
	{	

        $objTemplate = New FrontendTemplate(strTemplate); 



	
	}






/*
	protected function echo()
	{	

        $this->Template = $objTemplate->parse(); 

	
	}
*/
}
?>
