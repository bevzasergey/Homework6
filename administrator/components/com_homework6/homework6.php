<?php
$document = JFactory::getDocument();
$document->addStylesheet(JURI::root(true)."/administrator/components/com_homework6/assets/css/homework6.css");
/**
 * @version     1.0.0
 * @package     com_homework6
 * @copyright   © 2013. Все права защищены.
 * @license     GNU General Public License версии 2 или более поздней; Смотрите LICENSE.txt
 * @author      sergey <bevza@ukr.net> - http://
 */


// no direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_homework6')) 
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

$controller	= JController::getInstance('Homework6');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
