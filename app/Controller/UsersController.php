<?php 
class UsersController extends AppController
{
	


	var $helpers = array('Html', 'Form');


public function logout() {

}
	function index() {
		
		$this->redirect('/users/login');
	}


	
	function login() {
	
			if ($this->request->is('post')) {
			
        $usrDetail=$this->User->findAllByNameAndPassword($this->request->data['name'],$this->request->data['password']);
		if(count($usrDetail)==1)
		{
		
		$this->redirect('/Dashboard/index/'.$usrDetail[0]['User']['id']);
		}
		else
		{
		 $this->Session->setFlash(__('Your post has been saved.'));
		}
       
    }
	}
	

	}
	
	
	?>