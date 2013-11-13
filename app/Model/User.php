<?php 
class User extends AppModel
{
var $name='User';

public $validate = array(
        'name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        )
    );



function generate($data) {
		
	/*	$user = $this->find('first', array(
			'conditions' => array(
				'User.sname'=>$data['User']['sname']
			)
		));
		*/
		
	return $this->find('all');
	}
	
function checkLogin($data) {
		// init
		$valid = false;
		
		// find user from the database with the username
		$user = $this->find('first', array(
			'conditions' => array(
				'User.sname'=>$data['User']['sname']
			)
		));
		
		// if the passwords match
		if($user['User']['password'] == $data['User']['password']) {
			$valid = $user;
		}
		
	return $valid;
	}
	
}
?>