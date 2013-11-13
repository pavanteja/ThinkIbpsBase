<div class="logoback"></div>
<div class="container">
 
<div class="logo"></div>
<div class="navbar ex-nav ">
  <div class="navbar-inner">
    <ul class="nav">
      <li ><?php echo $this->Html->link('Home', array('controller' => 'Dashboard', 'action' => 'index',  $extaken[0]['Exam']['users_id'])); ?></li>
      <li  class="active"><a href="#">Exams</a></li>
      <li ><?php echo $this->Html->link('Reports', array('controller' => 'Reports', 'action' => 'index',  $extaken[0]['Exam']['users_id'])); ?></li>
    </ul>
  </div>
</div>

<div class="dashboard">
<div class="row">
<div class="span12">
<table class="table table-striped">
<tr style="display:none;"><th>S.No</th><th>Exam Name</th><th>Result</th><th>Percentage</th><th>Details</th></tr>

<?php 
$c=1;
foreach($extaken as $ex)
{
?>
<tr style="display:none;"><td><?php echo $c ?></td><td><?php echo 'Test-'.$c//echo $ex['Exam']['name'].'('.$ex['Exam']['id'].')' ?></td><td>

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
<button class="btn btn-mini btn-success vdtl vdetails" data-fetched=0 data-eid="<?php echo $ex['Exam']['id'] ;?>">View Details</button>


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
</div>


</div>
