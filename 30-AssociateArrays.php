<?php

$tasks = array('fst' => 'first','sec' => 'second', 'thr' => 'third', 'fth' => 'fourth');
echo $tasks['thr'].'<br>';


$tasks['x'] = 'Ten';
echo $tasks['x'].'<br>';

$days = array();
$days['mon'] = 'Monday';
$days['tue'] = 'Tuesday';
$days[1] = 'Wednesday';

echo $days[1];

?>