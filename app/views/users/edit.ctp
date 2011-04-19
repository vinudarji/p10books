<div class="users form">
	<h1 class="bigTitle">Edit your info.</h1>
<?php echo $this->Form->create('User');?>
	<fieldset>
 		<legend><?php __('User Info.'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fullname');
		echo $this->Form->input('email');
		if ($session->read('Auth.User') && $session->read('Auth.User.role') == 'admin' ) { 
		
$options = array('user' => 'user', 'co-ordinator' => 'co-ordinator','admin'=>'admin');

echo $this->Form->label('role');
echo $this->Form->select('role', $options);
}

		echo $this->Form->input('birthdate', array('minYear' => 1900, 'maxYear' => 2011));
		echo $this->Form->input('mobile');
		echo $this->Form->input('address1');
		echo $this->Form->input('address2');
		echo $this->Form->input('pincode');
		
	?>
	</fieldset>
	<fieldset>
		<legend>Academic Details</legend>
		<?php
		
		echo $this->Form->input('college');
		echo $this->Form->input('university');
		echo $this->Form->input('rollno');
		echo $this->Form->input('branch');
		echo $this->Form->input('semester');
		
		?>
	</fieldset>
<?php echo $this->Form->end(__('Update', true));?>
</div>
<?php if ($session->read('Auth.User') && $session->read('Auth.User.role') == 'admin' ) { ?>

<div class="actions">
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('User.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index'));?></li>
		<div class="clear"></div>
	</ul>
</div>

<?php }?>