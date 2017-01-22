<?php

/**
 * themes4contao extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package themes4contao
 * @author Lukas Manka <support@themes4contao.com>
 * @license Commercial
 */
 
$GLOBALS['TL_DCA']['tl_module']['palettes']['newslist']	= str_replace('skipFirst', 'skipFirst,t4c_news_columns,t4c_news_columns_tablet,t4c_news_columns_mobile,t4c_news_gutter_size', $GLOBALS['TL_DCA']['tl_module']['palettes']['newslist']);
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsarchive']	= str_replace('news_format', 'news_format,t4c_news_columns,t4c_news_columns_tablet,t4c_news_columns_mobile,t4c_news_gutter_size', $GLOBALS['TL_DCA']['tl_module']['palettes']['newsarchive']);
$GLOBALS['TL_DCA']['tl_module']['palettes']['sitemap']	= str_replace('showHidden', 'showHidden,showIcons', $GLOBALS['TL_DCA']['tl_module']['palettes']['sitemap']);
$GLOBALS['TL_DCA']['tl_module']['palettes']['customnav']	= str_replace('showProtected', 'showProtected,showIcons', $GLOBALS['TL_DCA']['tl_module']['palettes']['customnav']);
$GLOBALS['TL_DCA']['tl_module']['palettes']['navigation']	= str_replace('showHidden', 'showHidden,showIcons', $GLOBALS['TL_DCA']['tl_module']['palettes']['navigation']);




 /**
 * Add fields to tl_module
 */
 
$GLOBALS['TL_DCA']['tl_module']['fields']['showIcons'] = array
(
   	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['showIcons'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);
 
$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_news_columns'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_news_columns'],
    'default'                 => 2,
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array(1, 2, 3, 4, 5),
    'eval'                    => array('tl_class'=>'w50','includeBlankOption'=>true),
    'sql'                     => "smallint(1) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_news_columns_tablet'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_news_columns_tablet'],
    'default'                 => 2,
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array(1, 2, 3, 4, 5),
    'eval'                    => array('tl_class'=>'w50', 'includeBlankOption'=>true),
    'sql'                     => "smallint(1) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_news_columns_mobile'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_news_columns_mobile'],
    'default'                 => 2,
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array(1, 2, 3, 4, 5),
    'eval'                    => array('tl_class'=>'w50', 'includeBlankOption'=>true),
    'sql'                     => "smallint(1) unsigned NOT NULL default '0'"
);

 
?>