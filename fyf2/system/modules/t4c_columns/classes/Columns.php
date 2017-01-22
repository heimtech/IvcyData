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
 * Class Columns
 *
 * Provide methods that are used by columns system.
 */
class Columns
{

    /**
     * Convert the columns string to array
     * @param mixed
     * @return array
     */
    public static function convertStringToArray($varValue)
    {
        return array_map('intval', trimsplit('-', $varValue));
    }
}
