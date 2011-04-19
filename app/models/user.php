<?php
class User extends AppModel {
	var $name = 'User';
	var $hasMany = array('Order' => array(	'className' => 'Order'),
											 'Sellorder' => array(	'className' => 'Sellorder'),'Book'=>array('classname'=>'Book'));
	
	var $validate = array(
				'email' => array(
					'rule' => 'email',
					'message' => 'Please enter valid email address'
				),
				'password_unhashed' => array(
					'rule' => array('minLength', '6'),
					'message' => 'Password must be at least 6 characters long'
				),
				'mobile' => array(
					'rule' => '/[0-9]$/i',
					'message' => 'Please enter valid mobile'
				),
				'pincode' => array(
					'rule' => '/[0-9]$/i',
					'message' => 'Please enter valid pincode'
				),
				'fullname' => array(
					'rule1' => array(
						'rule' => '/[a-zA-Z\s\S]$/i',
						'message' => 'Please enter valid fullname'
					),
					'rule2' => array(
						'rule' => 'notEmpty',
						'message' => 'Please enter fullname'
					)
				),
				'college' => array(
					'rule2' => array(
						'rule' => 'notEmpty',
						'message' => 'Please enter college'
					)
				),
				'university' => array(
					'rule2' => array(
						'rule' => 'notEmpty',
						'message' => 'Please enter university'
					)
				),
				'rollno' => array(
					'rule2' => array(
						'rule' => 'notEmpty',
						'message' => 'Please enter rollno'
					)
				),
				'branch' => array(
					'rule2' => array(
						'rule' => 'notEmpty',
						'message' => 'Please enter branch'
					)
				),
				'semester' => array(
					'rule2' => array(
						'rule' => 'notEmpty',
						'message' => 'Please enter semester/year'
					)
				),
				'address1' => array(
					'rule2' => array(
						'rule' => 'notEmpty',
						'message' => 'Please enter address1'
					)
					
				)
			);
			
			function createTempPassword($len) {
			  $pass = '';
			  $lchar = 0;
			  $char = 0;
			  for($i = 0; $i < $len; $i++) {
			    while($char == $lchar) {
			      $char = rand(48, 109);
			      if($char > 57) $char += 7;
			      if($char > 90) $char += 6;
			    }
			    $pass .= chr($char);
			    $lchar = $char;
			  }
			  return $pass;
			}
}
?>