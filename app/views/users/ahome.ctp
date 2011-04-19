<div> 
	<table class="tbl-list" border="2">
		<tr>
			<td>
				Total No. Of Users
			</td>
			<td>
				<?php echo $users; ?>
			</td>
			<td>
				<?php echo $this->Html->link(__('Manage Users', true), array('action' => 'index'));?>
			</td>
		</tr>
		
		<tr>
			<td>
				Total No. Of Books
			</td>
			<td>
				<?php echo $books; ?>
			</td>
			<td>
				<?php echo $this->Html->link(__('Manage Books', true), array('controller'=>'books','action' => 'index'));?>
			</td>
		</tr>
		
		<tr>
			<td>
				Total No. Of Orders
			</td>
			<td>
				<?php echo $orders; ?>
			</td>
			<td>
				<?php echo $this->Html->link(__('Manage Orders', true), array('controller'=>'orders','action' => 'index'));?>
			</td>
		</tr>
		
		<tr>
			<td>
				Total No. Of SellOrders
			</td>
			<td>
				<?php echo $sos; ?>
			</td>
			<td>
				<?php echo $this->Html->link(__('Manage Sellorders', true), array('controller'=>'sellorders','action' => 'index'));?>
			</td>
		</tr>
	</table>
</div>