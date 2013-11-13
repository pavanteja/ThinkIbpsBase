<div class="logoback"></div>
<div class="container">
 
<div class="logo"></div>
<div class="navbar ex-nav ">
  <div class="navbar-inner">
    <ul class="nav">
      <li ><?php echo $this->Html->link('Home', array('controller' => 'Users', 'action' => 'Dashboard', 50)); ?></li>
      <li>
	  <?php echo $this->Html->link('Exams', array('controller' => 'Exams', 'action' => 'index', 50)); ?></li>
      <li  class="active"><a href="Reports.html">Reports</a></li>
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
<tr><td><?php echo $c ?></td><td><?php echo $ex['Exam']['name'].'('.$ex['Exam']['id'].')' ?></td><td>Poor</td>
<td>
<div class="progress" style="margin-bottom:0;">
  <div class="bar" style="width: <?php echo (intval($ex['Exam']['marks'])/250)*100 ?>%;"><?php echo (intval($ex['Exam']['marks'])/250)*100 ?>%</div>
</div>
</td>
<td>
<button class="btn btn-mini btn-success vdetails">View Details</button>


</td>
</tr>
<tr style="display:none;"><td colspan="5">
<div class="row-fluid">
<div class="span4 well well-small">
<div class="r1 t1">Exam Summary</div>
</div>
<div class="span4 well well-small">
<div class="r1 t2">Score</div>
</div>
<div class="span4 well well-small">
<div class="r1 t3">Performance</div>
</div>
</div>

<div class="row-fluid">
<div class="span12 well well-small">
<table class="table">
<tr><th>All Questions</th><th>Correct</th><th>Incorrect</th><th>Unanswered</th><th>Time Taken</th><th>Negative Marks</th><th>Total Score</th></tr>
<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table>
</div>
</div>

<div class="row-fluid">
<div class="span6 well well-small">
<div class="r1 t1">Section wise Score</div>
</div>
<div class="span6 well well-small">
<div class="r1 t2">Section wise Time taken</div>
</div>

</div>

<div class="row-fluid">
<ul class="nav nav-tabs" id="myTab">
  <li class="active" ><a href="#Aptitude" data-toggle="tab">Aptitude</a></li>
  <li><a href="#English" data-toggle="tab">English</a></li>
  <li><a href="#GeneralAwareness" data-toggle="tab">General Awareness</a></li>
  <li><a href="#Reasoning" data-toggle="tab">Reasoning</a></li>
  <li><a href="#ComputerKnowledge" data-toggle="tab">Computer Knowledge</a></li>
</ul>
 
<div class="tab-content">
  <div class="tab-pane active" id="Aptitude">Aptitude</div>
  <div class="tab-pane" id="English">English</div>
  <div class="tab-pane" id="GeneralAwareness">General Awareness</div>
  <div class="tab-pane" id="Reasoning">Reasoning</div>
  <div class="tab-pane" id="ComputerKnowledge">Computer Knowledge</div>
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
echo "<p id=cat$i>" .($arr1[$i]/250)*100 .'</p>';
}

 ?>



</div>
<?php //debug($extaken); ?>
