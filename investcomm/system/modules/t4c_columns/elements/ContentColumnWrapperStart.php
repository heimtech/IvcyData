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
 * Class ContentColumnWrapperStart
 *
 * Front end content element "column wrapper" (start).
 */
class ContentColumnWrapperStart extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_t4c_column_wrapper_start';


    /**
     * Generate the content element
     */
    protected function compile()
    {
        if (TL_MODE == 'BE')
        {
            $this->strTemplate = 'be_wildcard';
            $this->Template = new \BackendTemplate($this->strTemplate);
			$this->Template->title = '<span class="invisible t4c_wrapper_start"></span>';
        }
		
		if ($this->t4c_column_no_padding){
			$cssId = $this->cssID;
			$cssId[1] .= ' t4c_remove_gutter';
			$this->cssID = $cssId;
		}
		

        $GLOBALS['T4C_COLUMN_WRAPPER']['CTE'] = array
        (
            'current' => 0,
            'columns' => \Columns::convertStringToArray($this->t4c_column_config),
        );
    }
}
