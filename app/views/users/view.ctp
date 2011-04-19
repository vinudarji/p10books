<div class="users view form">
<h1 class="bigTitle"><?php echo $user['User']['fullname']; ?></h1>
	<div class="user-info">
		<fieldset>
			<legend>User Info.</legend>
			<ul class="viewdata">
				<li>
					<label><?php __('Fullname :'); ?></label>
					<div>
						<?php echo $user['User']['fullname']; ?>
					</div>
					<p class="clear"></p>
				</li>
				<li>
					<label><?php __('Email :'); ?></label>
					<div>
						<?php echo $user['User']['email']; ?>
					</div>
					<p class="clear"></p>
				</li>			
				<li>
					<label><?php __('Birthdate :'); ?></label>
					<div>
						<?php echo $user['User']['birthdate']; ?>
					</div>
					<p class="clear"></p>
				</li>
			</ul>
		</fieldset>
		<fieldset>
			<legend>Contact Details</legend>
			<ul class="viewdata">
				<li>
					<label><?php __('Mobile :'); ?></label>
					<div>
						<?php echo $user['User']['mobile']; ?>
					</div>
					<p class="clear"></p>
				</li>
				<li>
					<label><?php __('Address1 :'); ?></label>
					<div>
						<?php echo $user['User']['address1']; ?>
					</div>
					<p class="clear"></p>
				</li>
				<li>
					<label><?php __('Address2 :'); ?></label>
					<div>
						<?php echo $user['User']['address2']; ?>
					</div>
					<p class="clear"></p>
				</li>
				<li>
					<label><?php __('Pincode :'); ?></label>
					<div>
						<?php echo $user['User']['pincode']; ?>
					</div>
					<p class="clear"></p>
				</li>
			</ul>
		</fieldset>
		<fieldset>
			<legend>Academic Details</legend>
			<ul class="viewdata">
				<li>
					<label><?php __('Rollno :'); ?></label>
					<div>
						<?php echo $user['User']['rollno']; ?>
					</div>
					<p class="clear"></p>
				</li>
				<li>
					<label><?php __('College :'); ?></label>
					<div>
						<?php echo $user['User']['college']; ?>
					</div>
					<p class="clear"></p>
				</li>
				<li>
					<label><?php __('University :'); ?></label>
					<div>
						<?php echo $user['User']['university']; ?>
					</div>
					<p class="clear"></p>
				</li>
				<li>
					<label><?php __('Branch :'); ?></label>
					<div>
						<?php echo $user['User']['branch']; ?>
					</div>
					<p class="clear"></p>
				</li>
				<li>
					<label><?php __('Semester :'); ?></label>
					<div>
						<?php echo $user['User']['semester']; ?>
					</div>
					<p class="clear"></p>
				</li>
			</ul>
		</fieldset>
	</div>
	<div class="user-nav">
		<div class="user-photo">
			<div class="img">
				<?php echo $this->Html->image( 'user/upload/' . $user['User']['userpic'],array('width'=>130,'height'=>'130')); ?>
			</div>
		</div>
		<ul>
			<li>
				<?php echo $this->Html->link(__('View Order History', true), array('controller'=>'orders','action' => 'history', $user['User']['id'])); ?> 
			</li>
			<li>
				<?php echo $this->Html->link(__('View Sales History', true), array('controller'=>'sellorders','action' => 'history', $user['User']['id'])); ?> 
			</li>
		</ul>
		<ul>
			<li>
				<?php echo $this->Html->link(__('Edit User Info.', true), array('action' => 'edit', $user['User']['id'])); ?> 
			</li>
			<li>
				<?php echo $this->Html->link(__('Change Profile Pic', true), array('action' => 'addpropic',$user['User']['id']));?> 
			</li>
			<li>
				<?php echo $this->Html->link(__('Change Password', true), array('action' => 'changepassword', $user['User']['id'])); ?>
			</li>
		</ul>
	</div>
	<div class="clear">
		
	</div>
</div>
<?php if ($session->read('Auth.User') && $session->read('Auth.User.role') == 'admin' ) { ?>

<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Edit User', true), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete User', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?> </li>
		<div class="clear"></div>
	</ul>
</div>

<?php }?>