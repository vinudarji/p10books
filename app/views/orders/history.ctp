<div class="users view form">
<h1 class="bigTitle"><?php echo $user['User']['fullname']; ?></h1>
	<div class="user-info">
		<fieldset>
			<legend>Order History</legend>
			<table cellpadding="0" cellspacing="0" class="tbl-list" style="margin-left: 10px;">
				<tr>
						<th></th>
						<th>Description</th>
						<th>Price</th>
						<th>Qty</th>
						<th>Total</th>
				</tr>
				<?php foreach($orders as $order): ?>
				<tr>
					<td>
						<?php echo $this->Html->image( 'thumb/' . $order['Book']['bookcoverthumb'], array('title' => $order['Book']['title'])); ?>
					</td>
					<td>
						<b>
							<?php echo $this->Html->link(__($order['Book']['title'], true), array('controller'=>'books','action' => 'view', $order['Book']['id'])); ?><br/>
						</b>
						<span class="author">Author: <?php echo $order['Book']['author']?></span>
						<span class="isbn">ISBN-10: <?php echo $order['Book']['isbn']?></span>
					</td>
					<td>
						<?php echo $order['Book']['sellprice']?>
					</td>
					<td>
						1
					</td>
					<td>
						<?php echo $order['Book']['sellprice']?>
					</td>
				</tr>
				<?php endforeach;?>
			</table>
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
				<?php echo $this->Html->link(__('Edit User Info.', true), array('controller'=>'users','action' => 'edit', $user['User']['id'])); ?> 
			</li>
			<li>
				<?php echo $this->Html->link(__('Change Profile Pic', true), array('controller'=>'users','action' => 'addpropic',$user['User']['id']));?> 
			</li>
			<li>
				<?php echo $this->Html->link(__('Change Password', true), array('controller'=>'users','action' => 'changepassword', $user['User']['id'])); ?>
			</li>
		</ul>
	</div>
	<div class="clear">
		
	</div>
</div>
