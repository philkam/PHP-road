<?php
$cookbook = 'yes';
$chicken_recipe = 'yes';
$fried_chicken = 'yes';


if($cookbook == 'yes'){
    if($chicken_recipe == 'yes'){
        if($fried_chicken == 'yes'){
            echo 'We have fried chicken in the chicken recipe<br>';
        }else{
            echo 'Sorry we  have cookbook and chicken recipe but no fried chicken recipe.<br>';
        }
    }else{
        echo 'We don\'t have the chicken recipe in the cookbook<br>';
    }
}else{
    echo 'We have no cookbook<br>';
}




?>