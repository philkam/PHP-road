<?php
$days = array();
$days[0] ='Monday';
$days[1] = 'Tuesday';
$days[2] = 'Wednesday';
$days[3] = 'Thurday';
$days[4] =  'Friday';
$days[5] = 'Saturday';
$days[6] = 'Sunday';

echo $days[4].'<br>';

$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July');
echo $months[2].'<br><br><br>';

//for loop for printing array
for($c = 0; $c <=6; $c++){
   echo  $days[$c].'<br>';
}

//print_r to print rawcode
print_r($days);

?>