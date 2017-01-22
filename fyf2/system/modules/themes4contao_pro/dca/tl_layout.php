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



$GLOBALS['TL_DCA']['tl_layout']['palettes']['default'] = str_replace('cols', 'cols, pro_main_cl_width,pro_main_cl_class', $GLOBALS['TL_DCA']['tl_layout']['palettes']['default']);

$GLOBALS['TL_DCA']['tl_layout']['subpalettes']['cols_2cll'] = str_replace('widthLeft', 'pro_content_layout,pro_left_cl_width,pro_left_cl_class,widthLeft', $GLOBALS['TL_DCA']['tl_layout']['subpalettes']['cols_2cll']);
$GLOBALS['TL_DCA']['tl_layout']['subpalettes']['cols_2clr'] = str_replace('widthRight', 'pro_content_layout,pro_right_cl_width,pro_right_cl_class,widthRight', $GLOBALS['TL_DCA']['tl_layout']['subpalettes']['cols_2clr']);
$GLOBALS['TL_DCA']['tl_layout']['subpalettes']['cols_3cl'] = str_replace('widthLeft,widthRight', 'pro_content_layout,pro_left_cl_width,pro_left_cl_class,pro_right_cl_width,pro_right_cl_class,widthLeft,widthRight', $GLOBALS['TL_DCA']['tl_layout']['subpalettes']['cols_3cl']);


$GLOBALS['TL_DCA']['tl_layout']['fields']['pro_main_cl_width'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['pro_main_cl_width'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('1','2','3','4','5','6','7','8','9','10','11','12'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_layout']['ref_pro_cl_width'],
    'eval'                    => array('tl_class'=>'w50', 'includeBlankOption'=>true),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['pro_main_cl_class'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['pro_main_cl_class'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);


$GLOBALS['TL_DCA']['tl_layout']['fields']['pro_left_cl_width'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['pro_left_cl_width'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('1','2','3','4','5','6','7','8','9','10','11','12'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_layout']['ref_pro_cl_width'],
    'eval'                    => array('tl_class'=>'w50', 'includeBlankOption'=>true),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['pro_left_cl_class'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['pro_left_cl_class'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['pro_right_cl_width'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['pro_right_cl_width'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('1','2','3','4','5','6','7','8','9','10','11','12'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_layout']['ref_pro_cl_width'],
    'eval'                    => array('tl_class'=>'w50', 'includeBlankOption'=>true),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['pro_right_cl_class'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['pro_right_cl_class'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['pro_content_layout'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['pro_content_layout'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('boxed', 'full_width'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_layout']['ref_pro_content_layout'],
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(24) NOT NULL default ''"
);