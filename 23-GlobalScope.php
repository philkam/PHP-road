<?php
 
 $val1 ='Cat'; 


function func(){

    global $val1;


    echo "This is a $val1";
}


//function call
func();
 

?>