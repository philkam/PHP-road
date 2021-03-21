<?php

$var1 = 5;
$var2 = 5;

$var3 = 6;
$var4 = 7;

if($var1 == $var2){
    echo $var1.' is equal to '.$var2.'<br>';
}

if($var1 != $var3){
    echo $var1.' is not equal to '.$var3.'<br>';
}

if($var1 <> $var3){
    echo $var1.' is not equal to '.$var3.'<br>';
}

if($var2 < $var3){
    echo $var2.' is less than '.$var3.'<br>';
}

if($var4 > $var3){
    echo $var4.' is greater than '.$var3.'<br>';
}

if($var4 >= $var3){
    echo $var4.' is greater than or equal to '.$var3.'<br>';
}

if($var2 <= $var3){
    echo $var2.' is less than or equal to '.$var3.'<br>';
}
?>