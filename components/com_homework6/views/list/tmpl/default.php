<?php
/**
 * @version     1.0.0
 * @package     com_homework6
 * @copyright   © 2013. Все права защищены.
 * @license     GNU General Public License версии 2 или более поздней; Смотрите LICENSE.txt
 * @author      sergey <bevza@ukr.net> - http://
 */
// no direct access
defined('_JEXEC') or die;

//Load admin language file
$lang = JFactory::getLanguage();
$lang->load('com_homework6', JPATH_ADMINISTRATOR);

?>
<?php if ($this->item) : ?>

    <div class="item_fields test-style ">

        <ul class="fields_list test-style">

            			<li><?php echo JText::_('COM_HOMEWORK6_FORM_LBL_LIST_ID'); ?>:
			<?php echo $this->item->id; ?></li>
			<li><?php echo JText::_('COM_HOMEWORK6_FORM_LBL_LIST_ORDERING'); ?>:
			<?php echo $this->item->ordering; ?></li>
			<li><?php echo JText::_('COM_HOMEWORK6_FORM_LBL_LIST_STATE'); ?>:
			<?php echo $this->item->state; ?></li>
			<li><?php echo JText::_('COM_HOMEWORK6_FORM_LBL_LIST_CHECKED_OUT'); ?>:
			<?php echo $this->item->checked_out; ?></li>
			<li><?php echo JText::_('COM_HOMEWORK6_FORM_LBL_LIST_CHECKED_OUT_TIME'); ?>:
			<?php echo $this->item->checked_out_time; ?></li>
			<li><?php echo JText::_('COM_HOMEWORK6_FORM_LBL_LIST_CREATED_BY'); ?>:
			<?php echo $this->item->created_by; ?></li>
			<li><?php echo JText::_('COM_HOMEWORK6_FORM_LBL_LIST_NAMY'); ?>:
			<?php echo $this->item->namy; ?></li>
			<li><?php echo JText::_('COM_HOMEWORK6_FORM_LBL_LIST_INFO'); ?>:
			<?php echo $this->item->info; ?></li>
			<li><?php echo JText::_('COM_HOMEWORK6_FORM_LBL_LIST_AGE'); ?>:
			<?php echo $this->item->age; ?></li>
			<li><?php echo JText::_('COM_HOMEWORK6_FORM_LBL_LIST_FLOOR'); ?>:
			<?php echo $this->item->floor; ?></li>
			<li><?php echo JText::_('COM_HOMEWORK6_FORM_LBL_LIST_GROUP'); ?>:
			<?php echo $this->item->group; ?></li>
			<li><?php echo JText::_('COM_HOMEWORK6_FORM_LBL_LIST_BALL'); ?>:
			<?php echo $this->item->ball; ?></li>
			<li><?php echo JText::_('COM_HOMEWORK6_FORM_LBL_LIST_NUMBER'); ?>:
			<?php echo $this->item->number; ?></li>
			<li><?php echo JText::_('COM_HOMEWORK6_FORM_LBL_LIST_FOTO'); ?>:
			<?php echo $this->item->foto; ?></li>


        </ul>

    </div>
    
<?php
else:
    echo JText::_('COM_HOMEWORK6_ITEM_NOT_LOADED');
endif;
?>
