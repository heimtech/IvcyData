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

/**
 * Load tl_content data container
 */
$this->loadDataContainer('tl_content');
\System::loadLanguageFile('tl_content');

/**
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['cfg_slider_revolution'] = '{title_legend},name,type;{config_legend},cfg_slider_revolution;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['cfg_slider_revolution'] = $GLOBALS['TL_DCA']['tl_content']['fields']['cfg_slider_revolution'];
