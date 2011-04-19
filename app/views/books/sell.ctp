<div class="books sellsearch">
	<h1 class="bigTitle">Place this book for sell</h1>
	<div >
		We only buy books in which are in <a href="#">Better condition.</a> We do not buy Teacher's Editions.
	</div>
		<?php $i = 0;
	?>
	<?php foreach ($books as $book): ?>
	<div class="book">
		<?php echo $this->Html->image( 'thumb/' . $book['Book']['bookcoverthumb'], array('title' => $book['Book']['title'])); ?>
		<div class="details">
			<h1 class="title">
				<?php echo $this->Html->link($book['Book']['title'], array('action' => 'view', $book['Book']['id']), array('title' => $book['Book']['title'])); ?>
			</h1>
			<span>Author: <?php echo $book['Book']['author']; ?></span>
			<span>ISBN: <?php echo $book['Book']['isbn']; ?></span>
		</div>
		<div class="clear">
			
		</div>
	</div>
	
	<div class="clear"></div>
	<div>
		<?php
		    echo $this->Form->create('Sellorder', array('controller' => 'sellorders', 'action' => 'add'));
				echo $this->Form->hidden('user_id', array('value' => $session->read('Auth.User.id')));
				echo $this->Form->hidden('book_id', array('value' => $book['Book']['id']));
				echo $this->Form->hidden('edition', array('value' => ''));
		    echo $this->Form->end('List book for sell');
		?>
	</div>
	<?php endforeach; ?>
</div>

