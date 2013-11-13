<div class="logoback"></div>
<div class="container">
 
<div class="logo"></div>
<?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'),array('class' => 'btn btn-small logout')); ?>
<div class="navbar ex-nav ">
  <div class="navbar-inner">
    <ul class="nav">
      <li > <?php echo $this->Html->link('Home', array('controller' => 'Dashboard', 'action' => 'index', $id)); ?></li>
      <li class="active"><a href="#">Exams</a></li>
      <li><?php echo $this->Html->link('Reports', array('controller' => 'Reports', 'action' => 'index', $id)); ?></li>
    </ul>
  </div>
</div>
<script language="javascript" type="text/javascript">
<!--
function popitup(url) {
	newwindow=window.open(url,'name','height='+screen.availHeight+',width='+screen.availWidth);
	if (window.focus) {newwindow.focus()}
	return false;
}

// -->
</script>
<table class="qtable" >
<?php
if(count($exams)>1)
{
$counter = 1;
foreach($exams as $exam)
{
?>



<?php if($counter%5==1) 
echo '<tr>';
?>

<td><div><p><?php echo $counter++ ?></p>


<?php 

if($exam['Exam']['marks']=='')
{
echo $this->Html->link('Take Exam', array('controller' => 'papers', 'action' => 'index',$exam['Exam']['id']), array('onclick'=>'return popitup(this.href)','class' => 'btn btn-block'));
}
else
{
echo $this->Html->link('View Result',array('controller' => 'ViewDetails', 'action' => 'index',$exam['Exam']['id']), array('class' => 'btn btn-primary btn-block'));
}
?>
</div></td>
<?php if($counter%5==1) 
echo '</tr>';
?>




<?php //echo $exam['Exam']['marks']; ?>

<?php //echo $exam['Exam']['performance']; ?>



<?php
}
}
else
{
echo 'ok';
}

?>
</table>
</div>