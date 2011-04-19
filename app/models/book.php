<?php
class Book extends AppModel {
	var $name = 'Book';
	var $hasMany = array('Orders' => array(	'className' => 'Order'),
											 'Sellorders' => array(	'className' => 'Sellorder'));
}
?>