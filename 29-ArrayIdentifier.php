<?php

//PHP automatically indexes array.
$countries = array();
$countries[] = 'Ghana';
$countries[] = 'Kenya';
$countries[] = 'Nigeria';
$countries[] = 'Rwanda';
$countries[] = 'South Africa';

echo $countries[2].'<br>'; 

$continents = array('Africa','Asia','Antarctica','America', 'Australia');
$continents[] = 'Europe';
echo $continents[5].'<br><br><br>';


//Using foreach to print out an array
foreach($countries as $c){
    echo $c.'<br>';
}
?>