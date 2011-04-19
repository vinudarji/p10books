<div class="users form">
	<h1 class="bigTitle">Change your password</h1>
<?php echo $this->Form->create(null);?>
<fieldset>
	<?php
		echo $this->Form->input('newpassword',array('label'=>'New Password','type'=>'password'));
		echo $this->Form->input('confirmpassword',array('label'=>'Confirm Password','type'=>'password'));		
	?>
</fieldset>
<?php echo $this->Form->end(__('Update', true));?>
</div>
