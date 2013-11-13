<div id="Exheader">
<span>CWE Online Assessment Mock Test</span>
</div>
<div style="display:none;" class="jsonquestions">
<?php echo json_encode($questions); ?>

</div>
<div id="ExamID" style="display:none;"><?php echo $ExamID; ?></div>
<div class="container-fluid exam">
<div class="row-fluid">
<div class="span9 q_single_question q_sections1 bg">
<div class="btn-groupp" data-toggle="buttons-radio">
  <button type="button" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="Aptitude" class="btnm ttp apt">Aptitude</button>
  <button type="button" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="General Awareness" class="btnm ttp ga">General Awareness</button>
  <button type="button" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="Reasoning" class="btnm ttp res">Reasoning</button>
  <button type="button" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="English" class="btnm ttp eng">English</button>
  <button type="button" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="Computer Awareness" class="btnm ttp ca">Computer Awareness</button>
</div>
</div>


<div class="span3 w240 q_single_question lblbold time_name">
<div class="pull-left">Time Left : &nbsp;</div> <div id="time">00:00</div>
<div class="pull-left">Name : &nbsp;</div><div id="username"></div>
</div>
</div>
<div class="row-fluid">

<div class="examarea span12">

<div class="span9 q_single_question q_min_height q_area">
<div class="q_qn"><div class="pull-left">Question Number : </div><div id="qnum"></div><div id="ival" class="hide"></div></div>
<table class="q_single_question_table">
<tr class="qr qr_question"><td id="q"></td><td style="display:none;"></td></tr>
<tr class="qr"><td><input name="ac" value=1 type="radio"></input><span id="c1"><span></td><td style="display:none;"></td></tr>
<tr class="qr"><td><input name="ac" value=2 type="radio"></input><span id="c2"><span></td><td style="display:none;"></td></tr>
<tr class="qr"><td><input name="ac" value=3 type="radio"></input><span id="c3"><span></td><td style="display:none;"></td></tr>
<tr class="qr"><td><input name="ac" value=4 type="radio"></input><span id="c4"><span></td><td style="display:none;"></td></tr>
<tr class="qr"><td><input name="ac" value=5 type="radio"></input><span id="c5"><span></td><td style="display:none;"></td></tr>

</table>
<div class="q_single_question bg" style="position: absolute;bottom: 0;width: 98%;">
<table><tr><td>
<div class="cb_lable"><input type="checkbox" class="cbrev" name="rev" /><button class="btnl revbtn" />Mark for Review</button></div></td><td>
<button class="btnl btnPrev"  data-pque="1" />Clear Answer</button></td><td style="width: 100%;text-align: right;">
<button class="btnl btnNext sandn"  data-nque="2">Save & Next</button></td></tr>
</table>
</div>

</div>

<div class="span3 w240 q_single_question q_min_height q_max_height q_bg">
<div class="q_p_lbl">Question Palette</div>
<div class="q_palette">
<table class="status_ind">
<tr></tr>
</table>
</div>
<div class="leg_btns">
<table>
<tr><td class="legend_lbl" colspan="2">Legend :</td></tr>
<tr><td class="leg atd">Answered</td><td class="leg vtd">Not Answered</td></tr>
<tr><td class="leg rtd">Review</td><td class="leg nvtd">Not Visited</td></tr>
</table>

</div>
<div class="q_single_question bg btncenter">
<input type="button" value="submit" class="btnrp submit hw"/>
<input type="button" href="#myModal" class="btnrp hw allq" data-toggle="modal" value="All Questions" />
</div>
</div>


</div>

</div>




</div>


<div id="myModal" style="width:900px;margin-left:-450px;" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">All Questions</h3>
  </div>
  <div class="modal-body">
    <table class="allquestions table"></table>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>

<div class="pop-content" style="display:none">
<div id="apt-content">
<table class="table">
<tr><td>Answered</td><td id="apt-a" class="popans"><span class="badge badge-success">1</span></td></tr>
<tr><td>Not Answered</td><td id="apt-na" class="popnans"><span class="badge badge-warning">1</span></td></tr>
<tr><td>Review</td><td id="apt-r" class="poprev"><span class="badge badge-info">1</span></td></tr>
<tr><td>Not Visited</td><td id="apt-nv" class="popnv"><span class="badge">1</span></td></tr>
</table>
</div>
<div id="qa-content">
<table class="table">
<tr><td>Answered</td><td id="qa-a" class="popans"><span class="badge badge-success">1</span></td></tr>
<tr><td>Not Answered</td><td id="qa-na" class="popnans"><span class="badge badge-warning">1</span></td></tr>
<tr><td>Review</td><td id="qa-r" class="poprev"><span class="badge badge-info">1</span></td></tr>
<tr><td>Not Visited</td><td id="qa-nv" class="popnv"><span class="badge">1</span></td></tr>
</table>
</div>
<div id="res-content">
<table class="table">
<tr><td>Answered</td><td id="res-a" class="popans"><span class="badge badge-success">1</span></td></tr>
<tr><td>Not Answered</td><td id="res-na" class="popnans"><span class="badge badge-warning">1</span></td></tr>
<tr><td>Review</td><td id="res-r" class="poprev"><span class="badge badge-info">1</span></td></tr>
<tr><td>Not Visited</td><td id="res-nv" class="popnv"><span class="badge">1</span></td></tr>
</table>
</div>
<div id="eng-content">
<table class="table">
<tr><td>Answered</td><td id="eng-a" class="popans"><span class="badge badge-success">1</span></td></tr>
<tr><td>Not Answered</td><td id="eng-na" class="popnans"><span class="badge badge-warning">1</span></td></tr>
<tr><td>Review</td><td id="eng-r" class="poprev"><span class="badge badge-info">1</span></td></tr>
<tr><td>Not Visited</td><td id="eng-nv" class="popnv"><span class="badge">1</span></td></tr>
</table>
</div>
<div id="ca-content">
<table class="table">
<tr><td>Answered</td><td id="ca-a" class="popans"><span class="badge badge-success">1</span></td></tr>
<tr><td>Not Answered</td><td id="ca-na" class="popnans"><span class="badge badge-warning">1</span></td></tr>
<tr><td>Review</td><td id="ca-r" class="poprev"><span class="badge badge-info">1</span></td></tr>
<tr><td>Not Visited</td><td id="ca-nv" class="popnv"><span class="badge">1</span></td></tr>
</table>
</div>
</div>
<?php echo $this->Html->script('jquery');  ?>
<?php echo $this->Html->script('script');  ?>
<div id="Exfooter">
<span> All Rights Reserved &copy; 123Services</span>
</div>