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
 * Class ModulePortfolioReader
 *
 * Front end module "portfolio reader".
 */
class ModulePortfolioReader extends \ModulePortfolio
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'mod_t4c_portfolio_reader';


    /**
     * Display a wildcard in the back end
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE')
        {
            $objTemplate = new \BackendTemplate('be_wildcard');

            $objTemplate->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['t4c_portfolio_reader'][0]) . ' ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

            return $objTemplate->parse();
        }

        // Set the item from the auto_item parameter
        if (!isset($_GET['items']) && $GLOBALS['TL_CONFIG']['useAutoItem'] && isset($_GET['auto_item']))
        {
            \Input::setGet('items', \Input::get('auto_item'));
        }

        // Display a 404 page if no item has been specified
        if (!\Input::get('items'))
        {
            global $objPage;
            $objHandler = new $GLOBALS['TL_PTY']['error_404']();
            $objHandler->generate($objPage->id);
        }

        return parent::generate();
    }


    /**
     * Generate the module
     */
    protected function compile()
    {
        global $objPage;
        $objItem = PortfolioItemModel::findPublishedByIdOrAlias(\Input::get('items'));

        if ($objItem === null)
        {
            $objHandler = new $GLOBALS['TL_PTY']['error_404']();
            $objHandler->generate($objPage->id);
        }

        $this->Template->item = $this->generatePortfolioItem($objItem);

        // Overwrite the page title
        if ($objItem->name != '')
        {
            $objPage->pageTitle = strip_tags(strip_insert_tags($objItem->name));
        }

        // Overwrite the page description
        if ($objItem->description != '')
        {
            $objPage->description = $this->prepareMetaDescription($objItem->description);
        }
    }
}
