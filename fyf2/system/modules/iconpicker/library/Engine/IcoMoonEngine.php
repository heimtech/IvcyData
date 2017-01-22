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

namespace Codefog\IconPicker\Engine;

use Codefog\IconPicker\EngineInterface;
use Codefog\IconPicker\IconSetModel;

/**
 * Class IcoMoonEngine
 *
 * Provide methods to handle IcoMoon icon sets.
 */
class IcoMoonEngine implements EngineInterface
{

    /**
     * {@inheritdoc}
     *
     * @param IconSetModel $iconSet
     *
     * @return bool
     */
    public function validate(IconSetModel $iconSet)
    {
        $folder = $this->getFolder($iconSet);

        if ($folder === null) {
            return false;
        }

        $files = array('selection.json', 'style.css');

        // Validate the files
        foreach ($files as $file) {
            if (!is_file(TL_ROOT . '/' . $folder->path . '/' . $file)) {
                \System::log(sprintf('The file "%s" for icon set "%s" does not exist', $file, $iconSet->name), __METHOD__, TL_ERROR);
                return false;
            }
        }

        return true;
    }

    /**
     * {@inheritdoc}
     *
     * @param IconSetModel $iconSet
     *
     * @return array
     */
    public function getCssFiles(IconSetModel $iconSet)
    {
        $folder = $this->getFolder($iconSet);

        if ($folder === null) {
            return array();
        }

        return array($folder->path . '/style.css');
    }

    /**
     * {@inheritdoc}
     *
     * @param IconSetModel $iconSet
     *
     * @return array
     */
    public function getIcons(IconSetModel $iconSet)
    {
        $folder = $this->getFolder($iconSet);

        if ($folder === null) {
            return array();
        }

        $file = new \File($folder->path . '/selection.json');
        $data = json_decode($file->getContent(), true);
        $file->close();

        // There are no icons
        if (!$data['icons']) {
            return array();
        }

        $icons = array();

        // Collect the icons
        foreach ($data['icons'] as $icon) {
            $icons[] = array(
                'name'   => $icon['properties']['name'],
                'prefix' => $data['preferences']['fontPref']['prefix'],
                'class'  => $data['preferences']['fontPref']['prefix'] . $icon['properties']['name'],
                'tags'   => $icon['icon']['tags'],
            );
        }

        return $icons;
    }

    /**
     * Get the source folder
     *
     * @param IconSetModel $iconSet
     *
     * @return \Model|null
     */
    protected function getFolder(IconSetModel $iconSet)
    {
        return \FilesModel::findByPk($iconSet->folder);
    }
}
