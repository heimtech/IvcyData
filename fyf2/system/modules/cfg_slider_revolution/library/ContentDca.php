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
 * Class ContentDca
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 */
class ContentDca
{

    /**
     * Initialize the background subpalettes
     *
     * @param \DataContainer $dc
     */
    public function initLoopSubpalettes($dc = null)
    {
        if (!$dc->id) {
            return;
        }

        $element = \ContentModel::findByPk($dc->id);

        if ($element === null) {
            return;
        }

        $subpaletteKey = 'cfg_slider_revolution_loop_' . $element->cfg_slider_revolution_loop_type;

        if (!isset($GLOBALS['TL_DCA']['tl_content']['subpalettes'][$subpaletteKey])) {
            return;
        }

        $GLOBALS['TL_DCA']['tl_content']['palettes'][$element->type] = str_replace(
            'cfg_slider_revolution_loop_type;',
            'cfg_slider_revolution_loop_type,' . $GLOBALS['TL_DCA']['tl_content']['subpalettes'][$subpaletteKey] . ';',
            $GLOBALS['TL_DCA']['tl_content']['palettes'][$element->type]
        );
    }
}
