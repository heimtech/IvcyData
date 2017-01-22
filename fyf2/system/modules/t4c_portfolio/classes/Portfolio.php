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
 * Class Portfolio
 *
 * Provide methods to handle portfolio.
 */
class Portfolio extends \Frontend
{

    /**
     * Add portfolio items to the indexer
     * @param array
     * @param integer
     * @param boolean
     * @return array
     */
    public function getSearchablePages($arrPages, $intRoot=0, $blnIsSitemap=false)
    {
        $arrRoot = array();

        if ($intRoot > 0)
        {
            $arrRoot = $this->Database->getChildRecords($intRoot, 'tl_page');
        }

        $time = time();
        $arrProcessed = array();
        $objPortfolio = PortfolioModel::findAll();

        // Walk through each portfolio
        if ($objPortfolio !== null)
        {
            while ($objPortfolio->next())
            {
                // Skip portfolios without target page
                if (!$objPortfolio->jumpTo)
                {
                    continue;
                }

                // Skip portfolios outside the root nodes
                if (!empty($arrRoot) && !in_array($objPortfolio->jumpTo, $arrRoot))
                {
                    continue;
                }

                // Get the URL of the jumpTo page
                if (!isset($arrProcessed[$objPortfolio->jumpTo]))
                {
                    $objParent = \PageModel::findWithDetails($objPortfolio->jumpTo);

                    // The target page does not exist
                    if ($objParent === null)
                    {
                        continue;
                    }

                    // The target page has not been published
                    if (!$objParent->published || ($objParent->start != '' && $objParent->start > $time) || ($objParent->stop != '' && $objParent->stop < $time))
                    {
                        continue;
                    }

                    // The target page is exempt from the sitemap
                    if ($blnIsSitemap && $objParent->sitemap == 'map_never')
                    {
                        continue;
                    }

                    // Set the domain
                    $domain = ($objParent->rootUseSSL ? 'https://' : 'http://') . ($objParent->domain ?: \Environment::get('host')) . TL_PATH . '/';

                    // Generate the URL
                    $arrProcessed[$objPortfolio->jumpTo] = $domain . $this->generateFrontendUrl($objParent->row(), (($GLOBALS['TL_CONFIG']['useAutoItem'] && !$GLOBALS['TL_CONFIG']['disableAlias']) ?  '/%s' : '/items/%s'), $objParent->language);
                }

                $strUrl = $arrProcessed[$objPortfolio->jumpTo];
                $objItems = PortfolioItemModel::findPublishedByPids(array($objPortfolio->id));

                if ($objItems !== null)
                {
                    while ($objItems->next())
                    {
                        $arrPages[] = sprintf($arrProcessed[$objPortfolio->jumpTo], $objItems->current()->generateUrl(true));
                    }
                }
            }
        }

        return $arrPages;
    }

}
