<div class="books search">
	<div id="search-box">
		<form id="searchForm" method="get" action="<?php echo $this->Html->url(array('controller' => 'books', 'action' => 'search')); ?>">
		<div class="search-text">
					<label>FIND TEXTBOOKS YOU NEED <span>-OR-</span> <a href="#">Sell your textbooks</a></label> 
			    <input type="text" name="q" class="text" value="<?php echo $query; ?>" />
					<input type="button" title="Find TextBooks You Need" class="button" />
					<span class="note">Search: ISBN, Title or Author</span>
		</div>
		<div class="clear">
		</div>
		</form>	
	</div> <!-- search-box -->
		<?php $i = 0;
	?>
	<?php foreach ($books as $book): ?>
	<div class="book">
		<?php echo $this->Html->image( 'thumb/' . $book['Book']['bookcoverthumb'], array('title' => $book['Book']['title'])); ?>
		<div class="details">
			<h1 class="title">
				<?php echo $this->Html->link($book['Book']['title'], array('action' => 'view', $book['Book']['id']), array('title' => $book['Book']['title'])); ?>
			</h1>
			<span><?php echo $book['Book']['author'];  ?></span>
		</div>
	</div>
	<?php endforeach; ?>
	<div class="clear"></div>
	<div class="paging">
		<?php $paginator->options = array( 'url' => $paginatorURL );?>
		<?php echo $this->Paginator->prev('‹‹ ' . __('Prev', true), array(), null, array('class'=>'disabled'));?><?php echo $this->Paginator->numbers();?><?php echo $this->Paginator->next(__('Next', true) . ' ››', array(), null, array('class' => 'disabled'));?>
	</div>
</div>

