<?php
$book = 'no';
$copy = 'yes';
$newspapaer = 'no';
$magazine = 'no';

if ($book == 'yes'){
    echo 'We got the book';
}else if($copy == 'yes'){
    echo 'We got the copy';
}else if($newspapaer == 'yes'){
    echo 'We got the newspaper';
}else if($magazine == 'yes'){
    echo 'We got the magazine';
}else{
    echo 'No reading material available';
}



?>