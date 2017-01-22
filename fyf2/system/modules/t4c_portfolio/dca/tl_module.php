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
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['t4c_portfolio_list']   = '{title_legend},name,headline,type;{config_legend},t4c_portfolio_style,t4c_portfolio,t4c_portfolio_filter,t4c_portfolio_filter_style,t4c_portfolio_filter_position,perPage,numberOfItems;{template_legend:hide},imgSize,t4c_portfolio_columns,t4c_portfolio_columns_tablet,t4c_portfolio_columns_mobile,t4c_portfolio_gutter_size,t4c_portfolio_layout;{show_hide_legend:hide},t4c_portfolio_display_client,t4c_portfolio_display_category,t4c_portfolio_display_more,t4c_portfolio_display_redirect,t4c_portfolio_display_zoom,t4c_portfolio_display_name,t4c_portfolio_textColor,t4c_portfolio_bgColor;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['t4c_portfolio_reader'] = '{title_legend},name,headline,type;{template_legend:hide},imgSize,t4c_portfolio_template;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';


/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_portfolio'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_portfolio'],
    'exclude'                 => true,
    'inputType'               => 'checkboxWizard',
    'foreignKey'              => 'tl_t4c_portfolio.name',
    'eval'                    => array('mandatory'=>true, 'multiple'=>true),
    'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_portfolio_filter'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_portfolio_filter'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'clr'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_portfolio_filter_style'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_portfolio_filter_style'],
    'default'                 => 'style_1',
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('style_1', 'style_2', 'style_3', 'style_4', 'style_5', 'style_6', 'style_7', 'style_8'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content']['ref_t4c_portfolio_filter_style'],
    'eval'                    => array('tl_class'=>'w50', 'helpwizard'=>true),
    'sql'                     => "char(12) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_portfolio_filter_position'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_portfolio_filter_position'],
    'default'                 => 'center',
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('center', 'right', 'left'),
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(12) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_portfolio_template'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_portfolio_template'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options_callback'        => array('tl_module_t4c_portfolio', 'getPortfolioTemplates'),
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_portfolio_columns'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_portfolio_columns'],
    'default'                 => 2,
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array(1, 2, 3, 4, 5),
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "smallint(1) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_portfolio_columns_tablet'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_portfolio_columns_tablet'],
    'default'                 => 2,
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array(1, 2, 3, 4, 5),
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "smallint(1) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_portfolio_columns_mobile'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_portfolio_columns_mobile'],
    'default'                 => 2,
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array(1, 2, 3, 4, 5),
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "smallint(1) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_portfolio_gutter_size'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_portfolio_gutter_size'],
    'exclude'                 => true,
  	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>10,  'tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_portfolio_layout'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_portfolio_layout'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('fitRows','masonry'),
    'eval'                    => array('tl_class'=>'w50', 'includeBlankOption'=>true),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_portfolio_style'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_portfolio_style'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('style_1','style_2','style_3', 'style_4','style_5','style_6','style_7','style_8', 'style_9', 'style_10'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content']['ref_t4c_portfolio_style'],
    'eval'                    => array('tl_class'=>'w50', 'includeBlankOption'=>true,  'helpwizard'=>true),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_portfolio_display_client'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_portfolio_display_client'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'m12 w50'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_portfolio_display_category'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_portfolio_display_category'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'m12 w50'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_portfolio_display_more'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_portfolio_display_more'],
    'default'				  => '1',
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'m12 w50'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_portfolio_display_redirect'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_portfolio_display_redirect'],
    'default'				  => '1',
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'m12 w50'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_portfolio_display_zoom'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_portfolio_display_zoom'],
	'default'				  => '1',
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'m12 w50'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_portfolio_display_name'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_portfolio_display_name'],
    'default'				  => '1',
	'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'m12 w50'),
    'sql'                     => "char(1) NOT NULL default ''"
);


$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_portfolio_textColor'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_portfolio_textColor'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);
			
$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_portfolio_bgColor'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_portfolio_bgColor'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);


/**
 * Provide miscellaneous methods that are used by the data configuration array.
 */
class tl_module_t4c_portfolio extends Backend
{

    /**
     * Get the portfolio templates
     * @return array
     */
    public function getPortfolioTemplates()
    {
        return $this->getTemplateGroup('t4c_portfolio_');
    }
}
