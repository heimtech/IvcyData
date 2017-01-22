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
 * Interface EngineInterface
 *
 * Interface for the icon set engines.
 */
interface EngineInterface
{

    /**
     * Validate the icon set
     *
     * @param IconSetModel $iconSet
     *
     * @return bool
     */
    public function validate(IconSetModel $iconSet);

    /**
     * Get the icon set CSS files
     *
     * @param IconSetModel $iconSet
     *
     * @return array
     */
    public function getCssFiles(IconSetModel $iconSet);

    /**
     * Get the icons as array:
     * Array (
     *   Array (
     *     [name]   => icon1,
     *     [prefix] => icon-,
     *     [class]  => icon-icon1,
     *     [tags]   => Array (tag1, tag2, tag3),
     *   )
     * )
     *
     * @param IconSetModel $iconSet
     *
     * @return array
     */
    public function getIcons(IconSetModel $iconSet);
}
