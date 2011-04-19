<?php foreach ($ou as $ouser):

	
	
			echo $ouser['Order']['user_id']; ?>&nbsp;
			<?php
			echo $ouser['Order']['book_id'];
			
			?><br />
			<?php
		endforeach;
		
		echo $this->element('sql_dump');
		
		
		
		
?>