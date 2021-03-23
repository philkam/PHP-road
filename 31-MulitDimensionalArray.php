<?php
$employees = array('employee1' => array(
                                            'name'=>'John',
                                             'designation'=>'Web Developer', 
                                              'skill'=>'PHP,Node.js,Ember.js,HTML5',
),                 'employee2'=>array(
                                             'name'=>'Mark',
                                             'designation'=>'Designer', 
                                             'skill'=>'Photoshop,Illustrator,Freehand',
));

echo $employees['employee1']['name'].'<br>';
echo $employees['employee2']['skill'].'<br><br><br>';

//Printing arrays with different looping techniques
foreach($employees as $emp){
    foreach($emp as $key => $data){
        echo $key. '=> '. $data.'<br>';
    }
}

//printing column in an array
echo '<br><br><pre>';
$designation = array_column($employees,'designation','name');
print_r($designation);
echo '</pre>';


//array maths functions
$nums = array(2,5, 7, 9, 3);
echo array_sum($nums);
echo '<br><br><br>';

//multiplications
echo array_product($nums);
?>