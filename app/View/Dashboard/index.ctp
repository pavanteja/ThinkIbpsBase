<div class="logoback"></div>
<div class="container">
 
<div class="logo"></div>
<?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'),array('class' => 'btn btn-small logout')); ?>
<div class="navbar ex-nav ">
  <div class="navbar-inner">
    <ul class="nav">
      <li  class="active"><a>Home</a></li>
      <li>
	  <?php echo $this->Html->link('Exams', array('controller' => 'Exams', 'action' => 'index', $id)); ?></li>
      <li><?php echo $this->Html->link('Reports', array('controller' => 'Reports', 'action' => 'index', $id)); ?></li>
    </ul>
  </div>
</div>

<div class="dashboard">
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
<div class="row">
<div id="lchart" class="span12 well well-small" style="height:350px;padding: 0px;">
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

 
 <?php 
for($i=0;$i<=count($aexd);$i=$i+1)
{
$j=$i+1;
echo "<p id=exam$j>" .$aexd[$i]['Exam']['marks'].'</p>';
}

 ?>


</div>

