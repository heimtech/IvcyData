<?php

/**
 * themes4contao extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package themes4contao
 * @author Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */

$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] = str_replace('title', 'title, pro_page_icon', $GLOBALS['TL_DCA']['tl_page']['palettes']['regular']);
$GLOBALS['TL_DCA']['tl_page']['palettes']['forward'] = str_replace('title', 'title, pro_page_icon', $GLOBALS['TL_DCA']['tl_page']['palettes']['forward']);
$GLOBALS['TL_DCA']['tl_page']['palettes']['redirect'] = str_replace('title', 'title, pro_page_icon', $GLOBALS['TL_DCA']['tl_page']['palettes']['redirect']);

$GLOBALS['TL_DCA']['tl_page']['fields']['pro_page_icon'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['pro_page_icon'],
    'exclude'                 => true,
    'inputType'               => 'iconpicker',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
