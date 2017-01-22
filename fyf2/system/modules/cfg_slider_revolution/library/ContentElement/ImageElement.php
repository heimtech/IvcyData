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
 * Class ImageElement
 *
 * Content element "image".
 */
class ImageElement extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'cfg_slider_revolution_image';

    /**
     * Generate the content element
     */
    protected function compile()
    {
        $fileModel = \FilesModel::findByPk($this->singleSRC);

        if ($fileModel === null || !is_file(TL_ROOT . '/' . $fileModel->path)) {
            return;
        }

        $file = new \File($fileModel->path);

        if ($file->isGdImage === false) {
            return;
        }

        $this->Template->src    = $file->path;
        $this->Template->width  = $file->width;
        $this->Template->height = $file->height;

        if ($this->cfg_slider_revolution_ww) {
            $this->Template->ww = $this->generateDimensionData($this->cfg_slider_revolution_ww);
        }

        if ($this->cfg_slider_revolution_hh) {
            $this->Template->hh = $this->generateDimensionData($this->cfg_slider_revolution_hh);
        }
    }

    /**
     * Generate the dimension data
     *
     * @param string $input
     *
     * @return string
     */
    protected function generateDimensionData($input)
    {
        $output = intval($input) . 'px';

        // Multiple values
        if (strpos($input, ',') !== false) {
            $chunks = [];

            foreach (trimsplit(',', $input) as $v) {
                $chunks[] = intval($v) . 'px';
            }

            $output = "['" . implode("','", $chunks) . "']";
        }


        return $output;
    }
}
