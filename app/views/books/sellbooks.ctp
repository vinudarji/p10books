<h1 class="bigTitle" style="padding-left: 20px; padding-bottom: 20px;">Sell Textbooks</h1>
<div class="hiw-s">
	<ul>
		<li>
			<h1 class="step"><span>1.</span> Search Book</h1>
		</li>
		<li>
			<h1 class="step"><span>2.</span> List Book</h1>
		</li>
		<li class="last">
			<h1 class="step"><span>3.</span> Ship Book &mdash; FREE</h1>
		</li>
		<div class="clear"> </div>
	</ul>
</div>

<div id="search-box" class="sellbooks">
	<form id="searchForm" method="get" action="<?php echo $this->Html->url(array('controller' => 'books', 'action' => 'sell')); ?>">
	<div class="search-text">
				<label>Find textbook to sell &mdash; Enter ISBN</label> 
		    <input type="text" name="isbn" class="text" />
				<input type="button" title="Find TextBooks You Need" class="button" /><br /><br />
				<a style="font-size:10px;" href="#">What is ISBN?</a>
	</div>
	<div class="clear">
	</div>
	</form>	
</div> <!-- search-box -->
