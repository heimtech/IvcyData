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
 
if(Input::get('do') == 'footer')
{
	$GLOBALS['TL_DCA']['tl_content']['config']['ptable'] = 'tl_footer';
}