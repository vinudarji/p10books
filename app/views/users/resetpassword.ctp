<div class="users form newpass">
	<h1 class="bigTitle">Enter new password</h1>
	<fieldset>
		<br />
	<?php
	    echo $session->flash();
	    echo $this->Form->create(null, array('action' => 'newpassword'));
	    echo $this->Form->input('password');
	    echo $this->Form->input('confirmpassword', array('label' => 'Confirm Password'));	
	    echo $this->Form->end('Save New Password');
	?>
	
	</fieldset>
	<br/>
	<br/>
</div>