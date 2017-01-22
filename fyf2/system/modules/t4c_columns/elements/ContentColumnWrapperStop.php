<?php

/**
 * t4c_columns extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package t4c_columns
 * @author  Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */

namespace themes4contao;

/**
 * Class ContentColumnWrapperStop
 *
 * Front end content element "column wrapper" (stop).
 */
class ContentColumnWrapperStop extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_column_wrapper_stop';


    /**
     * Generate the content element
     */
    protected function compile()
    {
        if (TL_MODE == 'BE')
        {
            $this->strTemplate = 'be_wildcard';
            $this->Template = new \BackendTemplate($this->strTemplate);
			$this->Template->title = '<span class="invisible t4c_wrapper_stop"></span>';
        }

        unset($GLOBALS['T4C_COLUMN_WRAPPER']['CTE']);
    }
}
