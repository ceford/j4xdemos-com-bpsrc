<?php
/**
 * @package     Bpsrc.Administrator
 * @subpackage  com_bpsrc
 *
 * @copyright   (C) 2022 John Doe
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Component\Router\RouterFactoryInterface;
use Joomla\CMS\Dispatcher\ComponentDispatcherFactoryInterface;
use Joomla\CMS\Extension\ComponentInterface;
use Joomla\CMS\Extension\MVCComponent;
use Joomla\CMS\Extension\Service\Provider\CategoryFactory;
use Joomla\CMS\Extension\Service\Provider\ComponentDispatcherFactory;
use Joomla\CMS\Extension\Service\Provider\MVCFactory;
use Joomla\CMS\Extension\Service\Provider\RouterFactory;
use Joomla\CMS\MVC\Factory\MVCFactoryInterface;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use Bpsrcroot\Component\Bpsrc\Administrator\Extension\BpsrcComponent;

/**
 * The Bpsrc service provider.
 *
 * @since  4.0.0
 */
return new class implements ServiceProviderInterface
{
	/**
	 * Registers the service provider with a DI container.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  void
	 *
	 * @since   4.0.0
	 */
	public function register(Container $container)
	{
		$container->registerServiceProvider(new CategoryFactory('\\Bpsrcroot\\Component\\Bpsrc'));
		$container->registerServiceProvider(new MVCFactory('\\Bpsrcroot\\Component\\Bpsrc'));
		$container->registerServiceProvider(new ComponentDispatcherFactory('\\Bpsrcroot\\Component\\Bpsrc'));
		$container->registerServiceProvider(new RouterFactory('\\Bpsrcroot\\Component\\Bpsrc'));
		$container->set(
			ComponentInterface::class,
			function (Container $container)
			{
				$component = new BpsrcComponent($container->get(ComponentDispatcherFactoryInterface::class));

				//$component->setRegistry($container->get(Registry::class));
				$component->setMVCFactory($container->get(MVCFactoryInterface::class));
				//$component->setCategoryFactory($container->get(CategoryFactoryInterface::class));
				$component->setRouterFactory($container->get(RouterFactoryInterface::class));

				return $component;
			}
		);
	}
};
