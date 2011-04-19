<div class="sellorders index">
	<h2><?php __('Sellorders');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('book_id');?></th>
			<th><?php echo $this->Paginator->sort('edition');?></th>
			<th><?php echo $this->Paginator->sort('created_at');?></th>
			<th><?php echo $this->Paginator->sort('updated_at');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($sellorders as $sellorder):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $sellorder['Sellorder']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sellorder['User']['id'], array('controller' => 'users', 'action' => 'view', $sellorder['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sellorder['Book']['title'], array('controller' => 'books', 'action' => 'view', $sellorder['Book']['id'])); ?>
		</td>
		<td><?php echo $sellorder['Sellorder']['edition']; ?>&nbsp;</td>
		<td><?php echo $sellorder['Sellorder']['created_at']; ?>&nbsp;</td>
		<td><?php echo $sellorder['Sellorder']['updated_at']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $sellorder['Sellorder']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $sellorder['Sellorder']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $sellorder['Sellorder']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sellorder['Sellorder']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Sellorder', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books', true), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book', true), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>