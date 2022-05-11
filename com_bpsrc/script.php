<?php
/**
 * @package     Bpsrc.Administrator
 * @subpackage  com_bpsrc
 *
 * @copyright   (C) 2022 John Doe
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

\defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\Factory;

class com_bpsrcInstallerScript
{

	/**
	 * method to run after an install/update/uninstall method
	 *
	 * @return void
	 */
	public function postflight($type, $parent)
	{
		return true;
	}
}