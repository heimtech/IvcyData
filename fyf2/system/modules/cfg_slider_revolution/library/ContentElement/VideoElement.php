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

namespace Codefog\SliderRevolution\ContentElement;

/**
 * Class VideoContentElement
 *
 * Content element "video".
 */
class VideoElement extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = '';

    /**
     * Display a wildcard in the back end
     *
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE') {
            $template = new \BackendTemplate('be_wildcard');

            $template->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['CTE']['cfg_slider_revolution_video'][0]) . ' ###';
            $template->title    = $this->headline;
            $template->id       = $this->id;
            $template->link     = $this->name;
            $template->href     = 'contao/main.php?do=slider_revolution&amp;act=edit&amp;id=' . $this->id;

            return $template->parse();
        }

        return '';
    }

    /**
     * Generate the slider
     */
    protected function compile() {}
}
