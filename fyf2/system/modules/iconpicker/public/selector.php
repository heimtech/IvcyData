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

use Codefog\IconPicker\Manager;

/**
 * Set the script name
 */
define('TL_SCRIPT', 'system/modules/iconpicker/public/selector.php');

/**
 * Initialize the system
 */
define('TL_MODE', 'BE');
require_once '../../../initialize.php';

/**
 * Class IconPicker
 *
 * Back end icon picker.
 */
class IconPicker extends Backend
{

    /**
     * Initialize the controller
     *
     * 1. Import the user
     * 2. Call the parent constructor
     * 3. Authenticate the user
     * 4. Load the language files
     * DO NOT CHANGE THIS ORDER!
     */
    public function __construct()
    {
        $this->import('BackendUser', 'User');
        parent::__construct();

        $this->User->authenticate();
        System::loadLanguageFile('default');
    }

    /**
     * Run the controller and parse the template
     */
    public function run()
    {
        $this->Template = new BackendTemplate('be_iconpicker');
        $this->Template->main = '';

        $table = Input::get('table');
        $field = Input::get('field');

        // Define the current ID
        define('CURRENT_ID', (Input::get('table') ? $this->Session->get('CURRENT_ID') : Input::get('id')));

        // Load the data container
        $this->loadDataContainer($table);

        $this->Template->icons = Manager::getIcons($GLOBALS['TL_DCA'][$table]['fields'][$field]['eval']['iconSets']);
        $this->Template->search = $GLOBALS['TL_LANG']['MSC']['search'];

        $GLOBALS['TL_CONFIG']['debugMode'] = false;
        $this->Template->output();
    }
}

/**
 * Instantiate the controller
 */
$iconPicker = new IconPicker();
$iconPicker->run();
