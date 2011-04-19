<div class="books index">
	<h1 class="bigTitle"><?php __('Displaying All Books');?></h1>
	<table cellpadding="0" cellspacing="0" class="tbl-list">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('isbn');?></th>
			<th><?php echo $this->Paginator->sort('author');?></th>
			<th><?php echo $this->Paginator->sort('subject');?></th>
			<th><?php echo $this->Paginator->sort('semester');?></th>
			<th><?php echo $this->Paginator->sort('department');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($books as $book):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $book['Book']['id']; ?>&nbsp;</td>
		<td><?php echo $book['Book']['title']; ?>&nbsp;</td>
		<td><?php echo $book['Book']['description']; ?>&nbsp;</td>
		<td><?php echo $book['Book']['isbn']; ?>&nbsp;</td>
		<td><?php echo $book['Book']['author']; ?>&nbsp;</td>
		<td><?php echo $book['Book']['subject']; ?>&nbsp;</td>
		<td><?php echo $book['Book']['semester']; ?>&nbsp;</td>
		<td><?php echo $book['Book']['department']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $book['Book']['id'])); ?><br />
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $book['Book']['id'])); ?><br />
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $book['Book']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $book['Book']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	
	<div class="paging">
		<?php echo $this->Paginator->prev('‹‹ ' . __('Prev', true), array(), null, array('class'=>'disabled'));?><?php echo $this->Paginator->numbers();?><?php echo $this->Paginator->next(__('Next', true) . ' ››', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<?php if ($session->read('Auth.User') && $session->read('Auth.User.role') == 'admin' ) { ?>

<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('New Book', true), array('action' => 'add')); ?></li>
	</ul>
</div>

<?php }?>