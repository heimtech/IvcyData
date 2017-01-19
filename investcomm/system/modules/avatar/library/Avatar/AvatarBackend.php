<?php

/**
 * Avatar for Contao Open Source CMS
 *
 * Copyright (C) 2013 Kirsten Roschanski
 * Copyright (C) 2013 Tristan Lins <http://bit3.de>
 *
 * @package    Avatar
 * @license    http://opensource.org/licenses/lgpl-3.0.html LGPL
 */

namespace KirstenRoschanski\Avatar;

/**
 * Class AvatarWidget
 *
 * Widget for members avatar.
 *
 * @copyright  Kirsten Roschanski (C) 2013
 * @copyright  Tristan Lins (C) 2013
 * @author     Kirsten Roschanski <kirsten@kat-webdesign.de>
 * @author     Tristan Lins <tristan.lins@bit3.de>
 */
class AvatarBackend extends \Backend
{
  
	/**
	 * Save path in file, not a uuid by save dca 
	 *
	 * @param uuid
	 */
  public function saveFile($value)
  {
    return strlen($value) == 16 ? \String::binToUuid($value) : $value;
  }
  
	/**
	 * Save path in file, not a uuid by load dca 
	 *
	 * @param uuid
	 */
  public function loadFile($value)
  {
    return \String::uuidToBin($value);
  }  
}  
