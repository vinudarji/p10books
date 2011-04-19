<?php

	<?php echo $this->Html->link(__('View Buy Order Details', true), array(''action' => 'vcorder', $user['User']['id'])); ?> <br />
	<?php echo $this->Html->link(__('View Sell Order Details', true), array('action' => 'vcsorder', $user['User']['id'])); ?> <br />