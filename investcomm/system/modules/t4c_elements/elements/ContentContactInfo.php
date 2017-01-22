<?php

/**
 * t4c_elements extension for Contao Open Source CMS
 *
 * Copyright (C) 2015 themes4contao
 *
 * @package t4c_icon_box
 * @author  Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */

namespace themes4contao;

/**
 * Class ContentContactInfo
 *
 * Front end content element "Contact Info".
 */
class ContentContactInfo extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_contact_info';

    /**
     * Generate the content element
     */
    protected function compile()
    {
		$items = deserialize($this->t4c_contact_info);
		$this->Template->items = $items;
    }
}