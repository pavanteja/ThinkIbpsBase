<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'ThinkIBPS');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('style');
		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-responsive.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		
		
	?>
	
</head>
<body>

		
		

			<?php echo $this->Session->flash('flash', array('element' => 'success')); ?>

			<?php echo $this->fetch('content'); ?>
		
	
	<?php echo $this->Html->script('jquery');  ?>
	<?php echo $this->Html->script('bootstrap');  ?>


<?php  echo $this->Html->script('jquery-ui.min'); ?>
<script>
$('.vdetails').on('click',function(){

//$(this).parent().parent().parent().find('.vdtr').hide('fade');
$(this).parent().parent().next().toggle('fade');
  var tr=$(ele).parent().parent().next();
  
if($(this).text()=='View Details' )
{

	
$(this).text('Hide Details')
var ele=$(this);
  var tr=$(ele).parent().parent().next();
  var chart1 = $(tr).find('.scchartContainer').dxChart('instance');
        var renderOptions = {
            force: true
        };
        chart1.render(renderOptions);
		
  var chart2 = $(tr).find('.stchartContainer').dxPieChart('instance');
        var renderOptions = {
            force: true
        };
        chart2.render(renderOptions);
		
if($(this).data('fetched')==0)
{
$(this).data('fetched',1);
$.get( "/IbpsDev/Details/index/"+$(this).data('eid'), function( data ) {

  var tbldetail=eval($($(data)[0]).text());
  var examtdiff=eval($($(data)[6]).text());
 
  var tr2=$(tr).find('.exdetail tr:nth-child(2)');
  //tbldetail[0].Exam.id;
  $(tr2).find('td:nth-child(1)').text(tbldetail[0].Exam.allquestions);
  $(tr2).find('td:nth-child(2)').text(tbldetail[0].Exam.correct);
  $(tr2).find('td:nth-child(3)').text(tbldetail[0].Exam.incorrect);
  $(tr2).find('td:nth-child(4)').text(tbldetail[0].Exam.unans);
  $(tr2).find('td:nth-child(5)').text(examtdiff[0][0].tdiff);
  $(tr2).find('td:nth-child(6)').text(tbldetail[0].Exam.negmarks);
  $(tr2).find('td:nth-child(7)').text(tbldetail[0].Exam.marks);
  $(tr).find('.yourscore').text((tbldetail[0].Exam.marks)).css('width',((tbldetail[0].Exam.marks/tbldetail[0].Exam.allquestions)*100)+'%');
  $(tr).find('.pstar').css('width',(Number(tbldetail[0].Exam.performance)*10)+'%');
  $(tr).find('.stime').text(tbldetail[0].Exam.stime);
  $(tr).find('.etime').text(tbldetail[0].Exam.etime);
  
var chartdetail=eval($($(data)[2]).text());  

		chart1.option({
   dataSource : [
    { category: "Aptitude", s1: Number(chartdetail[0][0]['SUM( a.marks )']) },
    { category: "General Awareness", s2: Number(chartdetail[1][0]['SUM( a.marks )']) },
    { category: "Reasoning", s3:    Number(chartdetail[2][0]['SUM( a.marks )']) },
    { category: "English", s4:  Number(chartdetail[3][0]['SUM( a.marks )']) },
    { category: "Computer Awareness", s5: Number(chartdetail[4][0]['SUM( a.marks )']) },
   
]
		});



		chart2.option({
   dataSource : [
    { category: "Aptitude", ttime: Number(chartdetail[0][0]['SUM( a.anstime )']) },
    { category: "General Awareness", ttime: Number(chartdetail[1][0]['SUM( a.anstime )']) },
    { category: "Reasoning", ttime:    Number(chartdetail[2][0]['SUM( a.anstime )']) },
    { category: "English", ttime:  Number(chartdetail[3][0]['SUM( a.anstime )']) },
    { category: "Computer Awareness", ttime: Number(chartdetail[4][0]['SUM( a.anstime )']) },
	{ category: "Unused", ttime: 7200-(Number(chartdetail[0][0]['SUM( a.anstime )'])+Number(chartdetail[1][0]['SUM( a.anstime )'])+Number(chartdetail[2][0]['SUM( a.anstime )'])+ Number(chartdetail[3][0]['SUM( a.anstime )'])+ Number(chartdetail[4][0]['SUM( a.anstime )']) )},
   
]
		});
		
		var questiontime=eval($($(data)[4]).text());
		var catid1='',catid2='',catid3='',catid4='',catid5='';
		var a=1,b=1,c=1,d=1,e=1;
		for(var i=0;i<questiontime.length;i++)
		{
		var catid=Number(questiontime[i]['b'].categories_id);
		if(catid==1)
		{
		catid1=catid1+'<tr><td>'+(a++)+'</td><td>'+questiontime[i]['b'].question+'</td><td>'+questiontime[i]['a'].anstime+'s</td><td>'+questiontime[i]['0'].Answer+'</td><tr>';
		}
		if(catid==2)
		{
		catid2=catid2+'<tr><td>'+(b++)+'</td><td>'+questiontime[i]['b'].question+'</td><td>'+questiontime[i]['a'].anstime+'s</td><td>'+questiontime[i]['0'].Answer+'</td><tr>';
		}
		if(catid==3)
		{
		catid3=catid3+'<tr><td>'+(c++)+'</td><td>'+questiontime[i]['b'].question+'</td><td>'+questiontime[i]['a'].anstime+'s</td><td>'+questiontime[i]['0'].Answer+'</td><tr>';
		}
		if(catid==4)
		{
		catid4=catid4+'<tr><td>'+(d++)+'</td><td>'+questiontime[i]['b'].question+'</td><td>'+questiontime[i]['a'].anstime+'s</td><td>'+questiontime[i]['0'].Answer+'</td><tr>';
		}
		if(catid==5)
		{
		catid5=catid5+'<tr><td>'+(e++)+'</td><td>'+questiontime[i]['b'].question+'</td><td>'+questiontime[i]['a'].anstime+'s</td><td>'+questiontime[i]['0'].Answer+'</td><tr>';
		}
		}
		
		$(tr).find('.tAptitude table').append(catid1);
		$(tr).find('.tGeneralAwareness table').append(catid2);
		$(tr).find('.tReasoning table').append(catid3);
		$(tr).find('.tEnglish table').append(catid4);
		$(tr).find('.tComputerKnowledge table').append(catid5);

		
});
}
 $('html, body').animate({
        scrollTop: $(this).offset().top
    }, 1000);
}
else
{
$(this).text('View Details')
}

})
</script>
	<?php  echo $this->Html->script('script'); ?>
	<?php  echo $this->Html->script('knockout-2.2.1');  ?>
	<?php  echo $this->Html->script('globalize.min');  ?>
	<?php  echo $this->Html->script('dx.chartjs');  ?>
<script>

	$('.apt').popover({html:true,content:function(){aptupdt('apt',1);return  $('#apt-content').html();}});
	$('.ga').popover({html:true,content:function(){aptupdt('qa',2);return  $('#qa-content').html();}});
	$('.res').popover({html:true,content:function(){aptupdt('res',3);return  $('#res-content').html();}});
	$('.eng').popover({html:true,content:function(){aptupdt('eng',4);return  $('#eng-content').html();}});
	$('.ca').popover({html:true,content:function(){aptupdt('ca',5);return  $('#ca-content').html();}});
	function aptupdt(cat,ind)
	{
	var nv=0,na=0,a=0,r=0;
	$('.status_ind td[data-cat='+ind+']').each(function(){
	var lastClass = $(this).attr('class').split(' ').pop();
	if(lastClass=='nv')
	{
	nv++;
	}
	if(lastClass=='v')
	{
	na++;
	}
	if(lastClass=='a')
	{
	a++;
	}
	if(lastClass=='ar' || lastClass=='r')
	{
	r++;
	}
	
	})
	$('#'+cat+'-nv .badge').text(nv);
	$('#'+cat+'-a .badge').text(a);
	$('#'+cat+'-r .badge').text(r);
	$('#'+cat+'-na .badge').text(na);
	
	}
</script>
	
<script>
$(function(){
$('#lchart').dxChart({
 dataSource: [
        {ex: "T1", marks:  $('#exam1').text()==''?null:Number($('#exam1').text())},
        {ex: "T2", marks:  $('#exam2').text()==''?null:Number($('#exam2').text())},
        {ex: "T3", marks:  $('#exam3').text()==''?null:Number($('#exam3').text())},
        {ex: "T4", marks:  $('#exam4').text()==''?null:Number($('#exam4').text())},
        {ex: "T5", marks:  $('#exam5').text()==''?null:Number($('#exam5').text())},
		{ex: "T6", marks:  $('#exam6').text()==''?null:Number($('#exam6').text())},
        {ex: "T7", marks:  $('#exam7').text()==''?null:Number($('#exam7').text())},
        {ex: "T8", marks:  $('#exam8').text()==''?null:Number($('#exam8').text())},
        {ex: "T9", marks:  $('#exam9').text()==''?null:Number($('#exam9').text())},
        {ex: "T10", marks: $('#exam10').text()==''?null:Number($('#exam10').text())},
		{ex: "T11", marks: $('#exam11').text()==''?null:Number($('#exam11').text())},
        {ex: "T12", marks: $('#exam12').text()==''?null:Number($('#exam12').text())},
        {ex: "T13", marks: $('#exam13').text()==''?null:Number($('#exam13').text())},
        {ex: "T14", marks: $('#exam14').text()==''?null:Number($('#exam14').text())},
        {ex: "T15", marks: $('#exam15').text()==''?null:Number($('#exam15').text())},
		{ex: "T16", marks: $('#exam16').text()==''?null:Number($('#exam16').text())},
        {ex: "T17", marks: $('#exam17').text()==''?null:Number($('#exam17').text())},
        {ex: "T18", marks: $('#exam18').text()==''?null:Number($('#exam18').text())},
        {ex: "T19", marks: $('#exam19').text()==''?null:Number($('#exam19').text())},
        {ex: "T20", marks: $('#exam20').text()==''?null:Number($('#exam20').text())}],
		title: {
        text: "Marks obtained in each test"
    },
		commonSeriesSettings: {
        argumentField: "ex"
    },
	series: [
        { valueField: "marks", name: "Marks" },
        
    ],
	legend: {
        horizontalAlignment: "center",
        verticalAlignment: "bottom",
        
    },
tooltip: {
		enabled: true,
		customizeText: function() { 
			return this.valueText + " Marks ";
		}
	}
});

})
$(function () {
    $("#chartContainer").dxChart({
	 dataSource: [
        {subj: "Aptitude", s1: Number($('#cat1').text())},
        {subj: "GK", s2: Number($('#cat2').text())},
        {subj: "Reasoning", s3: Number($('#cat3').text())},
        {subj: "English", s4: Number($('#cat4').text())},
        {subj: "CA", s5: Number($('#cat5').text())}],
		
       commonSeriesSettings: {
        argumentField: "subj",
        type: "bar",
       
       label: {
            visible: true,
             customizeText: function(arg) {
                return arg.valueText + " % " ;
            }
        }
		
    },
	 series: [
        { valueField: "s1", name: "Aptitude" },
        { valueField: "s2", name: "GK" },
        { valueField: "s3", name: "Reasoning" },
        { valueField: "s4", name: "English" },
        { valueField: "s5", name: "CA" }
		
    ],
	legend: {
        verticalAlignment: "bottom",
        horizontalAlignment: "center"
    },
	equalBarWidth: false,
	valueAxis: {
            visible: true,
            label: {
                customizeText: function () {
                    return this.value + '%';
                }
            },
         
            max: 100,
			maxValueMargin:0
        }
   
	});
});
</script>
<script>
$(function(){$('.scchartContainer').dxChart({
	
       commonSeriesSettings: {
        argumentField: "category",
        type: "bar",
       
       label: {
            visible: true,
             customizeText: function(arg) {
                return arg.valueText  ;
            }
        }
		
    },
	 series: [
        { valueField: "s1", name: "Aptitude" },
        { valueField: "s2", name: "GK" },
        { valueField: "s3", name: "Reasoning" },
        { valueField: "s4", name: "English" },
        { valueField: "s5", name: "CA" }
		
    ],
	legend: {
        verticalAlignment: "bottom",
        horizontalAlignment: "center"
    },
	equalBarWidth: false,
	valueAxis: {
            visible: true,  
            max: 50,
			maxValueMargin:0
        },
		argumentAxis: {
                label: { visible: false }
            }
   

})});
$(function(){$('.stchartContainer').dxPieChart({
series: [
        {
            argumentField: "category",
            valueField: "ttime",
            label:{
                visible: true,
                connector:{
                    visible:true,           
                    width: 1
                },
				customizeText: function(arg) {
                return Math.floor(arg.valueText/ 60)+':'+(arg.valueText - Math.floor(arg.valueText/ 60) * 60 ) ;
            }
            }
        }
    ],
	legend: {
        horizontalAlignment: "center",
        verticalAlignment: "bottom",
        
    }
})});
var extime=setTimeout('bclick()',100);
function bclick()
{
$('.vdtl').click();
}
</script>
</body>
</html>
