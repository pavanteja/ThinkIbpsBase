<?php 
class Question_exam extends AppModel
{

public $belongsTo = array(
        'Question','Exam'
    );

}
?>