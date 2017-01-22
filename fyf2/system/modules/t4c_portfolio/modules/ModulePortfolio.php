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
 * Class ModulePortfolio
 *
 * Parent class for portfolio modules
 */
abstract class ModulePortfolio extends \Module
{

    /**
     * Generate portfolio and return it as HTML string
     * @param object
     * @param boolean
     * @param integer
     * @param string
     * @return string
     */
    protected function generatePortfolioItem($objItem, $blnContent=true, $intCount=0, $strClass='')
    {
        
		if ($this->t4c_portfolio_style){
			$objTemplate = new \FrontendTemplate('t4c_portfolio_'.$this->t4c_portfolio_style);
		}
		elseif($this->t4c_portfolio_template) {
			$objTemplate = new \FrontendTemplate($this->t4c_portfolio_template);
		}
		else {
			$objTemplate = new \FrontendTemplate('t4c_portfolio_list');
		}
        $objTemplate->setData($objItem->row());
        $objTemplate->class = 'portfolio_' . $objItem->pid . (strlen($strClass) ? (' ' . $strClass) : '');
        $objTemplate->columns = intval($this->t4c_portfolio_columns);
		$objTemplate->columns = intval($this->t4c_portfolio_columns);
		$objTemplate->columns_md = intval($this->t4c_portfolio_columns_tablet);
		$objTemplate->columns_sm = intval($this->t4c_portfolio_columns_mobile);        
		$objTemplate->url = $objItem->current()->generateUrl();
        $objTemplate->title = specialchars($objItem->name);
        $objTemplate->count = $intCount;
        $objTemplate->singleSRC = '';
		$objTemplate->singleSRC_hover = '';
		$objTemplate->display_name = $this->t4c_portfolio_display_name;
		$objTemplate->display_category = $this->t4c_portfolio_display_category;
		$objTemplate->display_client = $this->t4c_portfolio_display_client;
		$objTemplate->display_more = $this->t4c_portfolio_display_more;
		$objTemplate->display_redirect = $this->t4c_portfolio_display_redirect;
		$objTemplate->display_full = $this->t4c_portfolio_display_zoom;
		$objTemplate->portfolio_style = $this->t4c_portfolio_style;
		$objTemplate->online = $objItem->online;
		$objTemplate->portfolio_id = $this->id;
		
		// Hover style		
		$hoverStyle = '';
		if ($textColor = \themes4contao\themes4contao::compileColor( $objItem->textColor)){
			$hoverStyle .= 'color:' . $textColor . ';';
		}
		
		if ($bgColor = \themes4contao\themes4contao::compileColor( $objItem->bgColor)){
			$hoverStyle .= 'background:' . $bgColor . ';';
		}
		
		if ($hoverStyle){
			$objTemplate->hover_style = 'style="' . $hoverStyle . '"';
		} else {
			$objTemplate->hover_style = '';
		}
	
		
		// Get category
		
		$objCategory = $objItem->current()->getRelated('pid');
		$objTemplate->category = $objCategory->name;
		
        // Add the image
        if (($objImage = $objItem->current()->getRelated('singleSRC')) !== null)
        {
            \Controller::addImageToTemplate($objTemplate, ['singleSRC' => $objImage->path, 'size' => $this->imgSize]);
        }
		
		
		// Add the hover image
        if (($objImage_hover = $objItem->current()->getRelated('singleSRC_hover')) !== null)
        {
			$tmp = new \stdClass();
			\Controller::addImageToTemplate($tmp, ['singleSRC' => $objImage_hover->path, 'size' => $this->imgSize]);
			$objTemplate->image = $tmp;
        }
		
		 // Full image
        if (($objImage = $objItem->current()->getRelated('fullImage')) !== null)
        {
            $objTemplate->fullImage = $objImage->path;
        }

		// Gutter size
		if ($this->t4c_portfolio_gutter_size){
			 $objTemplate->item_style = 'style="padding-right:' . $this->t4c_portfolio_gutter_size . 'px;padding-bottom:' . $this->t4c_portfolio_gutter_size . 'px;"';
		}

		$objTemplate->hasContent = function () use ($objItem) {
			return \ContentModel::countPublishedByPidAndTable($objItem->id, 'tl_t4c_portfolio_item') ? true : false;
		};

		$objTemplate->getContent = function () use ($objItem) {
			$buffer = '';
			$objElement = \ContentModel::findPublishedByPidAndTable($objItem->id, 'tl_t4c_portfolio_item');

        	// Generate the content elements
			if ($objElement !== null) {
				while ($objElement->next()) {
					$buffer .= \Controller::getContentElement($objElement->id);
				}
			}

			return $buffer;
		};

        return $objTemplate->parse();
    }


    /**
     * Generate portfolio items and return them as array
     * @param object
     * @return array
     */
    protected function generatePortfolioItems($objItems)
    {
        $count = 0;
        $limit = $objItems->count();
        $arrItems = array();

        while ($objItems->next())
        {
            $arrItems[] = $this->generatePortfolioItem($objItems, false, ++$count, (($count == 1) ? 'first' : '') . (($count == $limit) ? ' last' : '') . ((($count % 2) == 0) ? ' odd' : ' even'));
        }

        return $arrItems;
    }
}
