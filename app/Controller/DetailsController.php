<?php 
class DetailsController extends AppController
{
	


var $helpers = array('Html', 'Form');


public function index($id=null)
{
$this->layout=false;
$this->loadModel('Exam');
$this->Exam->recursive = -1;
$examdetails=$this->Exam->find('all',array('conditions' => array('Exam.id =' => $id)));
$examtdiff=$this->Exam->find('all',array('conditions' => array('Exam.id =' => $id),'fields'=>array('TIMEDIFF( etime, stime ) as tdiff')));
//$totalX=$this->Exam->find('count',array('conditions' => array('Exam.users_id =' => $id)));

$catreport=$this->Exam->query(
    'SELECT b.categories_id, SUM( a.marks ) , SUM( a.anstime ) 
FROM  `question_exams` a
INNER JOIN questions b ON a.question_id = b.id
WHERE a.exam_id =?
GROUP BY b.categories_id',
    array($id)
);


$questiontime=$this->Exam->query("SELECT b.categories_id, b.question,a.anstime,CASE when a.marks=0 then 'Unanswered' when a.marks<0 then 'Incorrect' when a.marks>0 then 'Correct' END AS Answer
FROM  `question_exams` a
INNER JOIN questions b ON a.question_id = b.id
WHERE a.exam_id=?",array($id));

$this->set('examdetails',$examdetails);
$this->set('examcatdetails',$catreport);
$this->set('questiontime',$questiontime);
$this->set('examtdiff',$examtdiff);
}


}

?>