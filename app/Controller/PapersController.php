<?php 
class PapersController extends AppController
{
	


	
	
 

	function index($id) {
		
	$this->loadModel('Question_exam');
//$this->response->type('json');
//$this->layout = false;
//$this->Question->recursive = -1;
		$this->set('ExamID',$id);
		$this->set('questions',$this->Question_exam->find('all',array('conditions' => array('Exam.id =' => $id),'order' => array('Question.categories_id' => 'desc'))));//$this->Question->find('all',array('order' => array('Question.categories_id' => 'desc'))));
	}


	
	}
	?>