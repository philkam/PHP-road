<?php

$tasks = array('fst' => 'first','sec' => 'second', 'thr' => 'third', 'fth' => 'fourth');
echo $tasks['thr'].'<br>';


$tasks['x'] = 'ten';
echo $tasks['x'].'<br>';

$days = array();
$days['mon'] = 'Monday';
$days['tue'] = 'Tuesday';
$days[1] = 'Wednesday';

echo $days[1].'<br><br><br>';

//using foreach to print associativeArray
foreach($tasks as $key => $task){
    echo $key.'<br>'; //prints key
    
    echo $task.'<br>'; //print task

    echo $key.' => '.$task.'<br>'; //prints key with task
}
echo '<br><br><br>';

//string function -asort sorts according to data
asort($tasks);
foreach($tasks as $key => $task){
    echo $key. '=> '.$task.'<br>';
}
echo '<br><br><br>';


//ksort- sorts according to keys
ksort($tasks);
foreach($tasks as $key => $task){
    echo $key. '=> '.$task.'<br>';
}

?>