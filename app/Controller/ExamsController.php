<?php 
class ExamsController extends AppController
{
	

public function beforeFilter() {
        parent::beforeFilter();
       $this->Auth->allow('submit');
    }

	function index() {
	$id=$this->Auth->user('id');
	if(!isset($id))
	{
	$this->set('exams','ok');
	}
	else
	{
	$this->set('id',$id);
	$this->Exam->recursive = -1;
		$this->set('exams',$this->Exam->find('all',array('conditions' => array('Exam.users_id =' => $id),'order' => array('Exam.users_id' => 'desc'),'limit' => 2)));
		}
	}
	
	function assignQuestions($cata,$suba,$lia)
	{
	$this->loadModel('Question_exam');
	for($i=0;$i<count($suba);$i++)
	{
	$this->Question_exam->create();
	$this->Question_exam->set(array(
    'exam_id' => $lia['Exam']['id'],
    'question_id' => $cata[$suba[$i]]['Questions']['id']
	));
	$this->Question_exam->save();
	}
	}
	public function generate($id) {
	
	$this->loadModel('User');
	$this->loadModel('Question');
	
	$this->User->create();
	srand();
	$uname='User'.rand();
	$this->User->set('name', $uname);
	$this->User->set('password', $uname);
	$li=$this->User->save();
	
	for($i=1;$i<=20;$i++)
	{
	$this->Exam->create();
	$this->Exam->set(array(
    'name' => $uname.'-'.$i,
    'users_id' => $li['User']['id'],
	'type'=>$id
	));
	$lii=$this->Exam->save();
	$qnums= range(0, 99);
	shuffle($qnums);
	//$subArray = array_slice($qnums,0,50);
$apt=40;$ga=40;$re=40;$eng=40;$ca=40;
	if($id==1)
	{
	
	}
	if($id==2)
	{
	$re=50;
	$apt=50;
	$ca=20;
	}
	
	
	$cat1=$this->Question->query("SELECT id FROM Questions where categories_id=1;");
	$this->assignQuestions($cat1,array_slice($qnums,0,$apt),$lii);
	
	
	$cat2=$this->Question->query("SELECT id FROM Questions where categories_id=2;");
	$this->assignQuestions($cat2,array_slice($qnums,0,$ga),$lii);
	
	
	$cat3=$this->Question->query("SELECT id FROM Questions where categories_id=3;");
	$this->assignQuestions($cat3,array_slice($qnums,0,$re),$lii);
	
	
	$cat4=$this->Question->query("SELECT id FROM Questions where categories_id=4;");
	$this->assignQuestions($cat4,array_slice($qnums,0,$eng),$lii);
	
	
	$cat5=$this->Question->query("SELECT id FROM Questions where categories_id=5;");
	$this->assignQuestions($cat5,array_slice($qnums,0,$ca),$lii);
	
	}
	
		$this->set('exams',$this->Exam->find('all'));
	}

function submit()
{
$this->loadModel('Question_exam');
 $this->layout=false;
 $answers=explode(',',$this->request->data['ans']);
 $time=explode(',',$this->request->data['time']);
 $qids=explode(',',$this->request->data['qids']);
 $eid=$this->request->data['eid'];
 $pdbqid=explode(',',$this->request->data['pdbqid']);
  $qansa=explode(',',$this->request->data['pqansa']);
$tmarks=0;
$allq=0;$correct=0;$incorrect=0;$unans=0;$timetaken=0;$negmarks=0;
 
 for($i=0;$i<count($qids);$i++)
 {
 $allq=$allq+1;
$atans=intval(trim($answers[$i]));
$adbans=intval(trim(substr($qansa[$i],1,1)));
$mark=0.0;
if($atans==$adbans)
{
$mark=1.0;
$correct=$correct+1;
}
else
{
if($atans!=0)
{
$mark=-0.25;
$incorrect=$incorrect+1;
$negmarks=$negmarks-0.25;
}
if($atans==0)
{
$unans=$unans+1;
}
}
 $data = array('id' => $pdbqid[$i], 'marks' => $mark,'anstime'=>intval($time[$i]));
 $this->Question_exam->save($data);
  $tmarks=$tmarks+$mark;
 }
 $this->loadModel('Exam');
 //$mod=$tmarks%25;
 //$tempPerf=$tmarks+(25-$mod);
 //$performance=$tempPerf/25;
 $Ansdata = array('id' => intval($eid), 'marks' => $tmarks,'performance'=>round($tmarks/20),'allquestions'=>$allq,'correct'=>$correct,'incorrect'=>$incorrect,'unans'=>$unans,'timetaken'=>$timetaken,'negmarks'=>$negmarks,'stime'=>$this->request->data['sdate'],'etime'=>$this->request->data['etime']);
$this->Exam->save($Ansdata);
 
$this->set('result',$tmarks);
}
	
	}
	?>