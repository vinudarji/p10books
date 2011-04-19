<?php
class AppController extends Controller {
    var $components = array(
				'Session',
        'Auth' => array(
            'fields' => array(
								'username' => 'email',
								'password' => 'password'
								),
						'loginError' => "Oops! We didn't recognize the email or password you entered. Please try again.",
						'authError' => "Please sign in first and then we'll send you right along.",		
            'loginAction' => array(
                'controller' => 'users',
                'action' => 'signin',
                'plugin' => false,
               'admin' => false,
                ),
             )
         );

function _paginatorURL() { $passed = ""; $retain = $this->params['url']; unset($retain['url']); $this->set('paginatorURL',array($passed, '?' => http_build_query($retain))); }
}
?>