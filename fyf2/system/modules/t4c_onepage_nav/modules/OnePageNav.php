<?php

/**
 * Footer extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 themes4contao
 *
 * @package t4c_onepage_nav
 * @author  Themes4Contao <support@themes4contao.com>
 * @license Commercial
 */


namespace themes4contao;


/**
 * Class MegaMenuModule
 *
 * Front end module "One page nav".
 */
class OnePageNav extends \Module
{
	
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'mod_t4c_onepage_nav';


    /**
     * Display a wildcard in the back end
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE')
        {
            $objTemplate = new \BackendTemplate('be_wildcard');

            $objTemplate->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['t4c_footer'][0]) . ' ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

            return $objTemplate->parse();
        }

        return parent::generate();
    }


    /**
     * Generate the module
     */
    protected function compile()
    {
     	$menu = deserialize($this->t4c_onepage_menu);
		
		if (count($menu) > 0){
			$this->Template->items = $menu;			
		}
		
		if( $this->showIcons ){
			$cssId = $this->cssID;
			$cssId[1] .= ' t4c_show_icons' ;
			$this->cssID = $cssId;
		}
		
		$GLOBALS['TL_JAVASCRIPT'][] = '/system/modules/t4c_onepage_nav/assets/jquery.nav.js|static';
    }
	

}
