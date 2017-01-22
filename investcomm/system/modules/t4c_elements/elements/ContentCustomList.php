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
 * Class ContentCustomList
 *
 * Front end content element "Custom List".
 */
class ContentCustomList extends \ContentList
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_custom_list';


    /**
     * Generate the content element
     */
    protected function compile()
    {
		if ($iconColor = \themes4contao\themes4contao::compileColor( $this->t4c_icon_color )){
			$this->Template->t4c_icon_color = $iconColor;
		}
		
		return parent::compile();
    }
}