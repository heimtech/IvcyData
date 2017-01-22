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
 * Class FormColumnStop
 *
 * Form field "column" (stop).
 */
class FormColumnStop extends \Widget
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'form_t4c_column_stop';


    /**
     * Initialize the object
     * @param array
     */
    public function __construct($arrAttributes=null)
    {
        parent::__construct($arrAttributes);

        if (TL_MODE == 'BE')
        {
            \System::loadLanguageFile('tl_content');
            $this->strTemplate = 'be_wildcard';
            $this->title = '<span class="invisible t4c_column_stop"></span>';

            // Display error message if the column is invalid
            if ($GLOBALS['T4C_COLUMN_WRAPPER']['FORM']['current'] === null)
            {
                $this->title = '<span class="tl_red">' . $GLOBALS['TL_LANG']['tl_content']['t4c_column_invalid'] . '</span>';
            }
        }

        $GLOBALS['T4C_COLUMN_WRAPPER']['FORM']['current']++;
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
            \System::loadLanguageFile('tl_content');
            $objTemplate = new \BackendTemplate('be_wildcard');
            $objTemplate->title = sprintf($GLOBALS['TL_LANG']['tl_content']['t4c_column_stop'], $GLOBALS['T4C_COLUMN_WRAPPER']['FORM']['columns'][$GLOBALS['T4C_COLUMN_WRAPPER']['FORM']['current']]);

            // Display error message if the column is invalid
            if ($GLOBALS['T4C_COLUMN_WRAPPER']['FORM']['current'] === null)
            {
                $objTemplate->title = '<span class="tl_red">' . $GLOBALS['TL_LANG']['tl_content']['t4c_column_invalid'] . '</span>';
            }
        }
        else
        {
            $objTemplate = new \FrontendTemplate('form_t4c_column_stop');
        }

        $GLOBALS['T4C_COLUMN_WRAPPER']['FORM']['current']++;

        return $objTemplate->parse();
    }
}
