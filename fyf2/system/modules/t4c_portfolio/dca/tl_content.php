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
 * Dynamically add the parent table
 */
if (Input::get('do') == 't4c_portfolio')
{
    $GLOBALS['TL_DCA']['tl_content']['config']['ptable'] = 'tl_t4c_portfolio_item';
}
