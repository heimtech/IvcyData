<?php

/**
 * iconpicker extension for Contao Open Source CMS
 *
 * Copyright (C) 2011-2015 Codefog
 *
 * @package iconpicker
 * @author  Codefog <http://codefog.pl>
 * @author  Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @license LGPL
 */

namespace Codefog\IconPicker;

/**
 * Class IconPickerWidget
 *
 * Back end form field "icon picker".
 */
class IconPickerWidget extends \Widget
{

    /**
     * Submit user input
     * @var bool
     */
    protected $blnSubmitInput = true;

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'be_iconpicker_widget';

    /**
     * Load the database object
     *
     * @param array $attributes
     */
    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        // Include the assets
        $GLOBALS['TL_CSS'][] = Manager::getCssFile($this->iconSets);
        $GLOBALS['TL_CSS']['iconpicker'] = 'system/modules/iconpicker/assets/css/backend' . (\Config::get('debugMode') ? '' : '.min') . '.css';
        $GLOBALS['TL_JAVASCRIPT']['iconpicker'] = 'system/modules/iconpicker/assets/js/backend' . (\Config::get('debugMode') ? '' : '.min') . '.js';
    }

    /**
     * Return the widget property
     *
     * @param string $key
     *
     * @return mixed
     */
    public function __get($key)
    {
        switch ($key) {
            case 'url':
                return 'system/modules/iconpicker/public/selector.php?do=' . \Input::get('do') . '&amp;table=' . $this->strTable . '&amp;field=' . $this->strField . '&amp;rt=' . REQUEST_TOKEN;
        }

        return parent::__get($key);
    }

    /**
     * Generate the widget and return it as string
     *
     * @return string
     */
    public function generate()
    {
        return '';
    }
}
