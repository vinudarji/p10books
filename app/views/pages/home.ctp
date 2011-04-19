<div class="tagline">Exchange College Textbooks</div>
<div id="search-box">
	<form id="searchForm" method="get" action="<?php echo $this->Html->url(array('controller' => 'books', 'action' => 'search')); ?>">
	<div class="search-text">
				<label>FIND TEXTBOOKS YOU NEED <span>-OR-</span> <a href="<?php echo $this->Html->url(array('controller' => 'books', 'action' => 'sellbooks')) ?>">Sell Textbooks</a></label> 
		    <input type="text" name="q" class="text" value="" />
				<input type="button" title="Find TextBooks You Need" class="button" />
				<span class="note">Search: ISBN, Title or Author</span>
	</div>
	<div class="clear">
	</div>
	</form>	
</div> <!-- search-box -->
<div class="hiw">
	<h1 class="title">3 easy steps to get the books you need &mdash;</h1>
	<ul>
		<li>
			<img src="img/arrow.png">
			<h1 class="step">1.</h1>
			<h1>SEARCH</h1>
			<p>Find books you need</p>
		</li>
		<li>
			<img src="img/arrow.png">
			<h1 class="step">2.</h1>
			<h1>ORDER</h1>
			<p>Place order online</p>
		</li>
		<li class="last">
			<h1 class="step">3.</h1>
			<h1>GET BOOK</h1>
			<p>Pay cash on delivery</p>
		</li>
		<div class="clear"> </div>
	</ul>
</div>
