<?php

/**
 * themes4contao extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package themes4contao
 * @author  Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @license Commercial
 */


/**
 * Add the child table
 */
$GLOBALS['TL_DCA']['tl_theme']['config']['ctable'][] = 'tl_themes4contao';


/**
 * Add the buttons
 */
$GLOBALS['TL_DCA']['tl_theme']['list']['operations']['themes4contao'] = array
(
    'label'               => &$GLOBALS['TL_LANG']['tl_theme']['themes4contao'],
    'href'                => 'table=tl_themes4contao',
    'icon'                => 'system/modules/themes4contao/assets/images/icon.png',
    'attributes'          => 'Backend.getScrollOffset()"'
);
