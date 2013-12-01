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
?>
<script type="text/javascript">
    function deleteItem(item_id){
        if(confirm("<?php echo JText::_('COM_HOMEWORK6_DELETE_MESSAGE'); ?>")){
            document.getElementById('form-list-delete-' + item_id).submit();
        }
    }
</script>

<div class="items test-style">
    <ul class="items_list test-style">
<?php $show = false; ?>
        <?php foreach ($this->items as $item) : ?>

            
				<?php
					if($item->state == 1 || ($item->state == 0 && JFactory::getUser()->authorise('core.edit.own',' com_homework6'))):
						$show = true;
						?>
							<li>
								<a href="<?php echo JRoute::_('index.php?option=com_homework6&view=list&id=' . (int)$item->id); ?>"><?php echo $item->namy; ?></a>
							</li>
						<?php endif; ?>

<?php endforeach; ?>
        <?php
        if (!$show):
            echo JText::_('COM_HOMEWORK6_NO_ITEMS');
        endif;
        ?>
    </ul>
</div>
<?php if ($show): ?>
    <div class="pagination">
        <p class="counter">
            <?php echo $this->pagination->getPagesCounter(); ?>
        </p>
        <?php echo $this->pagination->getPagesLinks(); ?>
    </div>
<?php endif; ?>

