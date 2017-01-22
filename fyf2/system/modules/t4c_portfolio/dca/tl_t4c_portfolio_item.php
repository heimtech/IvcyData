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
 * Load tl_content language file
 */
\System::loadLanguageFile('tl_content');


/**
 * Table tl_t4c_portfolio_item
 */
$GLOBALS['TL_DCA']['tl_t4c_portfolio_item'] = array
(

    // Config
    'config' => array
    (
        'dataContainer'               => 'Table',
        'ptable'                      => 'tl_t4c_portfolio',
        'ctable'                      => array('tl_content'),
        'enableVersioning'            => true,
        'oncopy_callback' => array
        (
            array('tl_t4c_portfolio_item', 'resetDateCreated')
        ),
        'onsubmit_callback' => array
        (
            array('tl_t4c_portfolio_item', 'storeDateCreated')
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
            'fields'                  => array('sorting'),
            'headerFields'            => array('name', 'tstamp'),
            'panelLayout'             => 'filter,search,limit',
            'child_record_callback'   => array('tl_t4c_portfolio_item', 'generateLabel')
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
                'label'               => &$GLOBALS['TL_LANG']['tl_t4c_portfolio_item']['edit'],
                'href'                => 'table=tl_content',
                'icon'                => 'edit.gif'
            ),
            'editheader' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_t4c_portfolio_item']['editheader'],
                'href'                => 'act=edit',
                'icon'                => 'header.gif'
            ),
            'copy' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_t4c_portfolio_item']['copy'],
                'href'                => 'act=paste&amp;mode=copy',
                'icon'                => 'copy.gif'
            ),
            'cut' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_t4c_portfolio_item']['cut'],
                'href'                => 'act=paste&amp;mode=cut',
                'icon'                => 'cut.gif'
            ),
            'delete' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_t4c_portfolio_item']['delete'],
                'href'                => 'act=delete',
                'icon'                => 'delete.gif',
                'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
            ),
            'toggle' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_t4c_portfolio_item']['toggle'],
                'icon'                => 'visible.gif',
                'attributes'          => 'onclick="Backend.getScrollOffset();return AjaxRequest.toggleVisibility(this,%s)"',
                'button_callback'     => array('tl_t4c_portfolio_item', 'toggleIcon')
            ),
            'show' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_t4c_portfolio_item']['show'],
                'href'                => 'act=show',
                'icon'                => 'show.gif'
            )
        )
    ),

    // Palettes
    'palettes' => array
    (
        'default'                     => '{name_legend},name,alias,client,description,online;{media_legend},singleSRC,singleSRC_hover,fullImage,textColor,bgColor;{publish_legend},published'
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
            'foreignKey'              => 'tl_t4c_portfolio.id',
            'sql'                     => "int(10) unsigned NOT NULL default '0'",
            'relation'                => array('type'=>'belongsTo', 'load'=>'eager')
        ),
        'sorting' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'dateCreated' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'tstamp' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'name' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_t4c_portfolio_item']['name'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'alias' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_t4c_portfolio_item']['alias'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'alias', 'doNotCopy' => true, 'spaceToUnderscore'=>true, 'maxlength'=>128, 'tl_class'=>'w50'),
            'save_callback' => array
            (
                array('tl_t4c_portfolio_item', 'generateAlias')
            ),
            'sql'                     => "varbinary(128) NOT NULL default ''"
        ),
        'description' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_t4c_portfolio_item']['description'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'textarea',
            'eval'                    => array('rte'=>'tinyMCE', 'tl_class'=>'clr'),
            'sql'                     => "text NULL"
        ),
		'client' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_t4c_portfolio_item']['client'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'singleSRC' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_t4c_portfolio_item']['singleSRC'],
            'exclude'                 => true,
            'inputType'               => 'fileTree',
            'eval'                    => array('mandatory'=>true, 'files'=>true, 'filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes']),
            'sql'                     => "binary(16) NULL",
            'relation'                => array('type'=>'belongsTo', 'load'=>'eager', 'table'=>'tl_files', 'field'=>'uuid')
        ),
		'singleSRC_hover' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_t4c_portfolio_item']['singleSRC_hover'],
            'exclude'                 => true,
            'inputType'               => 'fileTree',
            'eval'                    => array('files'=>true, 'filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes']),
            'sql'                     => "binary(16) NULL",
            'relation'                => array('type'=>'belongsTo', 'load'=>'eager', 'table'=>'tl_files', 'field'=>'uuid')
        ),
		'fullImage' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_t4c_portfolio_item']['fullImage'],
            'exclude'                 => true,
            'inputType'               => 'fileTree',
            'eval'                    => array('files'=>true, 'filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes']),
            'sql'                     => "binary(16) NULL",
            'relation'                => array('type'=>'belongsTo', 'load'=>'eager', 'table'=>'tl_files', 'field'=>'uuid')
        ),
		'online' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_t4c_portfolio_item']['online'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
		'textColor' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_t4c_portfolio_item']['textColor'],
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'bgColor' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_t4c_portfolio_item']['bgColor'],
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
        'published' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_t4c_portfolio_item']['published'],
            'exclude'                 => true,
            'filter'                  => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('doNotCopy'=>true),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
    )
);


/**
 * Provide miscellaneous methods that are used by the data configuration array.
 */
class tl_t4c_portfolio_item extends Backend
{

    /**
     * Store date created
     * @param \DataContainer
     */
    public function storeDateCreated(\DataContainer $dc)
    {
        if (!$dc->activeRecord->dateCreated)
        {
            $this->Database->prepare("UPDATE tl_t4c_portfolio_item SET dateCreated=? WHERE id=?")
                           ->execute(time(), $dc->id);
        }
    }

    /**
     * Reset date created
     * @param $id
     */
    public function resetDateCreated($id)
    {
        $this->Database->prepare("UPDATE tl_t4c_portfolio_item SET dateCreated=? WHERE id=?")
                       ->execute(time(), $id);
    }


    /**
     * Generate the label
     * @param array
     * @return string
     */
    public function generateLabel($arrRow)
    {
        return '<div>' . $arrRow['name'] . '</div>';
    }


    /**
     * Auto-generate the item alias if it has not been set yet
     * @param mixed
     * @param DataContainer
     * @return string
     */
    public function generateAlias($varValue, DataContainer $dc)
    {
        $autoAlias = false;

        // Generate alias if there is none
        if ($varValue == '')
        {
            $autoAlias = true;
            $varValue = standardize($this->restoreBasicEntities($dc->activeRecord->name));
        }

        $objAlias = $this->Database->prepare("SELECT id FROM tl_t4c_portfolio_item WHERE alias=?")
                                   ->execute($varValue);

        // Check whether the item alias exists
        if ($objAlias->numRows > 1 && !$autoAlias)
        {
            throw new Exception(sprintf($GLOBALS['TL_LANG']['ERR']['aliasExists'], $varValue));
        }

        // Add ID to alias
        if ($objAlias->numRows && $autoAlias)
        {
            $varValue .= '-' . $dc->id;
        }
		return $varValue;
    }


    /**
     * Return the "toggle visibility" button
     * @param array
     * @param string
     * @param string
     * @param string
     * @param string
     * @param string
     * @return string
     */
    public function toggleIcon($row, $href, $label, $title, $icon, $attributes)
    {
        if (strlen(Input::get('tid')))
        {
            $this->toggleVisibility(Input::get('tid'), (Input::get('state') == 1));
            $this->redirect($this->getReferer());
        }

        $href .= '&amp;tid='.$row['id'].'&amp;state='.($row['published'] ? '' : 1);

        if (!$row['published'])
        {
            $icon = 'invisible.gif';
        }

        return '<a href="'.$this->addToUrl($href).'" title="'.specialchars($title).'"'.$attributes.'>'.Image::getHtml($icon, $label).'</a> ';
    }


    /**
     * Publish/unpublish an item
     * @param integer
     * @param boolean
     */
    public function toggleVisibility($intId, $blnVisible)
    {
        $objVersions = new Versions('tl_t4c_portfolio_item', $intId);
        $objVersions->initialize();

        // Trigger the save_callback
        if (is_array($GLOBALS['TL_DCA']['tl_t4c_portfolio_item']['fields']['published']['save_callback']))
        {
            foreach ($GLOBALS['TL_DCA']['tl_t4c_portfolio_item']['fields']['published']['save_callback'] as $callback)
            {
                $this->import($callback[0]);
                $blnVisible = $this->$callback[0]->$callback[1]($blnVisible, $this);
            }
        }

        // Update the database
        $this->Database->prepare("UPDATE tl_t4c_portfolio_item SET tstamp=". time() .", published='" . ($blnVisible ? 1 : '') . "' WHERE id=?")
                       ->execute($intId);

        $objVersions->create();
        $this->log('A new version of record "tl_t4c_portfolio_item.id='.$intId.'" has been created'.$this->getParentEntries('tl_t4c_portfolio_item', $intId), __METHOD__, TL_GENERAL);
    }
}
