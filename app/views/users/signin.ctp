<div class="users form">
	<h1 class="bigTitle">Sign in to your account</h1>
	<fieldset>
		<br />
	<?php
	    echo $session->flash('auth');
	    echo $this->Form->create('User', array('action' => 'signin'));
	    echo $this->Form->input('email');
	    echo $this->Form->input('password');
	?>
	<div class="login-help">
		<?php echo $this->Html->link('Forgort password?', array('action'=>'forgot')); ?>
	</div>
	<?php
	    echo $this->Form->end('Sign in');
	?>
	<div class="submit" style="position: relative;">
		<div style="position: absolute;top:-34px;left: 120px;font-size: 14px;">or <a style="margin-left: 10px;" href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'add')); ?>">Sign up now</a></div>
	</div>
	
	</fieldset>
	<br/>
	<br/>
</div>