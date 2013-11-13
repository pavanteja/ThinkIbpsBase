<?php 
class Exam extends AppModel
{
var $name='Exam';
var $belongsTo = array(
        'Users'=>array(
            'className'=>'User'
        )
		);

		
		public $hasMany = array( 'Question_exam');
	
	
}
?>