var jsonarr=$('.jsonquestions').text();
var jsonobj=eval(jsonarr);
console.log(jsonobj)
var tq=jsonobj.length;
var interval;
$('#username').text((jsonobj[0].Exam.name).replace('-1',''));
for(var c=0;c<tq;c++)
{
console.log(jsonobj[c].Question.passage);
$('.status_ind tr').append('<td class=nv id='+c+' data-ppid=\"'+jsonobj[c].Question.pqid+'\" data-passage=\"'+jsonobj[c].Question.passage+'\" data-qansa=\"'+jsonobj[c].Question.answer+'\" data-mark=\"'+jsonobj[c].Question.marks+'\" data-nmark=\"'+jsonobj[c].Question.negative+'\" data-dbqid=\"'+jsonobj[c].Question_exam.id+'\" data-cat=\"'+jsonobj[c].Question.categories_id+'\" data-ans=0 data-rev=0 data-time=0 data-qid=\"'+jsonobj[c].Question.id+'\" data-q=\"'+jsonobj[c].Question.question+'\" data-c1=\"'+jsonobj[c].Question.c1+'\" data-c2=\"'+jsonobj[c].Question.c2+'\" data-c3=\"'+jsonobj[c].Question.c3+'\" data-c4=\"'+jsonobj[c].Question.c4+'\" data-c5=\"'+jsonobj[c].Question.c5+'\">'+(c+1)+'</td>')
}
load(1);
$('.btnNext').on('click',function(){
if($('.cbrev').prop('checked'))
{
$('.cbrev').click();
}
load($(this).data('nque'))

})


$('.btnPrev').on('click',function(){
var qn=Number($('#ival').text());
$('input[name=ac]').prop('checked',false);
$('.status_ind td').eq(qn-1).removeClass('r').removeClass('a').removeClass('ar').data('ans',0);
})




$('.status_ind tr').on('click','td',function(){
load($(this).index()+1,$(this).text())
})


$('.cbrev').on('click',function(){
var qn=Number($('#ival').text());
if($(this).prop('checked'))
{
if($('input[name=ac]:checked').val()>0)
{
$('.status_ind td').eq(qn-1).removeClass('r').removeClass('a').addClass('ar').data('rev',1);
}
else
{
$('.status_ind td').eq(qn-1).removeClass('a').removeClass('ar').addClass('r').data('rev',1);
}
}
else
{

if($('input[name=ac]:checked').val()>0)
{
$('.status_ind td').eq(qn-1).removeClass('r').removeClass('ar').addClass('a').data('rev',0);

}
else
{

$('.status_ind td').eq(qn-1).removeClass('a').removeClass('ar').removeClass('r').data('rev',0);
}
}
});



$('input[name=ac]').on('click',function(){
var qn=Number($('#ival').text());
if($(this).prop('checked'))
{
if($('.cbrev').prop('checked'))
{
$('.status_ind td').eq(qn-1).removeClass('r').removeClass('a').addClass('ar').data('ans',$(this).val());
}
else
{
$('.status_ind td').eq(qn-1).removeClass('r').removeClass('ar').addClass('a').data('ans',$(this).val());
}
}
})

function load(i,j)
{


$('#qnum').text(typeof j==="undefined"?i:j);
i=Number(i);
$('#ival').text(i);
var td=$('.status_ind td').eq(i-1);
//console.log(String($(td).data('passage')).length);
if($(td).data('passage')!="null" && String($(td).data('passage')).length>0  )
{
if($(td).data('passage')==1)
{
$('#qpassage').html($('.status_ind').find('td[data-qid='+$(td).data('ppid')+']').data('passage'));
}else
{
$('#qpassage').html($(td).data('passage'));
}
$('#passagetd').show();
}
else
{
$('#passagetd').hide();
$('#qpassage').html('');
}

if(Number($(td).data('ans'))>0 &&Number($(td).data('ans'))<6)
{
$('input[name=ac]').eq(Number($(td).data('ans'))-1).prop('checked',true);
}
else
{
$('input[name=ac]').prop('checked',false);	
}

$('#q').html($(td).data('q'));
$('#c1').html($(td).data('c1'));
$('#c2').html($(td).data('c2'));
$('#c3').html($(td).data('c3'));
$('#c4').html($(td).data('c4'));
$('#c5').html($(td).data('c5'));
$('.pmarklbl').html('Right Mark: '+$(td).data('mark')+'&nbsp;&nbsp;&nbsp;&nbsp;');
$('.nmarklbl').html('Negative Mark: <span style=\"color:red;\">'+$(td).data('nmark')+"</span>");
if($('#c1').html()=='')
{
$('#c1').parent().parent().hide();
}
else
{
$('#c1').parent().parent().show();
}
if($('#c2').html()=='')
{
$('#c2').parent().parent().hide();
}
else
{
$('#c2').parent().parent().show();
}
if($('#c3').html()=='')
{
$('#c3').parent().parent().hide();
}
else
{
$('#c3').parent().parent().show();
}
if($('#c4').html()=='')
{
$('#c4').parent().parent().hide();
}
else
{
$('#c4').parent().parent().show();
}
if($('#c5').html()=='')
{
$('#c5').parent().parent().hide();
}
else
{
$('#c5').parent().parent().show();
}
$('.cbrev').prop('checked',Number($(td).data('rev'))==0?false:true);

//$('.btnPrev').data('pque',i-1);

$('.btnNext').data('nque',i+1);

//$('.btnPrev').prop('disabled',i==1?true:false);
$('.btnNext').prop('disabled',i==(Number($('td[data-cat]:visible').last().attr('id'))+1)?true:false);

$(td).addClass('v');
$('#qnum').text($(td).text());
window.clearInterval(interval);
interval=setInterval(function(){$(td).data('time',Number($(td).data('time'))+1);},1000);
}

function save(j)
{
}
var tim=120;
var tis=60;
tim-=1;
var extime=setInterval('start_timer()',1000)

function start_timer()
{

var seconds=(tis--);
if(tis==-1)
{
tim--;
tis=59
}

$('#time').text((tim<10?'0'+tim:tim)+':'+(tis<10?'0'+tis:tis))
if(tim==0 && tis==0)
{
window.clearInterval(extime)
$('.examarea').hide('fade');
$('.submit').click();
}
}
var changed_flag=1;
$(function(){
var d = new Date();
var day = String(d.getDate());
var month=String(d.getMonth()+1);
var year=d.getFullYear();
var hour=String(d.getHours());
var minutes=String(d.getMinutes());
var seconds=String(d.getSeconds());
var dt=year+'-'+(month.length==1?'0'+month:month)+'-'+(day.length==1?'0'+day:day)+' '+(hour.length==1?'0'+hour:hour)+':'+(minutes.length==1?('0'+minutes):minutes)+':'+(seconds.length==1?'0'+seconds:seconds);
$('.submit').data('sdate',dt);
});

$('.submit').on('click',function(){
var r=confirm("Are you sure you want to submit the test?");
if(r==true)
{
var adata='',atime='',aqid='',dbqid='',qansa='';
$('.status_ind tr td').each(function(){

adata=adata+','+$(this).data('ans');
atime=atime+','+$(this).data('time');
aqid=aqid+','+$(this).data('qid');
dbqid=dbqid+','+$(this).data('dbqid');
qansa=qansa+','+$(this).data('qansa');
})
adata=adata.substr(1,adata.length)
atime=atime.substr(1,atime.length)
aqid=aqid.substr(1,aqid.length)
dbqid=dbqid.substr(1,dbqid.length)
qansa=qansa.substr(1,qansa.length)
var d = new Date();
var day = String(d.getDate());
var month=String(d.getMonth()+1);
var year=d.getFullYear();
var hour=String(d.getHours());
var minutes=String(d.getMinutes());
var seconds=String(d.getSeconds());
var dt=year+'-'+(month.length==1?'0'+month:month)+'-'+(day.length==1?'0'+day:day)+' '+(hour.length==1?'0'+hour:hour)+':'+(minutes.length==1?('0'+minutes):minutes)+':'+(seconds.length==1?'0'+seconds:seconds);


$.post( "/IbpsDev/exams/submit", { ans: adata, time: atime,qids: aqid,eid:$('#ExamID').text(),pdbqid:dbqid,pqansa:qansa,sdate:$('.submit').data('sdate'),etime:dt})
  .done(function( data ) {
 //   alert( "Exam Submitted: " + data );
 alert( "Exam submitted successfully.Visit Dashboard page to view your result." );
	changed_flag=0;
	window.close();
  });

	

 } 
  
});

var sh=$(window.top).height();
$(window).resize(function(){if($(window.top).height()>525){var shi=$(window.top).height();$('.q_min_height').height(shi-200);$('.q_palette').height(shi-340)}});
if(sh>525)
{
$('.q_min_height').height(sh-200);
$('.q_palette').height(sh-340);
$('#qpassage').height(sh-305);
}

$('.apt').on('click',function(){showCat(1)})
$('.ga').on('click',function(){showCat(2)})
$('.res').on('click',function(){showCat(3)})
$('.eng').on('click',function(){showCat(4)})
$('.ca').on('click',function(){showCat(5)})

showCat(1);
function showCat(catid)
{
$('td[data-cat]').hide()
$('td[data-cat='+catid+']').show();
var Qindex=1;
$('td[data-cat='+catid+']').each(function(){$(this).html(Qindex++);})
load(Number($($('td[data-cat='+catid+']')[0]).attr("id"))+1,1);
}
$('.prfm').on('click',function(){
$('#profileModal').css('height',$('.q_area').height()).css('width',$('.q_area').width());
});
$('.insm').on('click',function(){
$('#insModal').css('height',$('.q_area').height()).css('width',$('.q_area').width());
});
$('.allq').on('click',function(){
$('#myModal').css('height',$('.q_area').height()).css('width',$('.q_area').width());
$('.allquestions tr').remove();
$('td[data-cat]:visible').each(function(index){
switch($(this).data('cat'))
{
case 1:$('#myModalLabel').text('Aptitude');break;
case 2:$('#myModalLabel').text('General Awareness');break;
case 3:$('#myModalLabel').text('Reasoning');break;
case 4:$('#myModalLabel').text('English');break;
case 5:$('#myModalLabel').text('Computer Awareness');break;
}

$('.allquestions').append('<tr><td>'+(index+1)+') '+$(this).data('q')+'</td></tr>');
});
})

window.onbeforeunload = function() {
  if ( changed_flag ) {
    return 'You have unsubmitted changes.'
  }
};

$('.revbtn').click(function(){
if(!$('.cbrev').prop('checked'))
{
$('.cbrev').click();
}
load($('.btnNext').data('nque'));
})
$('.btn-groupp button').click(function(){
$('.btn-groupp button').removeClass('rbactive');
$(this).addClass('rbactive');

});

$('.subexsum').on('click',function(){

$('#exsumModal').css('height',$(window.top).height()).css('width',$(window.top).width());

aptupdt('apt',1);
aptupdt('qa',2); 
aptupdt('res',3);
aptupdt('eng',4);
aptupdt('ca',5);

	$('.examsummarytbl tr:nth-child(2) td:nth-child(2)').text(Number($('#apt-nv .badge').text())+Number($('#apt-a .badge').text())+Number($('#apt-r .badge').text())+Number($('#apt-na .badge').text()));
	$('.examsummarytbl tr:nth-child(2) td:nth-child(6)').text($('#apt-nv .badge').text());
	$('.examsummarytbl tr:nth-child(2) td:nth-child(3)').text($('#apt-a .badge').text());
	$('.examsummarytbl tr:nth-child(2) td:nth-child(5)').text($('#apt-r .badge').text());
	$('.examsummarytbl tr:nth-child(2) td:nth-child(4)').text($('#apt-na .badge').text());
    $('.examsummarytbl tr:nth-child(3) td:nth-child(2)').text(Number($('#qa-nv .badge').text())+Number($('#qa-a .badge').text())+Number($('#qa-r .badge').text())+Number($('#qa-na .badge').text()));
	$('.examsummarytbl tr:nth-child(3) td:nth-child(6)').text($('#qa-nv .badge').text());
	$('.examsummarytbl tr:nth-child(3) td:nth-child(3)').text($('#qa-a .badge').text());
	$('.examsummarytbl tr:nth-child(3) td:nth-child(5)').text($('#qa-r .badge').text());
	$('.examsummarytbl tr:nth-child(3) td:nth-child(4)').text($('#qa-na .badge').text());
	$('.examsummarytbl tr:nth-child(4) td:nth-child(2)').text(Number($('#res-nv .badge').text())+Number($('#res-a .badge').text())+Number($('#res-r .badge').text())+Number($('#res-na .badge').text()));
	$('.examsummarytbl tr:nth-child(4) td:nth-child(6)').text($('#res-nv .badge').text());
	$('.examsummarytbl tr:nth-child(4) td:nth-child(3)').text($('#res-a .badge').text());
	$('.examsummarytbl tr:nth-child(4) td:nth-child(5)').text($('#res-r .badge').text());
	$('.examsummarytbl tr:nth-child(4) td:nth-child(4)').text($('#res-na .badge').text());
    $('.examsummarytbl tr:nth-child(5) td:nth-child(2)').text(Number($('#eng-nv .badge').text())+Number($('#eng-a .badge').text())+Number($('#eng-r .badge').text())+Number($('#eng-na .badge').text()));
	$('.examsummarytbl tr:nth-child(5) td:nth-child(6)').text($('#eng-nv .badge').text());
	$('.examsummarytbl tr:nth-child(5) td:nth-child(3)').text($('#eng-a .badge').text());
	$('.examsummarytbl tr:nth-child(5) td:nth-child(5)').text($('#eng-r .badge').text());
	$('.examsummarytbl tr:nth-child(5) td:nth-child(4)').text($('#eng-na .badge').text());
    $('.examsummarytbl tr:nth-child(6) td:nth-child(2)').text(Number($('#ca-nv .badge').text())+Number($('#ca-a .badge').text())+Number($('#ca-r .badge').text())+Number($('#ca-na .badge').text()));
	$('.examsummarytbl tr:nth-child(6) td:nth-child(6)').text($('#ca-nv .badge').text());
	$('.examsummarytbl tr:nth-child(6) td:nth-child(3)').text($('#ca-a .badge').text());
	$('.examsummarytbl tr:nth-child(6) td:nth-child(5)').text($('#ca-r .badge').text());
	$('.examsummarytbl tr:nth-child(6) td:nth-child(4)').text($('#ca-na .badge').text());



})