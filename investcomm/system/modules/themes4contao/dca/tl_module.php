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
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['t4c_template'] = '{title_legend},name,type;{template_legend},t4c_template;{protected_legend:hide},protected;{expert_legend:hide},guests';


/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_template'] = array
(
    'label'                => &$GLOBALS['TL_LANG']['tl_module']['t4c_template'],
    'default'              => 't4c_template_default',
    'exclude'              => true,
    'inputType'            => 'select',
    'options_callback'     => array('tl_module_themes4contao', 'getT4CTemplates'),
    'eval'                 => array('chosen'=>true),
    'sql'                  => "varchar(128) NOT NULL default ''"
);


/**
 * Provide miscellaneous methods that are used by the data configuration array.
 */
class tl_module_themes4contao extends Backend
{

    /**
     * Return all themes4contao templates as array
     * @return array
     */
    public function getT4CTemplates()
    {
        return $this->getTemplateGroup('t4c_template_');
    }
}
