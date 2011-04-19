<?php
class SellordersController extends AppController {

	var $name = 'Sellorders';

	function index() {
		$this->Sellorder->recursive = 0;
		$this->set('sellorders', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid sellorder', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('sellorder', $this->Sellorder->read(null, $id));
	}

	function history(){
		$this->set('orders', $this->Sellorder->find('all',array('conditions'=>array('Sellorder.user_id' => $this->Auth->user('id')))));
		$this->set('user',$this->Auth->user());
	}
	
	function add() {
		if (!empty($this->data)) {
			$this->Sellorder->create();
			$users = $this->Sellorder->User->find('list');
		$books = $this->Sellorder->Book->find('list');
		$this->set(compact('users', 'books'));
			if ($this->Sellorder->save($this->data)) {
			$this->redirect(array('action' => 'sendemail'));
				//$this->Session->setFlash(__('<div class="head-success">Your Book Has Been Saved.<br/>PLease Ship Your Book to this address after that we will put your book to aell.<br/>Address : - 308, Abhishek Plaza,
//B/h Navagujarat College,
//Ashram Road, Ahmedabad 380 014.</div>', true));
		
				$this->redirect(array('action' => 'message'));
				
			} else {
				$this->Session->setFlash(__('The sellorder could not be saved. Please, try again.', true));
			}
		}
		
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid sellorder', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Sellorder->save($this->data)) {
				$this->Session->setFlash(__('The sellorder has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sellorder could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Sellorder->read(null, $id);
		}
		$users = $this->Sellorder->User->find('list');
		$books = $this->Sellorder->Book->find('list');
		$this->set(compact('users', 'books'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for sellorder', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Sellorder->delete($id)) {
			$this->Session->setFlash(__('Sellorder deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Sellorder was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function message()
	{
	}
	
	function sendemail(){
		
		$this->__setSmtpOptions();
		 $omail = $this->Order->User->find('first', array('conditions' => array('User.branch' => $this->Auth->user('branch'),'User.role'=>'co-ordinator','User.college'=>$this->Auth->user('college'))));
		 

		$this->Email->from    = 'vinayakdarji@gmail.com';
		$this->Email->to      = $omail['User']['email'];
		$this->Email->subject = 'Test';
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