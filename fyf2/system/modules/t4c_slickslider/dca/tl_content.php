<?php 

/**
 * MegaMenu extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package t4c_slickslder
 * @author Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['t4c_slick_slider_start']		= '{type_legend},type,slickslider_config;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['t4c_slick_slider_stop']		= '{type_legend},type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

/**
 * Add fields to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['slickslider_config'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['slickslider_config'],
    'exclude'                 => true,
    'flag'                    => 1,
    'inputType'               => 'select',
    'options_callback'        => array('tl_content_slickslider_config', 'getConfig'),
    'eval'                    => array('doNotCopy'=>true, 'chosen'=>true, 'mandatory'=>true, 'tl_class'=>'w50'),
    'sql'                     => "int(10) unsigned NOT NULL default '0'"
);

class tl_content_slickslider_config extends Backend
{
    /**
     * Import the back end user object
     */
    public function __construct()
    {
        parent::__construct();
        $this->import('BackendUser', 'User');
    }

    /**
     * Get all galleries and return them as array
     * @return array
     */
    public function getConfig()
    {
        if (!$this->User->isAdmin && !is_array($this->User->slickslider)) {
            return array();
        }

        $arrSliders= array();
        $objSliders = $this->Database->execute("SELECT id, title FROM tl_slickslider ORDER BY title");

        while ($objSliders->next()) {
            if ($this->User->isAdmin || $this->User->hasAccess($objSliders->id, 'slickslider')) {
                $arrSliders[$objSliders->id] = $objSliders->title;
            }
        }

        return $arrSliders;
    }
}