<div class="sellorders form">
<?php echo $this->Form->create('Sellorder');?>
	<fieldset>
 		<legend><?php __('Add Sellorder'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('book_id');
		echo $this->Form->input('edition');
		echo $this->Form->input('created_at');
		echo $this->Form->input('updated_at');
		
	?>
	
	
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sellorders', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books', true), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book', true), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>