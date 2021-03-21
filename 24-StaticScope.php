<?php

function func(){
   static $val2 = 0;
    $val2++;
    echo "The value is : $val2 <br>";
}

func();
func();
func();
func();
?>