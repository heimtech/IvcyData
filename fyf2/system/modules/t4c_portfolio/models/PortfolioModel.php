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

namespace themes4contao;

/**
 * Class PortfolioModel
 *
 * Reads and writes portfolio
 */
class PortfolioModel extends \Model
{

    /**
     * Table name
     * @var string
     */
    protected static $strTable = 'tl_t4c_portfolio';


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
