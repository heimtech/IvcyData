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
 * Class PortfolioItemModel
 *
 * Reads and writes portfolio items
 */
class PortfolioItemModel extends \Model
{

    /**
     * Table name
     * @var string
     */
    protected static $strTable = 'tl_t4c_portfolio_item';


    /**
     * Generate the item URL
     * @param boolean
     * @return string
     */
    public function generateUrl($blnParamsOnly=false)
    {
        $strUrl = (!$GLOBALS['TL_CONFIG']['disableAlias'] && $this->arrData['alias'] != '') ? $this->arrData['alias'] : $this->arrData['id'];

        if ($blnParamsOnly)
        {
            return $strUrl;
        }
		
		$item = $this->getRelated('pid')->row(); 
		
		if ($item['jumpTo']==='0')
		{
			return '';
		}

        return ampersand(\Controller::generateFrontendUrl($this->getRelated('pid')->getRelated('jumpTo')->row(), (($GLOBALS['TL_CONFIG']['useAutoItem'] && !$GLOBALS['TL_CONFIG']['disableAlias']) ?  '/' : '/items/') . $strUrl));
    }


	/**
	 * Find published items by their ID or alias
	 * @param mixed
	 * @param array
	 * @param array
	 * @return \Model|null
	 */
	public static function findPublishedByIdOrAlias($varId)
	{
		$t = static::$strTable;
		$arrColumns = array("($t.id=? OR $t.alias=?)");

		if (!BE_USER_LOGGED_IN)
		{
			$arrColumns[] = "$t.published=1";
		}

		return static::findOneBy($arrColumns, array((is_numeric($varId) ? $varId : 0), $varId));
	}


	/**
	 * Find published items by their parent ID
	 * @param array
	 * @param integer
	 * @param integer
	 * @return \Model\Collection|null
	 */
	public static function findPublishedByPids($arrPids, $intLimit=0, $intOffset=0, $orderBySorting=false)
	{
		if (!is_array($arrPids) || empty($arrPids))
		{
			return null;
		}

		$t = static::$strTable;
		$arrColumns = array("$t.pid IN(" . implode(',', array_map('intval', $arrPids)) . ")");

		// Never return unpublished elements in the back end, so they don't end up in the RSS feed
		if (!BE_USER_LOGGED_IN || TL_MODE == 'BE')
		{
			$arrColumns[] = "$t.published=1";
		}

		$arrOptions['limit']  = $intLimit;
		$arrOptions['offset'] = $intOffset;
		$arrOptions['order']  = "$t.dateCreated DESC";

        if ($orderBySorting === true) {
            $arrOptions['order']  = "$t.sorting";
        }

		return static::findBy($arrColumns, null, $arrOptions);
	}


	/**
	 * Count published items by their parent ID
	 * @param array
	 * @param boolean
	 * @param array
	 * @return integer
	 */
	public static function countPublishedByPids($arrPids)
	{
		if (!is_array($arrPids) || empty($arrPids))
		{
			return 0;
		}

		$t = static::$strTable;
		$arrColumns = array("$t.pid IN(" . implode(',', array_map('intval', $arrPids)) . ")");

		if (!BE_USER_LOGGED_IN)
		{
			$arrColumns[] = "$t.published=1";
		}

		return static::countBy($arrColumns, null);
	}
}
