<?php 
App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel
{
var $name='User';

public $validate = array(
        'username' => array(
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
		,
        'firstname' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A Firstname is required'
            )
        )
		,
        'email' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A email is required'
            )
        )
		,
        'phone' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A phone is required'
            )
        )
    );


public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
}

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