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
 * Class ModulePortfolioList
 *
 * Front end module "portfolio list".
 */
class ModulePortfolioList extends \ModulePortfolio
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'mod_t4c_portfolio_list';


    /**
     * Display a wildcard in the back end
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE')
        {
            $objTemplate = new \BackendTemplate('be_wildcard');

            $objTemplate->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['t4c_portfolio_list'][0]) . ' ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

            return $objTemplate->parse();
        }

        $this->t4c_portfolio = deserialize($this->t4c_portfolio, true);

        // Return if there are no portfolio selected
        if (empty($this->t4c_portfolio))
        {
            return '';
        }

        return parent::generate();
    }


    /**
     * Generate the module
     */
    protected function compile()
    {
        $offset = 0;
        $limit = null;
        $this->Template->articles = array();

		if ($this->t4c_portfolio_style){
			$portfolioStyle = $this->t4c_portfolio_style;
		} else {
			$portfolioStyle = 'style_0';
		}

		$cssId = $this->cssID;
		$cssId[1] .= ' t4c_portfolio_'.$portfolioStyle;
		$this->cssID = $cssId;


        // Maximum number of items
        if ($this->numberOfItems > 0)
        {
            $limit = $this->numberOfItems;
        }

        // Get the total number of items
        $intTotal = PortfolioItemModel::countPublishedByPids($this->t4c_portfolio);

        if ($intTotal < 1)
        {
            return;
        }

        $total = $intTotal - $offset;

        // Split the results
        if ($this->perPage > 0 && (!isset($limit) || $this->numberOfItems > $this->perPage))
        {
            // Adjust the overall limit
            if (isset($limit))
            {
                $total = min($limit, $total);
            }

            // Get the current page
            $id = 'page_n' . $this->id;
            $page = \Input::get($id) ?: 1;

            // Do not index or cache the page if the page number is outside the range
            if ($page < 1 || $page > max(ceil($total / $this->perPage), 1))
            {
                global $objPage;
                $objPage->noSearch = 1;
                $objPage->cache = 0;

                // Send a 404 header
                header('HTTP/1.1 404 Not Found');
                return;
            }

            // Set limit and offset
            $limit = $this->perPage;
            $offset += (max($page, 1) - 1) * $this->perPage;

            // Overall limit
            if ($offset + $limit > $total)
            {
                $limit = $total - $offset;
            }

            // Add the pagination menu
            $objPagination = new \Pagination($total, $this->perPage, $GLOBALS['TL_CONFIG']['maxPaginationLinks'], $id);
            $this->Template->pagination = $objPagination->generate("\n  ");
        }

        $objItems = PortfolioItemModel::findPublishedByPids($this->t4c_portfolio, $limit, $offset, (count($this->t4c_portfolio) === 1));

        // No items found
        if ($objItems === null)
        {
            return;
        }

        $this->Template->items = $this->generatePortfolioItems($objItems);
        $this->Template->filter = false;
		$this->Template->layout = $this->t4c_portfolio_layout;

		// Gutter size
		if ($this->t4c_portfolio_gutter_size){
			$this->Template->item_style = 'style="margin-right:-' . $this->t4c_portfolio_gutter_size . 'px;"';
		}

        // Add the dynamic filter
        if ($this->t4c_portfolio_filter)
        {
            $arrPids = array();
            $objItems->reset();

            // Collect parent IDs
            while ($objItems->next())
            {
                if (!in_array($objItems->pid, $arrPids))
                {
                    $arrPids[] = $objItems->pid;
                }
            }

            $objPortfolio = PortfolioModel::findByIds(array_intersect($this->t4c_portfolio, $arrPids));

            if ($objPortfolio === null)
            {
                return;
            }

            $this->Template->filter = true;
			$this->Template->filter_position = 'pos-'.$this->t4c_portfolio_filter_position;
			$this->Template->filter_style =  $this->t4c_portfolio_filter_style;
            $arrPortfolio = array();

            // Add "show all" button
            $arrPortfolio[] = array
            (
                'filter' => '*',
                'name' => $GLOBALS['TL_LANG']['MSC']['portfolio_all'],
                'title' => specialchars($GLOBALS['TL_LANG']['MSC']['portfolio_all'])
            );

            // Generate porfolio buttons
            while ($objPortfolio->next())
            {
			    $arrPortfolio[] = array
                (
                    'filter' => '.portfolio_' . $objPortfolio->id,
                    'name' => $objPortfolio->name,
                    'title' => specialchars($objPortfolio->name)
                );
            }

            $this->Template->portfolio = $arrPortfolio;
		}
        if ($this->t4c_portfolio_filter || $this->t4c_portfolio_layout){
			// Include assets
			$GLOBALS['TL_CSS'][] = 'system/modules/t4c_portfolio/assets/js/isotope/isotope.min.css||static';
			$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/t4c_portfolio/assets/js/isotope/jquery.isotope.min.js|static';
			$GLOBALS['TL_JAVASCRIPT']['imagesloaded'] = 'system/modules/themes4contao_pro/assets/js/imagesloaded.min.js|static';
		}
    }
}
