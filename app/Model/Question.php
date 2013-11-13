<?php 
class Question extends AppModel
{
var $name='Question';
var $belongsTo = array(
        'Categories'=>array(
            'className'=>'categorie'
        )
		);
	public $hasMany = array( 'Question_exam');

}
?>