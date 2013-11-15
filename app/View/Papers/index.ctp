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
  <button type="button" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="Aptitude" class="btnm ttp apt rbactive">Aptitude</button>
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
<table style="width:100%;">
<tr>
<td id="passagetd" style="width:55%;display:none;vertical-align: top;">
<div id="qpassage" style="overflow-y: scroll;border-top: 1px solid #E4DFDF;">
</div>
</td>
<td style="width:45%;vertical-align: top;">
<table class="q_single_question_table" style="margin-top:0;">
<tr class="qr qr_question"><td id="q"></td><td style="display:none;"></td></tr>
<tr class="qr"><td><input name="ac" value=1 type="radio"></input><span id="c1"><span></td><td style="display:none;"></td></tr>
<tr class="qr"><td><input name="ac" value=2 type="radio"></input><span id="c2"><span></td><td style="display:none;"></td></tr>
<tr class="qr"><td><input name="ac" value=3 type="radio"></input><span id="c3"><span></td><td style="display:none;"></td></tr>
<tr class="qr"><td><input name="ac" value=4 type="radio"></input><span id="c4"><span></td><td style="display:none;"></td></tr>
<tr class="qr"><td><input name="ac" value=5 type="radio"></input><span id="c5"><span></td><td style="display:none;"></td></tr>

</table>
</td>
</tr>
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
<input type="button" value="Submit" href="#exsumModal" data-toggle="modal" class="btnrp subexsum hw"/>
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
<div id="exsumModal" style="width:900px;margin-left:-450px;" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 id="myModalLabel">Exam Summary</h4>
  </div>
  <div class="modal-body">
   <table class="examsummarytbl table"  cellspacing="0"  align="center" style="margin-top:5%;width: 70%;">
   <tbody>
   <tr><th>Section Name</th><th>No. of Questions</th><th>Answered</th><th>Not Answered</th><th>Marked for Review</th><th>Not Visited</th></tr>
   <tr><td>Aptitude</td><td >50</td><td >0</td><td >1</td><td >0</td><td >49</td></tr>
   <tr><td>General Awareness</td><td >50</td><td >0</td><td >1</td><td >0</td><td >49</td></tr>
   <tr><td>Reasoning</td><td >50</td><td >0</td><td >1</td><td >0</td><td >49</td></tr>
   <tr><td>English</td><td >50</td><td >0</td><td >1</td><td >0</td><td >49</td></tr>
   <tr><td>Computer Awareness</td><td >50</td><td >0</td><td >1</td><td >0</td><td >49</td></tr>
   </tbody></table>
  </div>
  <div class="modal-footer">
    <button class="btnl sandn" data-dismiss="modal" aria-hidden="true">Back</button><button class="btnl submit sandn" aria-hidden="true">Submit</button>
  </div>
</div>
<div id="insModal" style="width:900px;margin-left:-450px;" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 id="myModalLabel">INSTRUCTION FOR ST (CWE P.O.)</h4>
  </div>
  <div class="modal-body">
   <div id="sysInstText1" style=""><p align="center"><strong><span><b>Please read the following instructions carefully</b></span></strong></p>
<p><strong><u>General Instructions:</u></strong> <br></p>
<ol>
<li>Total of 30 minutes duration will be given to attempt all the questions</li>
<li>The clock has been set at the server and the countdown timer at the top right corner of your screen will display the time remaining for you to complete the exam. When the clock runs out the exam ends by default - you are not required to end or submit your exam. </li>
<li>The question palette at the right of screen shows one of the following statuses of each of the questions numbered: 
<table>
<tbody>
<tr>
<td class="insico insnv">1</td>
<td>You have not visited the question yet.</td></tr></tbody></table>
<table>
<tbody>
<tr>
<td class="insico insna">3</td>
<td>You have not answered the question.</td></tr></tbody></table>
<table>
<tbody>
<tr>
<td class="insico insa">5</td>
<td>You have answered the question. </td></tr></tbody></table>
<table>
<tbody>
<tr>
<td class="insico insnar">7</td>
<td>You have NOT answered the question but have marked the question for review.</td></tr></tbody></table>
<table>
<tbody>
<tr>
<td class="insico insar"> 9</td>
<td>You have answered the question but marked it for review. </td></tr></tbody></table></li>
<li style="LIST-STYLE-TYPE: none">The Marked for Review status simply acts as a reminder that you have set to look at the question again. <font color="red"><i>If an answer is selected for a question that is Marked for Review, the answer will be considered in the final evaluation.</i></font></li></ol>
<p><br><b><u>Navigating to a question : </u></b></p>
<ol start="4">
<li>To select a question to answer, you can do one of the following: 
<ol type="a">
<li>Click on the question number on the question palette at the right of your screen to go to that numbered question directly. Note that using this option does NOT save your answer to the current question. </li>
<li>Click on Save and Next to save answer to current question and to go to the next question in sequence.</li>
<li>Click on Mark for Review and Next to save answer to current question, mark it for review, and to go to the next question in sequence.</li></ol></li>
<li>You can view the entire paper by clicking on the <b>Question Paper</b> button.</li></ol>
<p><br><b><u>Answering questions : </u></b></p>
<ol start="6">
<li>For multiple choice type question : 
<ol type="a">
<li>To select your answer, click on one of the option buttons</li>
<li>To change your answer, click the another desired option button</li>
<li>To save your answer, you MUST click on <b>Save &amp; Next</b> </li>
<li>To deselect a chosen answer, click on the chosen option again or click on the <b>Clear Response</b> button.</li>
<li>To mark a question for review click on <b>Mark for Review &amp; Next</b>. <font color="red"><i>If an answer is selected for a question that is Marked for Review, the answer will be considered in the final evaluation. </i></font></li></ol></li>
<li>To change an answer to a question, first select the question and then click on the new answer option followed by a click on the <b>Save &amp; Next</b> button.</li>
<li>Questions that are saved or marked for review after answering will ONLY be considered for evaluation.</li></ol>
<p><br><b><u>Navigating through sections : </u></b></p>
<ol start="9">
<li>Sections in this question paper are displayed on the top bar of the screen. Questions in a section can be viewed by clicking on the section name. The section you are currently viewing is highlighted.</li>
<li>After clicking the <b>Save &amp; Next</b> button on the last question for a section, you will automatically be taken to the first question of the next section. </li>
<li>You can move the mouse cursor over the section names to view the status of the questions for that section. </li>
<li>You can shuffle between sections and questions anytime during the examination as per your convenience. </li></ol></div>
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