<?php
class OrdersController extends AppController {

	var $name = 'Orders';
	var $components = array('Email','Cookie','Image');
	function index() {
		$this->Order->recursive = 0;
		$this->set('orders', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid order', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('order', $this->Order->read(null, $id));
	}

	function history(){
		$this->set('orders', $this->Order->find('all',array('conditions'=>array('Order.user_id' => $this->Auth->user('id')))));
		$this->set('user',$this->Auth->user());
	}

	function add() {
	 $query = $this->params['url']['book_id'];
		$this->set('query',$query);
		if (!empty($this->data)) {
			$this->Order->create();
			if ($this->Order->save($this->data)) {
				$this->Session->setFlash(__('<div class="head-success">Your order placed successfully.</div>', true));
				$users = $this->Order->User->find('list');
		$books = $this->Order->Book->find('list');
		$this->set(compact('users', 'books'));
				$this->redirect(array('action' => 'sendemail'));
				//$this->redirect(array('controller' => 'home', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('<div class="head-error">The order could not be saved. Please, try again.</div>', true));
			}
		}    
		$users = $this->Order->User->find('list');
		$books = $this->Order->Book->find('list');
		$this->set(compact('users', 'books'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid order', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Order->save($this->data)) {
				$this->Session->setFlash(__('The order has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The order could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Order->read(null, $id);
		}
		$users = $this->Order->User->find('list');
		$books = $this->Order->Book->find('list');
		$this->set(compact('users', 'books'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for order', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Order->delete($id)) {
			$this->Session->setFlash(__('Order deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Order was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function sendemail(){
		
		$this->__setSmtpOptions();
		 $omail = $this->Order->User->find('first', array('conditions' => array('User.branch' => $this->Auth->user('branch'),'User.role'=>'co-ordinator','User.college'=>$this->Auth->user('college'))));
		 
		 $this->set("user",$this->Auth->user('name'));
		
		 

		$this->Email->from    = 'vinayakdarji@gmail.com';
		$this->Email->to      = $omail['User']['email'];
		$this->Email->template='omail';
		$this->Email->sendAs = 'text';
		$this->Email->subject = 'An order placed by a user';
		$this->Email->send();

    /* Check for SMTP errors. */
    $this->set('smtp_errors', $this->Email->smtpError);
   
	}
	
	function __setSmtpOptions(){
			/* SMTP Options */
	   $this->Email->smtpOptions = array(
	        'port'=>'465', 
	        'timeout'=>'30',
	        'host' => 'ssl://smtp.gmail.com',
	        'username'=>'vinayakdarji@gmail.com',
	        'password'=>'vinurocks'
	   );
	   
	   
		

    /* Check for SMTP errors. */
    //$this->set('smtp_errors', $this->Email->smtpError);
	
		/* Set delivery method */
    $this->Email->delivery = 'smtp';
	}
}
?>