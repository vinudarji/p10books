<div class="books form">
<h1 class="bigTitle">Edit book</h1>
<?php echo $this->Form->create('Book', array('type' => 'file'));?>
	<fieldset>
		<legend><?php __('Tell us book details'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('isbn');
		echo $this->Form->input('author');
		echo $this->Form->input('subject');
		echo $this->Form->input('semester');
		echo $this->Form->input('department', array('label' => 'Branch'));
		echo $this->Form->input('mrp', array('label' => 'M.R.P.'));
		echo $this->Form->input('sellprice', array('label' => 'Sell Price'));
	?>
	<div class="input text">
		<label for="CoverPage">Cover</label>
		<?php echo $this->Form->file('coverpage'); ?>
	</div>
	
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<?php if ($session->read('Auth.User') && $session->read('Auth.User.role') == 'admin' ) { ?>

<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Book.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Book.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Books', true), array('action' => 'index'));?></li>
	</ul>
</div>
<?php }?>