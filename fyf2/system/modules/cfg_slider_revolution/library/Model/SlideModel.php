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
 * Class SlideModel
 *
 * Reads and writes slides.
 */
class SlideModel extends \Model
{

    /**
     * Table name
     * @var string
     */
    protected static $strTable = 'tl_cfg_slider_revolution_slide';

    /**
     * Get the video files
     *
     * @return \Model\Collection|null
     */
    public function getVideoFiles()
    {
        return \FilesModel::findMultipleByIds(deserialize($this->video_files, true));
    }

    /**
     * Get the elements
     *
     * @return \Model\Collection|null
     */
    public function getElements()
    {
        return \ContentModel::findPublishedByPidAndTable($this->id, 'tl_cfg_slider_revolution_slide');
    }

    /**
     * Find records by parent ID
     *
     * @param int $pid
     *
     * @return \Model\Collection|null
     */
    public static function findByPid($pid)
    {
        $t = static::$strTable;
        $columns = array("$t.pid=?");

        if (!BE_USER_LOGGED_IN) {
            $columns[] = "$t.published";
        }

        return static::findBy($columns, $pid, array('order' => "$t.sorting"));
    }
}
