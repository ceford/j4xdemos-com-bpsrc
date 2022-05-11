<?php
/**
 * @package     Bpsrc.Administrator
 * @subpackage  com_bpsrc
 *
 * @copyright   (C) 2022 John Doe
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Bpsrcroot\Component\Bpsrc\Administrator\View\Bpsrc;

\defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Layout\FileLayout;
use Joomla\CMS\Language\Text;
use Joomla\CMS\MVC\View\GenericDataException;
use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;
use Joomla\CMS\Toolbar\Toolbar;
use Joomla\CMS\Toolbar\ToolbarHelper;

/**
 * View class for bpsrc.
 *
 * @since  4.0
 */
class HtmlView extends BaseHtmlView
{
	/**
	 * The search tools form
	 *
	 * @var    Form
	 * @since  1.6
	 */
	public $filterForm;

	/**
	 * The active search filters
	 *
	 * @var    array
	 * @since  1.6
	 */
	public $activeFilters = [];

	/**
	 * Category data
	 *
	 * @var    array
	 * @since  1.6
	 */
	protected $categories = [];

	/**
	 * An array of items
	 *
	 * @var    array
	 * @since  1.6
	 */
	protected $items = [];

	/**
	 * The pagination object
	 *
	 * @var    Pagination
	 * @since  1.6
	 */
	protected $pagination;

	/**
	 * The model state
	 *
	 * @var    Registry
	 * @since  1.6
	 */
	protected $state;

	/**
	 * Method to display the view.
	 *
	 * @param   string  $tpl  A template file to load. [optional]
	 *
	 * @return  void
	 *
	 * @since   1.6
	 * @throws  Exception
	 */
	public function display($tpl = null): void
	{

		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			throw new GenericDataException(implode("\n", $errors), 500);
		}

		$this->addToolbar();

		parent::display($tpl);
	}

	/**
	 * Add the page title and toolbar.
	 *
	 * @return  void
	 *
	 * @since   1.6
	 */
	protected function addToolbar(): void
	{
		$app = Factory::getApplication();

		ToolbarHelper::title(Text::_('COM_BPSRC_DEFAULT_TITLE'));

		// Get the toolbar object instance
		$toolbar = Toolbar::getInstance('toolbar');

		$user  = Factory::getUser();

		if ($user->authorise('core.admin', 'com_bpsrc') || $user->authorise('core.options', 'com_bpsrc'))
		{
			$toolbar->preferences('com_bpsrc');
		}

		$tmpl = $app->input->getCmd('tmpl');
		if ($tmpl !== 'component')
		{
			ToolbarHelper::help('bpsrc', true);
		}
	}
}

