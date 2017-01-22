<?php

/**
 * t4c_elements extension for Contao Open Source CMS
 *
 * Copyright (C) 2015 themes4contao
 *
 * @package t4c_elements
 * @author Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */

namespace themes4contao;

/**
 * Class ContentPromoBox
 *
 * Front end content element "Promo Box".
 */
class ContentPromoBox extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_promo_box';


    /**
     * Generate the content element
     */
    protected function compile()
    {			
		$cssId = $this->cssID;
		$cssId[1] .= ' text_'.$this->t4c_text_align.' '.$this->t4c_promo_hover.' text_position_'.$this->t4c_promo_position;
		$this->cssID = $cssId;
		
		if (substr($this->url, 0, 7) == 'mailto:')
		{
			$this->url = \StringUtil::encodeEmail($this->url);
		} else {
			$this->url = ampersand($this->url);
		}
		
		if ($this->singleSRC != '')
		{
			$objModel = \FilesModel::findByUuid($this->singleSRC);

			if (is_file(TL_ROOT . '/' . $objModel->path))
			{
				$this->singleSRC = $objModel->path;
				$this->addImageToTemplate($this->Template, $this->arrData);
			}
		}
		
		if($this->size){
			$size =  deserialize($this->size);
			$this->arrStyle[] = 'max-width:' . $size[0] . 'px;';
		}		
		
		if ($this->t4c_promo_textcolor){
			$this->Template->t4c_title_style = 'style="color:' . \themes4contao\themes4contao::compileColor( $this->t4c_promo_textcolor ) . ';"';
		} else {
			$this->Template->t4c_title_style = '';
		}
		
		if ($this->t4c_promo_slogancolor || $this->t4c_promo_sloganbgcolor){
			$this->Template->t4c_slogan_style = 'style="';
			
			if ($this->t4c_promo_slogancolor){
				$this->Template->t4c_slogan_style .= 'color:' . \themes4contao\themes4contao::compileColor( $this->t4c_promo_slogancolor ) . ';';
			}
			
			if ($this->t4c_promo_sloganbgcolor){
				$this->Template->t4c_slogan_style .= 'background:' . \themes4contao\themes4contao::compileColor( $this->t4c_promo_sloganbgcolor ) . ';';
			}
			
			$this->Template->t4c_slogan_style .= '"';
		} else {
			$this->Template->t4c_slogan_style = '';
		}
		$this->Template->href = $this->url;
		
    }
}