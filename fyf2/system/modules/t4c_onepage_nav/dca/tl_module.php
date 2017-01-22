<?php

/**
 * MegaMenu extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package t4c_onepage_nav
 * @author  Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */

/**
 * Add a palette to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['t4c_onepage_nav'] = '{title_legend},name,headline,type,t4c_onepage_menu,showIcons;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

$GLOBALS['TL_DCA']['tl_module']['fields']['t4c_onepage_menu'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['t4c_onepage_menu'],
	'exclude' 		=> true,
	'inputType' 	=> 'multiColumnWizard',
	'eval' 			=> array
	(
		'columnFields' => array
		(
			
			't4c_onepage_title' => array
			(
				'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_onepage_title'],
				'inputType'               => 'text',
				'eval'                    => array('style' => 'width:160px', 'maxlength'=>200, 'tl_class'=>'w50 wizard'),
			),
			't4c_onepage_section' => array
			(
				'label'			 		=> &$GLOBALS['TL_LANG']['tl_module']['t4c_onepage_section'],
				'inputType' 			=> 'text',
				'eval'                  => array('style'=>'width:80px','maxlength'=>200)
			),
			't4c_onepage_icon' => array
			(
				'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_onepage_icon'],
				'inputType'               => 'iconpicker',
				'eval' 					  => array('style' => 'width:180px')
			),
			't4c_onepage_link' => array
			(
				'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_onepage_link'],
				'inputType'               => 'text',
				'eval'                    => array('style' => 'width:100px', 'maxlength'=>200, 'tl_class'=>'w50 wizard'),
			),
			't4c_onepage_target' => array
			(
				 'label'                   => &$GLOBALS['TL_LANG']['tl_module']['t4c_onepage_target'],
    			 'inputType'               => 'checkbox',
			      'eval'                    => array('tl_class'=>'w50'),
			)
		)
	),
	'sql'                     => "blob NULL"
); 

