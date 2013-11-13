<?php 
class ViewDetailsController extends AppController
{
	


var $helpers = array('Html', 'Form');
public function beforeFilter() {
        parent::beforeFilter();
       
    }

public function index($id=null)
{
$this->loadModel('Exam');
$this->Exam->recursive = -1;

$this->set('extaken',$this->Exam->find('all',array('conditions' => array('Exam.id =' => $id))));
}


}

?>