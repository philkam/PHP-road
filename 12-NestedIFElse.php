<?php
$var1 = 5;
$var2 = 5;

$var3 = 9;
$var4 = 2;

if($var1 == $var2){
    if($var3 == $var4){
        echo 'First if was correct but this is wrong';
    }else{
        echo 'Error in nested IF';
    }

}else{
    echo 'This is wrong';
}

?>