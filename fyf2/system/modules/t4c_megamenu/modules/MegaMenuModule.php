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


/**
 * Class MegaMenuModule
 *
 * Front end module "Mega menu".
 */
class MegaMenuModule extends \ModuleNavigation
{
	
	/**
	 * Recursively compile the navigation menu and return it as HTML string
	 * @param integer
	 * @param integer
	 * @param string
	 * @param string
	 * @return string
	 */
	protected function renderNavigation($pid, $level=1, $host=null, $language=null)
	{
		// Get all active subpages
		$objSubpages = \PageModel::findPublishedSubpagesWithoutGuestsByPid($pid, $this->showHidden, $this instanceof \ModuleSitemap);

		if ($objSubpages === null)
		{
			return '';
		}

		$items = array();
		$groups = array();

		// Get all groups of the current front end user
		if (FE_USER_LOGGED_IN)
		{
			$this->import('FrontendUser', 'User');
			$groups = $this->User->groups;
		}

		// Layout template fallback
		if ($this->navigationTpl == '')
		{
			$this->navigationTpl = 'nav_megamenu';
		}

		$objTemplate = new \FrontendTemplate($this->navigationTpl);

		$objTemplate->pid = $pid;
		$objTemplate->type = get_class($this);
		$objTemplate->cssID = $this->cssID; // see #4897
		$objTemplate->level = 'level_' . $level++;

		// Get page object
		global $objPage;

		// Browse subpages
		while ($objSubpages->next())
		{
			// Skip hidden sitemap pages
			if ($this instanceof \ModuleSitemap && $objSubpages->sitemap == 'map_never')
			{
				continue;
			}

			$subitems = '';
			$_groups = deserialize($objSubpages->groups);

			// Override the domain (see #3765)
			if ($host !== null)
			{
				$objSubpages->domain = $host;
			}

			// Do not show protected pages unless a back end or front end user is logged in
			if (!$objSubpages->protected || BE_USER_LOGGED_IN || (is_array($_groups) && count(array_intersect($_groups, $groups))) || $this->showProtected || ($this instanceof \ModuleSitemap && $objSubpages->sitemap == 'map_always'))
			{
				// Check whether there will be subpages
				if ($objSubpages->subpages > 0 && (!$this->showLevel || $this->showLevel >= $level || (!$this->hardLimit && ($objPage->id == $objSubpages->id || in_array($objPage->id, $this->Database->getChildRecords($objSubpages->id, 'tl_page'))))))
				{
					$subitems = $this->renderNavigation($objSubpages->id, $level, $host, $language);
				}

				// Get href
				switch ($objSubpages->type)
				{
					case 'redirect':
						$href = $objSubpages->url;

						if (strncasecmp($href, 'mailto:', 7) === 0)
						{
							$href = \StringUtil::encodeEmail($href);
						}
						break;

					case 'forward':
						if ($objSubpages->jumpTo)
						{
							$objNext = $objSubpages->getRelated('jumpTo');
						}
						else
						{
							$objNext = \PageModel::findFirstPublishedRegularByPid($objSubpages->id);
						}

						if ($objNext !== null)
						{
							// Hide the link if the target page is invisible
							if (!$objNext->published || ($objNext->start != '' && $objNext->start > time()) || ($objNext->stop != '' && $objNext->stop < time()))
							{
								continue(2);
							}

							$strForceLang = null;
							$objNext->loadDetails();

							// Check the target page language (see #4706)
							if (\Config::get('addLanguageToUrl'))
							{
								$strForceLang = $objNext->language;
							}

							$href = $this->generateFrontendUrl($objNext->row(), null, $strForceLang, true);
							break;
						}
						// DO NOT ADD A break; STATEMENT

					default:
						if ($objSubpages->domain != '' && $objSubpages->domain != Environment::get('host'))
						{
							$objSubpages->current()->loadDetails();
						}

						$href = $this->generateFrontendUrl($objSubpages->row(), null, $language, true);
						break;
				}

				$row = $objSubpages->row();
				$trail = in_array($objSubpages->id, $objPage->trail);

				// Active page
				if (($objPage->id == $objSubpages->id || $objSubpages->type == 'forward' && $objPage->id == $objSubpages->jumpTo) && !$this instanceof \ModuleSitemap && $href == \Environment::get('request'))
				{
					// Mark active forward pages (see #4822)
					$strClass = (($objSubpages->type == 'forward' && $objPage->id == $objSubpages->jumpTo) ? 'forward' . ($trail ? ' trail' : '') : 'active') . (($subitems != '') ? ' submenu' : '') . ($objSubpages->protected ? ' protected' : '') . (($objSubpages->cssClass != '') ? ' ' . $objSubpages->cssClass : '');

					$row['isActive'] = true;
					$row['isTrail'] = false;
				}

				// Regular page
				else
				{
					$strClass = (($subitems != '') ? 'submenu' : '') . ($objSubpages->protected ? ' protected' : '') . ($trail ? ' trail' : '') . (($objSubpages->cssClass != '') ? ' ' . $objSubpages->cssClass : '');

					// Mark pages on the same level (see #2419)
					if ($objSubpages->pid == $objPage->pid)
					{
						$strClass .= ' sibling';
					}

					$row['isActive'] = false;
					$row['isTrail'] = $trail;
				}
				// MEGA MENU CONTENT
				if ($row['t4c_megamenu_show']){
					$objElement = \ContentModel::findPublishedByPidAndTable($objSubpages->t4c_megamenu_selected_module, 'tl_megamenu');
						if ($objElement !== null)
						{
							$megaMenObj = MegaMenuModel::findById($objSubpages->t4c_megamenu_selected_module); 			
							$menuWidth = deserialize($megaMenObj->width);
							
							$menuClass = trim($megaMenObj->cssClass);
							$style = 'style="';
							if ($menuWidth['value'] != ''){
								$style .= 'width:' . $menuWidth['value'] . $menuWidth['unit'] . ';';
							} else {
								$menuClass .= ' sf-mega-fullwidth';
							}
							
							if ($fontcolor = \themes4contao\themes4contao::compileColor( $megaMenObj->fontcolor )){
								$GLOBALS['T4C_CSS'][] = '#megamenu_' .$megaMenObj->id . ' ,#megamenu_' .$megaMenObj->id . ' strong, #megamenu_' .$megaMenObj->id . ' a, #megamenu_' .$megaMenObj->id . ' a:hover, #megamenu_' .$megaMenObj->id . ' h1, #megamenu_' .$megaMenObj->id . ' h2, #megamenu_' .$megaMenObj->id . ' h3, #megamenu_' .$megaMenObj->id . ' h4, #megamenu_' .$megaMenObj->id . ' h5, #megamenu_' .$megaMenObj->id . ' h6 {color: ' . $fontcolor . ';}';
							}
							
							if ($bgcolor = \themes4contao\themes4contao::compileColor( $megaMenObj->bgcolor )){
				 				$style .= 'background-color:' . $bgcolor . ';';
							}
							
							if( $megaMenObj->image_settings == 'cover' ){
								$style .= '-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;';
								$style .= 'background-repeat: no-repeat;';
								$style .= 'background-position: ' . $megaMenObj->image_position . ';';
							} elseif( $megaMenObj->image_settings == 'contain' ){
								$style .= '-webkit-background-size: contain; -moz-background-size: contain; -o-background-size: contain;  background-size: contain;';
					 			$style .= 'background-repeat: no-repeat;';
					 			$style .= 'background-position: ' . $megaMenObj->image_position . ';';
							} else {
								$style .= 'background-repeat: ' . $megaMenObj->image_settings . ';';
								$style .= 'background-position: ' . $megaMenObj->image_position . ';';
							}
							
							if( $megaMenObj->image )
							{
								$bg_image = \FilesModel::findByPk($megaMenObj->image);
								$style .= 'background-image: url(' . $bg_image->path . ');';
							}
				
							$style .= '"';
							
							$row['megamenu_content'] = '<div id="megamenu_' . $megaMenObj->id . '" class="sf-mega ' . $menuClass . '" '. $style.' >';
							while ($objElement->next())
							{
								$row['megamenu_content'] .= $this->getContentElement($objElement->current());
							}
							$row['megamenu_content'] .= '</div>';
						}
					$row['subitems'] = '';							
				} else {
					$row['subitems'] = $subitems;
				}
				// MEGA MENU CONTENT END
				
				$row['class'] = trim($strClass);
				$row['title'] = specialchars($objSubpages->title, true);
				$row['pageTitle'] = specialchars($objSubpages->pageTitle, true);
				$row['link'] = $objSubpages->title;				
				$row['href'] = $href;
				$row['nofollow'] = (strncmp($objSubpages->robots, 'noindex', 7) === 0);
				$row['target'] = '';
				$row['description'] = str_replace(array("\n", "\r"), array(' ' , ''), $objSubpages->description);

				// Override the link target
				if ($objSubpages->type == 'redirect' && $objSubpages->target)
				{
					$row['target'] = ($objPage->outputFormat == 'xhtml') ? ' onclick="return !window.open(this.href)"' : ' target="_blank"';
				}

				$items[] = $row;
			}
		}

		// Add classes first and last
		if (!empty($items))
		{
			$last = count($items) - 1;

			$items[0]['class'] = trim($items[0]['class'] . ' first');
			$items[$last]['class'] = trim($items[$last]['class'] . ' last');
		}

		$objTemplate->items = $items;
		return !empty($items) ? $objTemplate->parse() : '';
	}
}
