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
namespace themes4contao;

class FooterModel extends \Model
{

	/**
	 * Table name
	 * @var string
	 */
	protected static $strTable = 'tl_footer';
	
	/**
	 * Find published items by ID
	 * @param array
	 * @return \Model\Collection|null
	 */
	public static function findByIds($arrIds)
	{
		if (!is_array($arrIds) || empty($arrIds))
		{
			return null;
		}

		$t = static::$strTable;
		$arrColumns = array("$t.id IN(" . implode(',', array_map('intval', $arrIds)) . ")");
		$arrOptions['order'] = \Database::getInstance()->findInSet("$t.id", $arrIds);

		return static::findBy($arrColumns, null, $arrOptions);
	}

}
