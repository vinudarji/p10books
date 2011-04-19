<div class="users form">
	<h1 class="bigTitle">Reset Password</h1>
	<fieldset>
		<br />
		<?php
		echo $form->create('User', array('action' => 'forgot'));
		echo $form->input('email', array('label' => 'Your email'));
		echo $form->end('Reset Password');
		?>	
	</fieldset>
	<br/>
	<br/>
</div>

