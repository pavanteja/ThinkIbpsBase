<?php 
class ReportsController extends AppController
{
	


var $helpers = array('Html', 'Form');


public function index($id=null)
{
$this->loadModel('Exam');
$this->Exam->recursive = -1;
$completedX=$this->Exam->find('count',array('conditions' => array('Exam.users_id =' => $id,'Exam.marks <>'=>null)));
$totalX=$this->Exam->find('count',array('conditions' => array('Exam.users_id =' => $id)));

$catreport=$this->Exam->query(
    'SELECT b.categories_id, COUNT( a.marks ) 
FROM  `question_exams` a
INNER JOIN questions b ON a.question_id = b.id
WHERE a.marks >0
AND a.exam_id
IN (

SELECT id
FROM exams
WHERE users_id =?
)
GROUP BY b.categories_id',
    array($id)
);
$this->set('id',$id);
$this->set('excdp',($completedX/$totalX)*100);
$this->set('excd',($completedX));
$this->set('perf',$this->Exam->find('first',array('conditions' => array('Exam.users_id =' => $id,'Exam.marks <>'=>null),'fields'=>array('AVG(performance) as avgp'))));
$this->set('catreport',$catreport);
$this->set('extaken',$this->Exam->find('all',array('conditions' => array('Exam.users_id =' => $id,'Exam.marks <>'=>null))));
}


}

?>