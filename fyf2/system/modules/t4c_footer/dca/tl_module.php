<?php

/**
 * MegaMenu extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package t4c_megamenu
 * @author  Themes4Contao <support@themes4contao.com>>
 * @license Commercial
 */

/**
 * Add a palette to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['t4c_footer'] = '{title_legend},name,headline,type,t4c_footer;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_footer'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_footer'],
    'exclude'                 => true,
    'inputType'               => 'checkboxWizard',
    'foreignKey'              => 'tl_footer.title',
    'eval'                    => array('mandatory'=>true, 'multiple'=>true,  'tl_class'=>'w50 wizard'),
    'sql'                     => "blob NULL"
);