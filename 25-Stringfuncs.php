<?php
 //String functions: substr() & strpos() ;

    $str = "Hello my Students! I&apos;m doing my work here in the room";
    echo substr($str, 0,5); //substr(string, begin, end) extracts hello from string
    echo "<br>";
    echo strpos($str,"s"); // string position (string, the character's position);
    echo strpos($str,"my",8) ;//string postion(string, "Substring", after the 8th);
    echo "<br>";


    $str1 = ' This is a string ';
    echo trim($str1).'Google';
    //echo $str.'Google' // adds spaces
    echo "<br>";

    echo strlen($str1); 




?>