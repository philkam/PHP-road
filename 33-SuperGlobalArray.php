<?php
//$GLOBALS[] = used to access variables anywhere.
$val1 = 'News';


function func(){
    echo 'I have great '.$GLOBALS['val1'];
}

func();
?>