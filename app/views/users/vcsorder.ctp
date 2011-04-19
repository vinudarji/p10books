<?php foreach ($ou as $ouser):

	
	
			echo $ouser['Sellorder']['user_id']; ?>&nbsp;
			<?php
			echo $ouser['Sellorder']['book_id'];
			
			?><br />
			<?php
		endforeach;
		
		echo $this->element('sql_dump');
		
		
		
		
?>