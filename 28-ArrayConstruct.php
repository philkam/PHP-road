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
echo '<br><br><br>';
//print_r to print rawcode
print_r($days);
echo '<br><br><br>';

//count items in array
echo count($days);
echo '<br><br><br>';

//check if string is in array
echo in_array('Monday',$days).'<br>'; //Gives true(1) or false(1)

$s_day = 'Tuesday';
if (in_array($s_day,$days)){
    echo "$s_day is in the array<br><br>";
}else{
    echo "It is not there<br><br>";
}

//Check if it is an array
if(is_array($days)){
    echo "it is an array<br><br>";
}else{
    echo "It is not an array<br><br>";
}

//current prints first element in array;
echo "The first element in the array is ".current($days);
echo '<br><br>';

//array_push adds element to end of array
$items = array('watch','phone', 'scissor', 'speaker', 'laptop');
array_push($items, 'glass', 'bottle', 'mouse');
print_r($items);
echo '<br><br>';

//array_unshift adds elements to beginning of array
array_unshift($items, 'book', 'calculator','mask');
print_r($items);
echo '<br><br>';


//array-shift removes the first element from array
array_shift($items); 
print_r($items);
echo '<br><br>';

//array-pop removes the last element from array
array_pop($items);
print_r($items);
echo '<br><br>';


//sorts items from ascending to descending
sort($items);
print_r($items); 
echo '<br><br>';














?>