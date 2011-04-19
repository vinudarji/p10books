<?php class HomeController extends AppController {

	var $name = 'Home';

	var $helpers = array('Html', 'Session');

	var $uses = array();

	function beforeFilter(){
		$this->Auth->allow('index');
	}

	function index(){
		
	}
	
	function howitworks(){
		
	}
}
