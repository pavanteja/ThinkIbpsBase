<?php 
class UsersController extends AppController
{
	


	var $helpers = array('Html', 'Form');

	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('register','index');
    }
	
	 public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function register() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been registered.'));
                return $this->redirect(array('action' => 'login'));
            }
            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'login'));
            }
            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
        } else {
            $this->request->data = $this->User->read(null, $id);
            $this->request->data['User']['password'];
        }
    }

    public function delete($id = null) {
        $this->request->onlyAllow('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }

public function login() {
    if ($this->request->is('post')) {
	//debug($this->request->data);
        if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirect());
        }
        $this->Session->setFlash(__('Invalid username or password, try again'));
    }
}

public function logout() {
    return $this->redirect($this->Auth->logout());
}

	//public function logout() {
	//
	//}
	//function index() {
	//	
	//	$this->redirect('/users/login');
	//}
    //
    //
	//
	//function login() {
	//
	//		if ($this->request->is('post')) {
	//		
    //    $usrDetail=$this->User->findAllByNameAndPassword($this->request->data['name'],$this->request->data['password']);
	//	if(count($usrDetail)==1)
	//	{
	//	
	//	$this->redirect('/Dashboard/index/'.$usrDetail[0]['User']['id']);
	//	}
	//	else
	//	{
	//	 $this->Session->setFlash(__('Your post has been saved.'));
	//	}
    //   
    //}
	//}
	

	}
	
	
	?>