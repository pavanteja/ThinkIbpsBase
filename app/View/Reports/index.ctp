<div class="logoback"></div>
<div class="container">
 
<div class="logo"></div>
<?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'),array('class' => 'btn btn-small logout')); ?>
<div class="navbar ex-nav ">
  <div class="navbar-inner">
    <ul class="nav">
      <li ><?php echo $this->Html->link('Home', array('controller' => 'Dashboard')); ?></li>
      <li>
	  <?php echo $this->Html->link('Exams', array('controller' => 'Exams')); ?></li>
      <li  class="active"><a href="#">Reports</a></li>
    </ul>
  </div>
</div>

<div class="dashboard">
<div class="row">
<div class="span12">
<table class="table table-striped">
<tr><th>S.No</th><th>Exam Name</th><th>Result</th><th>Percentage</th><th>Details</th></tr>

<?php 
$c=1;
foreach($extaken as $ex)
{
?>
<tr><td><?php echo $c ?></td><td><?php echo 'Test-'.$c//echo $ex['Exam']['name'].'('.$ex['Exam']['id'].')' ?></td><td>

<?php if((intval($ex['Exam']['marks'])/200)*100<40) {?>
Poor
<?php }else if ((intval($ex['Exam']['marks'])/200)*100>=40 && (intval($ex['Exam']['marks'])/200)*100 <70){?>
Average
<?php }else if ((intval($ex['Exam']['marks'])/200)*100>=70 && (intval($ex['Exam']['marks'])/200)*100 <100){?>
Good
<?php }?>

</td>
<td>
<div class="progress" style="margin-bottom:0;">
  <div class="bar" style="width: <?php echo (intval($ex['Exam']['marks'])/200)*100 ?>%;"><?php echo (intval($ex['Exam']['marks'])/200)*100 ?>%</div>
</div>
</td>
<td>
<button class="btn btn-mini btn-success vdetails" data-fetched=0 data-eid="<?php echo $ex['Exam']['id'] ;?>">View Details</button>


</td>
</tr>
<tr style="display:none;" class="vdtr"><td colspan="5">
<div class="row-fluid">
<div class="span4 well well-small">
<div class="r1 t1">Exam Summary</div>
<div>
<div>
<div class="row-fluid">
<div class="span4">Start Time :</div>
<p class="span8 stime">

</p>
</div>
<div class="row-fluid">
<div class="span4">End Time :</div>
<p class="span8 etime">

</p>
</div>
</div>
</div>
</div>
<div class="span4 well well-small">
<div class="r1 t2">Score</div>
<div>
<div class="row-fluid">
<div class="span4">Required score</div>
<div class="span8">
<div class="progress progress-info">
  <div class="bar" style="width: 50%">100</div>
</div>
</div>
</div>
<div class="row-fluid">
<div class="span4">Your score</div>
<div class="span8">
<div class="progress progress-info">
  <div class="bar yourscore" style="width: 0%"></div>
</div>
</div>
</div>
</div>
</div>
<div class="span4 well well-small" >
<div class="r1 t3">Performance</div>
<div style="height:80px">
 <div class="star-wrapper d1" style="width:175px;top: -40px;">
  <div class="star nstar" style="width:175px">
  </div>
  <div>
  <div class="pstar star" style="width:0%;">
  </div>
  </div>
  </div>

</div>
</div>
</div>

<div class="row-fluid">
<div class="span12 well well-small">
<table class="table table-bordered exdetail">
<tr><th>All Questions</th><th>Correct</th><th>Incorrect</th><th>Unanswered</th><th>Time Taken</th><th>Negative Marks</th><th>Total Score</th></tr>
<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table>
</div>
</div>

<div class="row-fluid">
<div class="span6 well well-small">
<div class="r1 t1">Section wise Score</div>
<div class="scchartContainer" ></div>
</div>
<div class="span6 well well-small">
<div class="r1 t2">Section wise Time taken</div>
<div class="stchartContainer" ></div>
</div>

</div>

<div class="row-fluid">
<ul class="nav nav-tabs" id="myTab">
  <li class="active" ><a href=".tAptitude" data-toggle="tab">Aptitude</a></li>
  <li><a href=".tGeneralAwareness" data-toggle="tab">General Awareness</a></li>
  <li><a href=".tReasoning" data-toggle="tab">Reasoning</a></li>
  <li><a href=".tEnglish" data-toggle="tab">English</a></li>
  <li><a href=".tComputerKnowledge" data-toggle="tab">Computer Knowledge</a></li>
</ul>
 
<div class="tab-content qtabcontent">
  <div class="tab-pane active tAptitude">
  <table class="table">
  <tr><th>S.no</th><th>Question</th><th>Time Taken</th><th>Answer</th></tr>
  </table>
  
  </div>
  <div class="tab-pane tEnglish">
  <table class="table">
  <tr><th>S.no</th><th>Question</th><th>Time Taken</th><th>Answer</th></tr>
  </table>
  </div>
  <div class="tab-pane tGeneralAwareness">
  <table class="table">
  <tr><th>S.no</th><th>Question</th><th>Time Taken</th><th>Answer</th></tr>
  </table>
  </div>
  <div class="tab-pane tReasoning">
  <table class="table">
  <tr><th>S.no</th><th>Question</th><th>Time Taken</th><th>Answer</th></tr>
  </table>
  </div>
  <div class="tab-pane tComputerKnowledge">
  <table class="table">
  <tr><th>S.no</th><th>Question</th><th>Time Taken</th><th>Answer</th></tr>
  </table>
  </div>
</div>
 
</div>

</td></tr>
<?php 
$c =$c +1;
}
?>

</table>
</div>
</div>
<div class="row">
  <div class="span6 col-1">
  <div class="col-1-1">
  <div class="d1">
  <div class="progress">
  <div class="bar" style="width:<?php echo $excdp;?>%;"><?php echo $excd;?> Mock tests completed</div>
</div>
</div>

<div class="d2">
  <p class="lead">No of mock tests completed</p>
</div>
  </div>
  <div class="col-1-2">
  
  <div class="star-wrapper d1">
  <div class="star nstar">
  </div>
  <div>
  <div class="pstar star" style="width:<?php echo round($perf[0]['avgp'])*10; ?>%;">
  </div>
  </div>
  </div>
  <div class="d2">
  <p class="lead">Your performance Rating <?php echo round($perf[0]['avgp']); ?>/10</p>
</div>
  </div>
  </div>
  <div class="span6 col-2">
  
  <div id="chartContainer" ></div>
  
  </div>
</div>
</div>


</div>
<div style="display:none;">


<?php 
$arr1=array("1"=>0,"2"=>0,"3"=>0,"4"=>0,"5"=>0);
for($i=0;$i<count($catreport);$i=$i+1)
{
$arr1[$catreport[$i]['b']['categories_id']]=$catreport[$i][0]['COUNT( a.marks )'];
}
for($i=1;$i<=count($arr1);$i=$i+1)
{
echo "<p id=cat$i>" .($arr1[$i]/200)*100 .'</p>';
}

 ?>



</div>
<?php //debug($extaken); ?>
