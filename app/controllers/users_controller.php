<?php
class UsersController extends AppController {

	var $name = 'Users';
	 
	var $components = array('Email','Cookie','Image');

	function beforeFilter(){
		$this->Auth->allow('add','forgot','sendemail', 'resetpassword');
		$this->Auth->autoRedirect = false;
		//$this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'view');
  }

	function beforeRender() {
	    parent::beforeRender();
	    $this->data['User']['password'] = '';
	}
	
	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function sendemail(){
		
		$this->__setSmtpOptions();

		$this->Email->from    = 'vinayakdarji@gmail.com';
		$this->Email->to      = 'vinayakdarji@gmail.com';
		$this->Email->subject = 'Test';
		$this->Email->send('Hello message body!');

    /* Check for SMTP errors. */
    $this->set('smtp_errors', $this->Email->smtpError);
   
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}
	
	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			$this->data['User']['password'] = $this->Auth->password($this->data['User']['password_unhashed']);
			
			if ($this->User->save($this->data)) {	
				//login user and redirect to home
				$this->Auth->login($this->data); //will use the POST data passed on registration page (email, password field)
				$this->redirect(array('controller' => 'home', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('<div class="head-error">Registration failed! Please, correct highlighted errors and try again.</div>', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('<div class="head-success">User information updated successfully!</div>', true));
				$this->redirect(array('action' => 'view', $this->User->id));
			} else {
				$this->Session->setFlash(__('<div class="head-error">Please correct highlighted errors and try again.</div>', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function signin(){
			
			  if ($this->Auth->user('role') == 'user') {
			  		$this->redirect(array('action'=>'view',$this->Auth->user('id')));
			  }
			  
			  if($this->Auth->user('role') == 'admin') {
			  		$this->redirect(array('action'=>'ahome'));
			  }
			  else if ($this->Auth->user('role') == 'co-ordinator') {
			  		$this->redirect(array('action'=>'chome'));
			  }
		 
		
	}
	
	function signout(){
		$this->redirect($this->Auth->logout());
	}
	
	function forgot() {
	  if(!empty($this->data)) {
	    $user = $this->User->findByEmail($this->data['User']['email']);
	    if($user) {
	      $user['User']['tmp_password'] = $this->User->createTempPassword(7);
				$user['User']['passwordresetrequested'] = 1;
	      $user['User']['passwordresetcode'] = $this->Auth->password($user['User']['tmp_password']);
	      if($this->User->save($user, false)) {
	        $this->__sendPasswordEmail($user, $user['User']['passwordresetcode']);
					
	        $this->redirect($this->referer());
	      }
	    } else {
	      $this->Session->setFlash('<div class="head-error">No user was found with the submitted email address.</div>');
	    }
	  }
	}
	
	function resetpassword($passwordcode = null){
		if (!$passwordcode) {
			$this->redirect(array('action' => 'index'));
		}
		
		$user = $this->User->find('first', array('conditions' => array('passwordresetcode' => $passwordcode)));
		
		if(!$user){
			$this->Session->setFlash(__('<div class="head-error">Invalid Link.</div>', true));
			$this->redirect(array('controller' => 'home', 'action' => 'index'));
		}
		
		$this->set('user', $user);
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
	
		/* Set delivery method */
    $this->Email->delivery = 'smtp';
	}
	
	function __sendPasswordEmail($user, $passwordcode) {
	  if ($user === false) {
	    debug(__METHOD__." failed to retrieve User data for user.id: {$user['User']['id']}");
	    return false;
	  }
    
		$this->__setSmtpOptions();

	  $this->set('user', $user['User']);
	  $this->set('passwordcode', $passwordcode);
		$this->set('passwordcodeurl', '	http://localhost/p10books_func/users/resetpassword/' . $passwordcode);

	  $this->Email->to = $user['User']['email'];
	  $this->Email->subject = 'Password Change Request';
	  $this->Email->from = 'vinayakdarji@gmail.com';
	  $this->Email->template = 'users_forgot';
	  $this->Email->sendAs = 'text';  // you probably want to use both
	  $this->Cookie->write('Referer', $this->referer(), true, '+2 weeks');
		$this->Session->setFlash('<div class="head-success">An email has been sent with your new password.</div>');
	  return $this->Email->send();
	}
	
	function uploadpic(){
		$this->Image->set_paths(WWW_ROOT . 'img/user/upload/', WWW_ROOT . 'img/user/thumb/'); 

			//upload the book cover image		
			$filename = $this->Image->upload_image('User.propic');
			if($filename){
				$this->set('userpic', $filename['filename']);
			}
			
			$userpicname = $filename['filename'];
			
			//create the book cover image	thumbnail	
			$this->Image->width = 120;
			$this->Image->height = 120;
			$filename_thumb = $this->Image->thumb($filename['filepath']);
			
			$user = $this->User->findByEmail($this->Auth->user('email'));
	   		 if($user) {
	      		$user['User']['userpic'] = $userpicname;
				$user['User']['picthumb'] = $filename_thumb['filename'];
				
	   
			}
			
			$this->User->save($user, false);
			
	
		
	}
	function addpropic(){
	}
	
	function changepassword(){
  		if(!empty($this->data)){
    		$user = $this->User->findByEmail($this->Auth->user('email'));
    			if($user){
     				if ($this->data['User']['newpassword'] == $this->data['User']['confirmpassword']){
      					if ($this->User->save($this->data)) {
       						$user['User']['password'] = $this->Auth->password($this->data['User']['newpassword']);
       							if($this->User->save($user, false)) {
        							$this->Session->setFlash(__('<div class="head-success">You have changed your password successfully!</div>', true));
        							$this->redirect(array('action' => 'view', $this->User->id));
       							} 
      					} 
    				 }
     				else {
         					$this->Session->setFlash(__('<div class="head-error">Typed passwords did not match</div>', true));
      						$this->redirect(array('action' => 'changepassword', $this->User->id));
     					}
    			} 
    
  			}
		 }
		 
		 function ahome(){
		 	$users = $this->User->find('count');
			$books = $this->User->Book->find('count');
			$orders = $this->User->Order->find('count');
			$sos = $this->User->Sellorder->find('count');
			$this->set('users',$users);
			$this->set('books',$books);
			$this->set('orders',$orders);
			$this->set('sos',$sos);
		 
		 }
		 
		 function vcorder() {
	$options['joins'] = array(
    array('table' => 'users',
        'alias' => 'User1',
        'type' => 'INNER',
        'conditions' => array('User1.branch' => $this->Auth->user('branch'),'User1.college'=>$this->Auth->user('college'),'User1.role'=>'user',
            'User1.id = Order.user_id',
        )
    )
	
);
$orders=$this->User->Order->find('all',$options);
$this->set("ou",$orders);
}

 function vcsorder() {
	$options['joins'] = array(
    array('table' => 'users',
        'alias' => 'User1',
        'type' => 'INNER',
        'conditions' => array('User1.branch' => $this->Auth->user('branch'),'User1.college'=>$this->Auth->user('college'),'User1.role'=>'user',
            'User1.id = Sellorder.user_id',
        )
    )
	
);
$orders=$this->User->Sellorder->find('all',$options);
$this->set("ou",$orders);
}

function chome(){

}





}
?>