<?php
$var1 = 5;
$var2 = 5;

$var3 = 6;
$var4 = 7;

$var5 = false;

if($var1 == $var2 && $var3 != $var4){
    echo 'The && operator both conditions must be true<br>';
}

if($var1 =! $var2 || $var3 != $var4){
    echo 'The || operator one  condition must be true for both to be true<br>';
}

if(!$var5){
    echo 'The not operator takes only one condition';
}
?>