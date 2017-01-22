<?php

/**
 * cfg_slider_revolution extension for Contao Open Source CMS
 *
 * Copyright (C) 2011-2015 Codefog
 *
 * @package cfg_slider_revolution
 * @author  Codefog <http://codefog.pl>
 * @author  Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @license Commercial
 */

namespace Codefog\SliderRevolution;

/**
 * Class SliderHybrid
 *
 * Provide methods to handle slider revolution.
 */
class SliderHybrid extends \Hybrid
{

    /**
     * Key
     * @var string
     */
    protected $strKey = 'cfg_slider_revolution';

    /**
     * Table
     * @var string
     */
    protected $strTable = 'tl_cfg_slider_revolution';

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'cfg_slider_revolution_hybrid';

    /**
     * Display a wildcard in the back end
     *
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE') {
            $template = new \BackendTemplate('be_wildcard');

            $template->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['CTE']['cfg_slider_revolution'][0]) . ' ###';
            $template->title    = $this->headline;
            $template->id       = $this->id;
            $template->link     = $this->name;
            $template->href     = 'contao/main.php?do=slider_revolution&amp;act=edit&amp;id=' . $this->id;

            return $template->parse();
        }

        return parent::generate();
    }

    /**
     * Generate the slider
     */
    protected function compile()
    {
        $slider                 = new SliderRevolution();
        $this->Template->buffer = $slider->generate($this->objModel);
    }
}
