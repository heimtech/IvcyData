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
 * Class FormColumnWrapperStop
 *
 * Form field "column wrapper" (stop).
 */
class FormColumnWrapperStop extends \Widget
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'form_t4c_column_wrapper_stop';


    /**
     * Initialize the object
     * @param array
     */
    public function __construct($arrAttributes=null)
    {
        parent::__construct($arrAttributes);

        if (TL_MODE == 'BE')
        {
            $this->strTemplate = 'be_wildcard';
			$this->title = '<span class="invisible t4c_wrapper_stop"></span>';
        }

        unset($GLOBALS['T4C_COLUMN_WRAPPER']['FORM']);
    }


    /**
     * Do not validate
     */
    public function validate()
    {
        return;
    }


    /**
     * Generate the widget and return it as string
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE')
        {
            $objTemplate = new \BackendTemplate('be_wildcard');
        }
        else
        {
            $objTemplate = new \FrontendTemplate('form_t4c_column_wrapper_stop');
        }

        unset($GLOBALS['T4C_COLUMN_WRAPPER']['FORM']);
        return $objTemplate->parse();
    }
}
