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
<div class="q_qn"><div class="pull-left">Question Number : </div><div id="qnum"></div><div id="ival" class="hide"></div><div class="nmarklbl"></div><div class="pmarklbl"></div></div>
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
<div class="cb_lable"><input type="checkbox" class="cbrev" name="rev" /><button class="btnl revbtn" />Mark for Review & Next</button></div></td><td>
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

<input type="button" href="#myModal" class="btnrp hw allq" data-toggle="modal" value="Question paper" />
<input type="button" href="#insModal" data-toggle="modal" value="Instructions" class="btnrp insm hw"/>
</div>
<div class="q_single_question bg btncenter" style="margin-top: -12px;">

<input type="button" href="#profileModal" class="btnrp prfm hw" data-toggle="modal" value="Profile" />
<input type="button" value="Submit" class="btnrp submit hw"/>
</div>
</div>


</div>

</div>




</div>


<div id="myModal" style="width:900px;margin-left:-450px;" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 id="myModalLabel">All Questions</h4>
  </div>
  <div class="modal-body">
    <table class="allquestions"></table>
  </div>
  <div class="modal-footer">
    <button class="btnl sandn" data-dismiss="modal" aria-hidden="true">Back</button>
  </div>
</div>
<div id="profileModal" style="width:900px;margin-left:-450px;" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 id="myModalLabel">Student Profile</h4>
  </div>
  <div class="modal-body">
    <div id="userInfoInner" unselectable="on">
            <table style="width: 33%;margin: 0 auto;" unselectable="on">
            <tbody unselectable="on"><tr unselectable="on"><td class="tdhead" unselectable="on">User Name:&nbsp;</td><td class="tdvalue" unselectable="on"><?php echo substr ( $questions[0]['Exam']['name'], 0, strlen($questions[0]['Exam']['name'])-2 ); ?></td></tr>
            <tr unselectable="on"><td class="tdhead" unselectable="on">Email:</td><td class="tdvalue" unselectable="on"></td></tr>
            </tbody></table>
            </div>
  </div>
  <div class="modal-footer">
    <button class="btnl sandn" data-dismiss="modal" aria-hidden="true">Back</button>
  </div>
</div>
<div id="insModal" style="width:900px;margin-left:-450px;" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 id="myModalLabel">INSTRUCTION FOR ST (CWE P.O.)</h4>
  </div>
  <div class="modal-body">
    <div id="divInstructions" unselectable="on"><p unselectable="on">1. Read carefully the instructions before starting the test.you can read the instructions in between the exam after clicking the <strong unselectable="on">"INSTRUCTION BUTTON".</strong><br unselectable="on">2. You have <strong unselectable="on">120 minutes</strong> to complete the test.<br unselectable="on">3. The test contains a total of <strong unselectable="on">200 questions</strong>.<br unselectable="on">4. There is only one correct answer to each question. Click on the most appropriate option to mark it as your answer.<br unselectable="on">5. You will be awarded <strong unselectable="on">1 marks</strong> for each correct answer.<br unselectable="on">6. There is <strong unselectable="on">0.25 negative</strong> marks for each wrong answer.<br unselectable="on">7. According to your selection of questions it will change the colour in the boxes at the right side window, these colours will help you to identify the required group of questions.<br unselectable="on">8. You can unmark your answer by clicking on the <strong unselectable="on">"CLEAR RESPONSE"</strong> Option.<br unselectable="on">9. You can mark a question for reviewing it later by clicking on the “marked &amp; review” button.<br unselectable="on">10. You can use the <strong unselectable="on">"FILTER BUTTON"</strong> to select your choices individually according to your given answers.<br unselectable="on">11. A Number list of all questions appears at the right hand side of the window. You can access the questions in any order within a section or across sections by clicking on the question number given on the number list.<br unselectable="on">12. You can use rough sheets while taking the test. Do not use calculators, log tables, dictionaries, or any other printed/online reference material during the test.<br unselectable="on">13. Do not click the button <strong unselectable="on">“SUBMIT TEST”</strong> before completing the test. A test once submitted cannot be resumed.<br unselectable="on">14.&nbsp; If your system gets hanged or you face any other problem in internet connectivity, - "Don't Worry, Kindly close the window of the Test and you can resume your test from where you had left."<br unselectable="on">15. Once clicked on the <strong unselectable="on">(SUBMIT TEST)</strong> button, You <strong unselectable="on">Cannot REDO</strong> this Speed Test.....</p>
<p unselectable="on">&nbsp;</p></div>
  </div>
  <div class="modal-footer">
    <button class="btnl sandn" data-dismiss="modal" aria-hidden="true">Back</button>
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