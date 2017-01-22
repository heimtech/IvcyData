<?php

/**
 * MegaMenu extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package t4c_megamenu
 * @author  Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */


/**
 * Load tl_content language file
 */
System::loadLanguageFile('tl_content');


/**
 * Table tl_megamenu
 */
$GLOBALS['TL_DCA']['tl_megamenu'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'ctable'                      => array('tl_content'),
		'switchToEdit'                => true,
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary'			)
		)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 1,
			'fields'                  => array('title'),
			'panelLayout'             => 'filter;sort,search,limit'
		),
		
		'label' => array
		(
			'fields'                  => array('title'),
			'format'                  => '%s'
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
				'label'               => &$GLOBALS['TL_LANG']['tl_megamenu']['edit'],
				'href'                => 'table=tl_content',
				'icon'                => 'edit.gif'
			),
			'editheader' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_megamenu']['editmeta'],
				'href'                => 'act=edit',
				'icon'                => 'header.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_megamenu']['copy'],
				'href'                => 'act=paste&amp;mode=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_megamenu']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_megamenu']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'				  => array('bg_type'),
		'default'                     => '{title_legend},title,width,fontcolor,bgcolor,image,image_settings,image_position;{expert_legend:hide},cssClass;'
	),

	// Fields
	'fields' => array
	(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		
		'title' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_megamenu']['title'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		
		'width' => array
		(
    		'label'                   => &$GLOBALS['TL_LANG']['tl_megamenu']['width'],
   		 	'exclude'                 => true,
    		'inputType'               => 'inputUnit',
    		'options'                 => array('px', '%'),
    		'eval'                    => array('includeBlankOption'=>true, 'rgxp'=>'digit_inherit', 'maxlength'=>20, 'tl_class'=>'w50'),
    		'sql'                     => "varchar(64) NOT NULL default ''"
		),
		
		'fontcolor' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_megamenu']['fontcolor'],
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),

		
		'bg_type' => array
		(
		
			'label'                   => &$GLOBALS['TL_LANG']['tl_megamenu']['bg_type'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'       		  => array('color', 'image'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_menu']['ref_bg_type'],
			'eval'                    => array('submitOnChange'=>true, 'includeBlankOption'=>true),
			'sql'                     => "varchar(12) NOT NULL default ''"
		),
		
		'bgcolor' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_megamenu']['bgcolor'],
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>6, 'multiple'=>true, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),

		'image' => array
		(
		    'label'                   => &$GLOBALS['TL_LANG']['tl_megamenu']['image'],
		    'exclude'                 => true,
		    'inputType'               => 'fileTree',
		    'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes'], 'tl_class'=>'clr'),
		    'sql'                     => "binary(16) NULL"
		),
 		
		'image_settings' => array
		(
		    'label'                   => &$GLOBALS['TL_LANG']['tl_megamenu']['image_settings'],
		    'exclude'                 => true,
		    'inputType'               => 'select',
		    'options'                 => array('', 'cover', 'contain', 'repeat', 'repeat-x', 'repeat-y', 'no-repeat'),
		    'reference'               => &$GLOBALS['TL_LANG']['tl_megamenu']['ref_image_settings'],
		    'eval'                    => array('tl_class'=>'w50'),
		    'sql'                     => "varchar(12) NOT NULL default ''"
		),

		'image_position' => array
		(
		    'label'                   => &$GLOBALS['TL_LANG']['tl_megamenu']['image_position'],
		    'exclude'                 => true,
		    'inputType'               => 'select',
		    'options'                 => array('', 'Center Center', 'Left Top', 'Right Top', 'Left Bottom', 'Right Bottom', 'Left Center', 'Right Center', 'Center Top', 'Center Bottom'),
		    'reference'               => &$GLOBALS['TL_LANG']['tl_article']['ref_image_position'],
		    'eval'                    => array('tl_class'=>'w50'),
		    'sql'                     => "varchar(16) NOT NULL default ''"
		),		
		
		'cssClass' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_megamenu']['cssClass'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
	)
);

class tl_megamenu extends Backend
{
	/**
	 * Get all menus and return them as array
	 *
	 * @return array
	 */
	public function getMenus()
	{
		
		$arrMenus = array();
		$obMenus = $this->Database->execute("SELECT * FROM tl_megamenu ORDER BY title");

		while ($obMenus->next())
		{
			$arrMenus[$obMenus->id] = $obMenus->title . ' (ID ' . $obMenus->id . ')';
		}

		return $arrMenus;
	}

}

