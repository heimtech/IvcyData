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
 * Extend the tl_layout palette
 */
$GLOBALS['TL_DCA']['tl_layout']['palettes']['default'] = str_replace('loadingOrder;', ',loadingOrder;{t4c_legend},t4c_configuration;', $GLOBALS['TL_DCA']['tl_layout']['palettes']['default']);


/**
 * Add fields to tl_layout
 */
$GLOBALS['TL_DCA']['tl_layout']['fields']['t4c_configuration'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['t4c_configuration'],
    'exclude'                 => true,
    'filter'                  => true,
    'inputType'               => 'select',
    'options_callback'        => array('tl_layout_themes4contao', 'getThemeConfigurations'),
    'eval'                    => array('chosen'=>true, 'includeBlankOption'=>true, 'tl_class'=>'clr'),
    'sql'                     => "int(10) unsigned NOT NULL default '0'"
);


/**
 * Provide miscellaneous methods that are used by the data configuration array.
 */
class tl_layout_themes4contao extends Backend
{

    /**
     * Get the theme configurations and return it as array
     * @param object
     * @return array
     */
    public function getThemeConfigurations($dc)
    {
        $arrConfigurations = array();
        $objConfigurations = $this->Database->prepare("SELECT * FROM tl_themes4contao WHERE pid=(SELECT pid FROM tl_layout WHERE id=?) ORDER BY name")
                                            ->execute($dc->id);

        while ($objConfigurations->next())
        {
            $arrConfigurations[$objConfigurations->id] = $objConfigurations->name . ($objConfigurations->fallback ? ' [' . $GLOBALS['TL_LANG']['MSC']['fallback'] . ']' : '');
        }

        return $arrConfigurations;
    }
}
