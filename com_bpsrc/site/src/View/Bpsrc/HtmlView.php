<?php
/**
 * @package     Bpsrc.Site
 * @subpackage  com_bpsrc
 *
 * @copyright   (C) 2022 John Doe
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace BpsrcRoot\Component\Bpsrc\Site\View\Bpsrc;

\defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\MVC\View\GenericDataException;
use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;

/**
 * View class for Bpsrc.
 *
 * @since  4.0
 */
class HtmlView extends BaseHtmlView
{
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
		/*
		if (count($errors = $this->get('Errors')))
		{
			throw new GenericDataException(implode("\n", $errors), 500);
		}
		*/
		parent::display($tpl);
	}
}
