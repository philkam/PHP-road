<?php
$employees = array('employee1' => array(
    'name'=>'John','designation'=>'Web Developer', 'skill'=>'PHP,Node.js,Ember.js,HTML5',
), 'employee2'=>array(
    'name'=>'Mark','designation'=>'Designer', 'skill'=>'Photoshop,Illustrator,Freehand',
));

echo $employees['employee1']['name'].'<br>';
echo $employees['employee2']['skill'];





?>