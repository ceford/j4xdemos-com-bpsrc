<?php
/**
 * @package     Bpsrc.Administrator
 * @subpackage  com_bpsrc
 *
 * @copyright   (C) 2022 John Doe
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Bpsrcroot\Component\Bpsrc\Administrator\Extension;

defined('JPATH_PLATFORM') or die;

use Joomla\CMS\Categories\CategoryServiceInterface;
use Joomla\CMS\Categories\CategoryServiceTrait;
use Joomla\CMS\Application\SiteApplication;
use Joomla\CMS\Component\Router\RouterServiceInterface;
use Joomla\CMS\Component\Router\RouterServiceTrait;
use Joomla\CMS\Extension\BootableExtensionInterface;
use Joomla\CMS\Extension\MVCComponent;
use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLRegistryAwareTrait;
use Psr\Container\ContainerInterface;

/**
 * Component class for com_bpsrc
 *
 * @since  4.0.0
 */
class BpsrcComponent extends MVCComponent implements
BootableExtensionInterface, CategoryServiceInterface, RouterServiceInterface
{
	use RouterServiceTrait;
	use HTMLRegistryAwareTrait;
	use CategoryServiceTrait;

	/**
	 * Booting the extension. This is the function to set up the environment of the extension like
	 * registering new class loaders, etc.
	 *
	 * If required, some initial set up can be done from services of the container, eg.
	 * registering HTML services.
	 *
	 * @param   ContainerInterface  $container  The container
	 *
	 * @return  void
	 *
	 * @since   4.0.0
	 */
	public function boot(ContainerInterface $container)
	{
		//$this->getRegistry()->register('bpsrcadministrator', new AdministratorService);
	}
}
