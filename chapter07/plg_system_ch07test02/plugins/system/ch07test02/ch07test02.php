<?php
/**
 * System Plugin for Joomla! - Chapter 07 / Test 02
 *
 * @author     Jisse Reitsma <jisse@yireo.com>
 * @copyright  Copyright 2014 Jisse Reitsma
 * @license    GNU Public License version 3 or later
 * @link       http://www.yireo.com/books/
 */

defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

/**
 * Class PlgSystemCh07test02
 *
 * @since  September 2014
 */
class PlgSystemCh07test02 extends JPlugin
{
	/**
	 * Event method onAfterRoute
	 *
	 * @return null
	 */
	public function onAfterRoute()
	{
		$input = JFactory::getApplication()->input;
		$task = $input->get('task');
		$option = $input->get('option');

		if ($option == 'com_users' && $task == 'user.login')
		{
			$input->set('option', 'com_customlogin');
			$input->set('task', 'login');
		}

		return null;
	}
}
