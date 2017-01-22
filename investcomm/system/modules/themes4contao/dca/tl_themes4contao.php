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
 * Table tl_themes4contao
 */
$GLOBALS['TL_DCA']['tl_themes4contao'] = array
(

    // Config
    'config' => array
    (
        'dataContainer'               => 'Table',
        'ptable'                      => 'tl_theme',
        'enableVersioning'            => true,
        'onload_callback' => array
        (
            array('tl_themes4contao', 'checkForFallback'),
            array('tl_themes4contao', 'setDefaultTheme'),
            array('tl_themes4contao', 'loadThemePalette'),
        ),
        'sql' => array
        (
            'keys' => array
            (
                'id' => 'primary',
                'pid' => 'index'
            )
        )
    ),

    // List
    'list' => array
    (
        'sorting' => array
        (
            'mode'                    => 4,
            'fields'                  => array('name'),
            'flag'                    => 1,
            'panelLayout'             => 'filter;search,limit',
            'headerFields'            => array('name', 'author', 'tstamp'),
            'child_record_callback'   => array('tl_themes4contao', 'generateLabel'),
            'child_record_class'      => 'no_padding'
        ),
        'global_operations' => array
        (
            'all' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'                => 'act=select',
                'class'               => 'header_edit_all',
                'attributes'          => 'onclick="Backend.getScrollOffset()" accesskey="e"'
            )
        ),
        'operations' => array
        (
            'edit' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_themes4contao']['edit'],
                'href'                => 'act=edit',
                'icon'                => 'edit.gif'
            ),
            'copy' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_themes4contao']['copy'],
                'href'                => 'act=paste&amp;mode=copy',
                'icon'                => 'copy.gif'
            ),
            'cut' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_themes4contao']['cut'],
                'href'                => 'act=paste&amp;mode=cut',
                'icon'                => 'cut.gif',
                'attributes'          => 'onclick="Backend.getScrollOffset()"'
            ),
            'delete' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_themes4contao']['delete'],
                'href'                => 'act=delete',
                'icon'                => 'delete.gif',
                'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
            ),
            'show' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_themes4contao']['show'],
                'href'                => 'act=show',
                'icon'                => 'show.gif'
            )
        )
    ),

    // Palettes
    'palettes' => array
    (
        '__selector__'                => array('theme'),
        'default'                     => '{name_legend},name,theme,fallback;'
    ),

    // Fields
    'fields' => array
    (
        'id' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL auto_increment"
        ),
        'pid' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'tstamp' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'name' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['name'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'theme' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['theme'],
            'exclude'                 => true,
            'filter'                  => true,
            'inputType'               => 'select',
            'options'                 => $GLOBALS['T4C_THEMES'],
            'reference'               => &$GLOBALS['TL_LANG']['tl_themes4contao']['theme'],
            'eval'                    => array('mandatory'=>true, 'submitOnChange'=>true, 'tl_class'=>'w50','includeBlankOption' => true),
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'fallback' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['fallback'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('doNotCopy'=>true, 'tl_class'=>'clr'),
            'sql'                     => "char(1) NOT NULL default ''",
            'save_callback' => array
            (
                array('tl_themes4contao', 'saveFallback')
            )
        ),
        'googleFonts' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['googleFonts'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'long clr'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'custom' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['custom'],
            'exclude'                 => true,
            'inputType'               => 'textarea',
            'eval'                    => array('class'=>'monospace clr', 'rte'=>'ace|css'),
            'sql'                     => "text NULL"
        ),
		 'custom_js' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_themes4contao']['custom_js'],
            'exclude'                 => true,
            'inputType'               => 'textarea',
            'eval'                    => array('class'=>'monospace clr', 'preserveTags'=>true, 'rte'=>'ace|html'),
            'sql'                     => "text NULL"
        ),
    )
);


/**
 * Provide miscellaneous methods that are used by the data configuration array.
 */
class tl_themes4contao extends Backend
{

    /**
     * Display a message if there is no fallback configuration
     */
    public function checkForFallback()
    {
        if (\Input::get('act'))
        {
            return;
        }

        $objFallback = $this->Database->prepare("SELECT * FROM tl_themes4contao WHERE pid=? AND fallback=1")
                                      ->limit(1)
                                      ->execute(\Input::get('id'));

        if (!$objFallback->numRows)
        {
            \Message::addError($GLOBALS['TL_LANG']['tl_themes4contao']['noFallback']);
        }
    }


    /**
     * Set the default theme
     * @param object
     */
    public function setDefaultTheme($dc=null)
    {
        if (!$dc->id)
        {
            return;
        }

        $this->Database->prepare("UPDATE tl_themes4contao SET theme=? WHERE id=? AND theme=''")
                       ->execute($GLOBALS['T4C_THEMES'][0], $dc->id);
    }


    /**
     * Append the theme palette to default one
     * @param object
     */
    public function loadThemePalette($dc=null)
    {
        if (!$dc->id)
        {
            return;
        }

        $objConfig = $this->Database->prepare("SELECT * FROM tl_themes4contao WHERE id=?")
                                    ->limit(1)
                                    ->execute($dc->id);

        if ($objConfig->theme != '')
        {
            $GLOBALS['TL_DCA']['tl_themes4contao']['palettes'][$objConfig->theme] = $GLOBALS['TL_DCA']['tl_themes4contao']['palettes']['default'] . $GLOBALS['TL_DCA']['tl_themes4contao']['palettes'][$objConfig->theme];
        }
    }


    /**
     * Generate label and return it as HTML string
     * @param array
     * @return string
     */
    public function generateLabel($arrRow)
    {
        return $arrRow['name'] . ($arrRow['fallback'] ? ' <span style="padding-left:3px;color:#b3b3b3;">[' . $GLOBALS['TL_LANG']['MSC']['fallback'] . ']</span>' : '');
    }


    /**
     * Return the file picker wizard
     * @param \DataContainer
     * @return string
     */
    public function filePicker(DataContainer $dc)
    {
        return ' <a href="contao/file.php?do='.Input::get('do').'&amp;table='.$dc->table.'&amp;field='.$dc->field.'&amp;value='.$dc->value.'" title="'.specialchars(str_replace("'", "\\'", $GLOBALS['TL_LANG']['MSC']['filepicker'])).'" onclick="Backend.getScrollOffset();Backend.openModalSelector({\'width\':765,\'title\':\''.specialchars($GLOBALS['TL_LANG']['MOD']['files'][0]).'\',\'url\':this.href,\'id\':\''.$dc->field.'\',\'tag\':\'ctrl_'.$dc->field . ((Input::get('act') == 'editAll') ? '_' . $dc->id : '').'\',\'self\':this});return false">' . Image::getHtml('pickfile.gif', $GLOBALS['TL_LANG']['MSC']['filepicker'], 'style="vertical-align:top;cursor:pointer"') . '</a>';
    }


    /**
     * Save fallback within one theme
     * @param mixed
     * @param object
     * @return mixed
     */
    public function saveFallback($varValue, DataContainer $dc)
    {
        if ($varValue)
        {
            $this->Database->prepare("UPDATE tl_themes4contao SET fallback='' WHERE id!=? AND pid=?")
                           ->execute($dc->id, $dc->activeRecord->pid);
        }

        return $varValue;
    }
}
