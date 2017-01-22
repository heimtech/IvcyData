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
 * Class IconSetModel
 *
 * Reads and writes icon sets.
 */
class IconSetModel extends \Model
{

    /**
     * Table name
     * @var string
     */
    protected static $strTable = 'tl_iconset';
}
