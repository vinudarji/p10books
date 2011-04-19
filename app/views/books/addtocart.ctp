<div class="books addtocart">
	<h1 class="bigTitle">Place the Order</h1>
	<div class="form">
		<fieldset>
			<legend><?php __('Tell us your shipping details'); ?></legend>
			<div class="order-form">
				<?php
				    echo $this->Form->create('Order', array('action' => 'add'));
				    echo $this->Form->hidden('user_id', array('value' => $session->read('Auth.User.id')));
						echo $this->Form->hidden('book_id', array('value' => $book['Book']['id']));
						echo $this->Form->hidden('qty', array('value' => 1));
						echo $this->Form->hidden('price', array('value' => 400));
						echo $this->Form->input('shippingaddress', array('value' => $session->read('Auth.User.address1') . ', ' . $session->read('Auth.User.address2'), 'type' => 'textarea', 'label' => 'Enter your shipping address'));
						echo $this->Form->input('contactno', array('value'=>$session->read('Auth.User.mobile'), 'label' => 'Enter your contact no.'));
				    echo $this->Form->end('Place Order');
				?>
			</div>
			
		</fieldset>
		<fieldset>
	 		<legend><?php __('Order details'); ?></legend>
			<table cellpadding="0" cellspacing="0" class="tbl-list">
				<tr>
						<th></th>
						<th>Description</th>
						<th>Price</th>
						<th>Qty</th>
						<th>Total</th>
				</tr>
				<tr>
					<td>
						<?php echo $this->Html->image( 'thumb/' . $book['Book']['bookcoverthumb'], array('title' => $book['Book']['title'])); ?>
					</td>
					<td>
						<b>
							<?php echo $this->Html->link(__($book['Book']['title'], true), array('action' => 'view', $book['Book']['id'])); ?><br/>
						</b>
						<span class="author">Author: <?php echo $book['Book']['author']?></span>
						<span class="isbn">ISBN-10: <?php echo $book['Book']['isbn']?></span>
					</td>
					<td>
						<?php echo $book['Book']['sellprice']?>
					</td>
					<td>
						1
					</td>
					<td>
						<?php echo $book['Book']['sellprice']?>
					</td>
				</tr>
			</table>
			<br />
			<br />
			<br />
		</fieldset>
	</div>	
</div>
