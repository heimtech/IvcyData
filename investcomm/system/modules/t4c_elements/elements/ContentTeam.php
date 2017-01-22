<?php

/**
 * t4c_elements extension for Contao Open Source CMS
 *
 * Copyright (C) 2015 themes4contao
 *
 * @package t4c_elements
 * @author  Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */

namespace themes4contao;

/**
 * Class ContentTeam
 *
 * Front end content element "Team".
 */
class ContentTeam extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_team';

    /**
     * Generate the content element
     */
    protected function compile()
    {

		global $objPage;

		// Clean the RTE output
		if ($objPage->outputFormat == 'xhtml')
		{
			$this->Template->about = \StringUtil::toXhtml($this->t4c_team_about);
		}
		else
		{
			$this->Template->about = \StringUtil::toHtml5($this->t4c_team_about);
		}
		
		// Add an image
		if ($this->addImage && $this->singleSRC != '')
		{
			$objModel = \FilesModel::findByUuid($this->singleSRC);

			if ($objModel === null)
			{
				if (!\Validator::isUuid($this->singleSRC))
				{
					$this->Template->text = '<p class="error">'.$GLOBALS['TL_LANG']['ERR']['version2format'].'</p>';
				}
			}
			elseif (is_file(TL_ROOT . '/' . $objModel->path))
			{
				$this->singleSRC = $objModel->path;
				$this->addImageToTemplate($this->Template, $this->arrData);
			}
		}
		
		$this->Template->name = $this->t4c_team_name;
		$this->Template->position = $this->t4c_team_position;
		$this->Template->email = \StringUtil::encodeEmail($this->t4c_team_email);
		$this->Template->facebook = ampersand($this->t4c_team_facebook);
		$this->Template->twitter = ampersand($this->t4c_team_twitter);
		$this->Template->google = ampersand($this->t4c_team_google);
		$this->Template->linkedin = ampersand($this->t4c_team_linkedin);
    }
}