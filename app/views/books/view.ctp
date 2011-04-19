<div class="books view">
	<h1 class="bigTitle">
		<?php echo $book['Book']['title']; ?>		
	</h1>
	<div class="leftColumn">
		<?php echo $this->Html->image( 'upload/' . $book['Book']['bookcover'], array('title' => $book['Book']['title'])); ?>
	</div>
	<div class="rightColumn">
		<table class="bookdetails">
			<tr>		
				<td>Author</td>
				<td>
					<div class="author p">
						<?php echo $book['Book']['author']; ?>
					</div>
				</td>
		 </tr>
		 <tr>			
				<td>ISBN</td>
				<td>
					<div class="isbn p">
						<?php echo $book['Book']['isbn']; ?>
					</div>
				</td>
			</tr>	
			<tr>
				<td>MRP</td>
				<td>
					<div class="mrp p">
						<?php echo $book['Book']['mrp']; ?>
					</div>
				</td>
			</tr>
			<tr>		
				<td>Price</td>
				<td>
					<div class="price p">
						<?php echo $book['Book']['sellprice']; ?>
					</div>
				</td>
			</tr>
		</table>

		<div class="order">
						<?php echo $this->Html->link(__('Order this book', true), array('action' => 'addtocart', $book['Book']['id'])); ?>
		</div>
	</div>
	<div class="clear">
	</div>
</div>
<?php if ($session->read('Auth.User') && $session->read('Auth.User.role') == 'admin' ) { ?>

<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Book', true), array('action' => 'edit', $book['Book']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Book', true), array('action' => 'delete', $book['Book']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $book['Book']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Books', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book', true), array('action' => 'add')); ?> </li>
	</ul>
</div>

<?php }?>