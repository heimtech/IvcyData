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

namespace Codefog\SliderRevolution\Model;

/**
 * Class SliderModel
 *
 * Reads and writes sliders.
 */
class SliderModel extends \Model
{

    /**
     * Table name
     * @var string
     */
    protected static $strTable = 'tl_cfg_slider_revolution';

    /**
     * Get slides
     *
     * @return \Model\Collection|null
     */
    public function getSlides()
    {
        return SlideModel::findByPid($this->id);
    }
}
