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
 * Class Manager
 *
 * Provide methods that are used in the front end.
 */
class Manager
{

    /**
     * Engine instances
     * @var array
     */
    protected static $engines = array();

    /**
     * Generate the front end page
     *
     * @param \PageModel   $page
     * @param \LayoutModel $layout
     */
    public function generatePage(\PageModel $page, \LayoutModel $layout)
    {
        $file = static::getCssFile(deserialize($layout->iconsets, true));

        if (!$file) {
            return;
        }

        $GLOBALS['TL_CSS'][] = $file;
    }

    /**
     * Get the path to combined CSS file
     *
     * @param array $ids
     *
     * @return string
     */
    public static function getCssFile($ids = array())
    {
        $iconSets = static::getIconSetModel($ids);

        if ($iconSets === null) {
            return '';
        }

        $combiner = new \Combiner();

        foreach ($iconSets as $iconSet) {
            $engine = static::getEngine($iconSet);

            // Skip if the icon set is not valid
            if (!($engine instanceof EngineInterface) || !$engine->validate($iconSet)) {
                continue;
            }

            $combiner->addMultiple($engine->getCssFiles($iconSet));
        }

        if (!$combiner->hasEntries()) {
            return '';
        }

        return $combiner->getCombinedFile();
    }

    /**
     * Get the icons as array
     *
     * @param array $ids
     *
     * @return array
     */
    public static function getIcons($ids = array())
    {
        $iconSets = static::getIconSetModel($ids);

        if ($iconSets === null) {
            return array();
        }

        $icons = array();

        foreach ($iconSets as $iconSet) {
            $engine = static::getEngine($iconSet);

            // Skip if the icon set is not valid
            if (!($engine instanceof EngineInterface) || !$engine->validate($iconSet)) {
                continue;
            }

            $icons = array_merge($icons, $engine->getIcons($iconSet));
        }

        return $icons;
    }

    /**
     * Get the engine for given icon set
     *
     * @param IconSetModel $iconSet
     *
     * @return EngineInterface|null
     */
    public static function getEngine(IconSetModel $iconSet)
    {
        $engine = $iconSet->engine;

        if (!isset(static::$engines[$engine])) {
            $class = $GLOBALS['ICONPICKER_ENGINES'][$engine];

            if (!class_exists($class)) {
                static::$engines[$engine] = null;
            } else {
                static::$engines[$engine] = new $class();
            }
        }

        return static::$engines[$engine];
    }

    /**
     * Get the icon set model
     *
     * @param array $ids
     *
     * @return \Model\Collection|null
     */
    protected static function getIconSetModel($ids = array())
    {
        $ids = (array) $ids;

        if (!empty($ids)) {
            return IconSetModel::findMultipleByIds($ids);
        }

        return IconSetModel::findAll();
    }
}
