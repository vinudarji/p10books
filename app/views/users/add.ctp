<div class="users form">
	<h1 class="bigTitle">Register for new account</h1>
<?php echo $this->Form->create('User');?>
	<fieldset>
 		<legend><?php __('First, tell us about yourself'); ?></legend>
	<?php
		echo $this->Form->input('fullname');
		echo "<div class='eg'>'Kunal K Chaudhari' or 'Arpana G Chaudhari'</div>";
		echo $this->Form->input('email');
		echo $this->Form->input('password_unhashed', array('label' => 'Password', 'type' => 'password'));
		echo $this->Form->input('birthdate', array('minYear' => 1900, 'maxYear' => 2011));
		echo $this->Form->input('mobile');
		echo "<div class='eg'>'9913719765' or '+91-9913719765'</div>";
		echo $this->Form->input('address1');
		echo "<div class='eg'>'F/14, Abhilasha Ave., S.G Highway'</div>";
		echo $this->Form->input('address2');
		echo "<div class='eg'>'Ahmedabad, Gujarat'</div>";
		echo $this->Form->input('pincode');
	?>
	</fieldset>
	<fieldset>
		<legend><?php __('Tell us your academic details'); ?></legend>
		<?php
			echo $this->Form->input('college');
			echo "<div class='eg'>Example: Nirma Institure Of Technology</div>";
			echo $this->Form->input('university');
			echo "<div class='eg'>Example: Nirma University</div>";
			echo $this->Form->input('rollno');
			echo "<div class='eg'>Example: 00IT004</div>";
			echo $this->Form->input('branch');
			echo $this->Form->input('semester');
			echo "<div class='eg'>Example: 'Semester 3' or 'First year'</div>";
		?>
	</fieldset>	
<?php echo $this->Form->end(__('Register', true));?>
<div class="eg terms">By clicking on above button you agree to the <a href="#">terms & conditions</a></div>
<br />
<br />
</div>
<?php if ($session->read('Auth.User') && $session->read('Auth.User.role') == 'admin' ) { ?>

<div class="actions hide">
	<ul>

		<li><?php echo $this->Html->link(__('<< Back to Users List', true), array('action' => 'index'));?></li>
	</ul>
</div>

<?php }?>