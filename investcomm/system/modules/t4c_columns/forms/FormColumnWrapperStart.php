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
 * Class FormColumnWrapperStart
 *
 * Form field "column wrapper" (start).
 */
class FormColumnWrapperStart extends \Widget
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'form_t4c_column_wrapper_start';


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
			$this->title = '<span class="invisible t4c_wrapper_start"></span>';
        }

		if ($this->t4c_column_no_padding){
			$this->class .= ' t4c_remove_gutter';
		}
		
        $GLOBALS['T4C_COLUMN_WRAPPER']['FORM'] = array
        (
            'current' => 0,
            'columns' => \Columns::convertStringToArray($this->t4c_column_config)
        );
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
        return;
    }
}
