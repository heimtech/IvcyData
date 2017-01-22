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

use Codefog\SliderRevolution\Model\SlideModel;

/**
 * Class SlideDca
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 */
class SlideDca
{

    /**
     * Get the slider options from config file
     *
     * @param string $type
     *
     * @return array
     *
     * @throws \Exception
     */
    public static function getSliderOptions($type)
    {
        static $settings;

        // Load the settings
        if (!is_array($settings)) {
            $file = 'system/modules/cfg_slider_revolution/config/slider_options.php';

            if (!is_file(TL_ROOT . '/' . $file)) {
                throw new \Exception(sprintf('The file "%s" does not exist!', $file));
            }

            $settings = require_once(TL_ROOT . '/' . $file);
        }

        return $settings[$type];
    }

    /**
     * Initialize the background subpalettes
     *
     * @param \DataContainer $dc
     */
    public function initBackgroundSubpalettes($dc = null)
    {
        if (!$dc->id) {
            return;
        }

        $slide = SlideModel::findByPk($dc->id);

        if ($slide === null) {
            return;
        }

        $subpaletteKey = 'background_' . $slide->background;

        if (!isset($GLOBALS['TL_DCA']['tl_cfg_slider_revolution_slide']['subpalettes'][$subpaletteKey])) {
            return;
        }

        $GLOBALS['TL_DCA']['tl_cfg_slider_revolution_slide']['palettes']['default'] = str_replace(
            'background;',
            'background,' . $GLOBALS['TL_DCA']['tl_cfg_slider_revolution_slide']['subpalettes'][$subpaletteKey] . ';',
            $GLOBALS['TL_DCA']['tl_cfg_slider_revolution_slide']['palettes']['default']
        );
    }
    
    /**
     * Generate the label and return it as HTML string
     * 
     * @param array $row
     * 
     * @return string
     */
    public function generateLabel($row)
    {
        return '<div>' . $row['name'] . '</div>';
    }

    /**
     * Return the "toggle visibility" button
     * 
     * @param array  $row
     * @param string $href
     * @param string $label
     * @param string $title
     * @param string $icon
     * @param string $attributes
     * 
     * @return string
     */
    public function toggleIcon($row, $href, $label, $title, $icon, $attributes)
    {
        if (strlen(\Input::get('tid'))) {
            $this->toggleVisibility(\Input::get('tid'), (\Input::get('state') == 1));
            \Backend::redirect(\Backend::getReferer());
        }

        $href .= '&amp;tid='.$row['id'].'&amp;state='.($row['published'] ? '' : 1);

        if (!$row['published']) {
            $icon = 'invisible.gif';
        }

        return '<a href="'.\Backend::addToUrl($href).'" title="'.specialchars($title).'"'.$attributes.'>'.\Image::getHtml($icon, $label).'</a> ';
    }

    /**
     * Publish/unpublish a slide
     * @param int  $id
     * @param bool $visible
     */
    public function toggleVisibility($id, $visible)
    {
        $versions = new \Versions('tl_cfg_slider_revolution_slide', $id);
        $versions->initialize();

        // Trigger the save_callback
        if (is_array($GLOBALS['TL_DCA']['tl_cfg_slider_revolution_slide']['fields']['published']['save_callback'])) {
            foreach ($GLOBALS['TL_DCA']['tl_cfg_slider_revolution_slide']['fields']['published']['save_callback'] as $callback) {
                if (is_array($callback)) {
                    $visible = \System::importStatic($callback[0])->$callback[1]($visible, $this);
                } elseif (is_callable($callback)) {
                    $visible = $callback($visible, $this);
                }
            }
        }

        // Update the database
        \Database::getInstance()->prepare("UPDATE tl_cfg_slider_revolution_slide SET tstamp=". time() .", published='" . ($visible ? 1 : '') . "' WHERE id=?")
            ->execute($id);

        $versions->create();
        \System::log('A new version of record "tl_cfg_slider_revolution_slide.id='.$id.'" has been created', __METHOD__, TL_GENERAL);
    }
}
