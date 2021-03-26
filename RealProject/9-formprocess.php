<?php
include '7-db.php';
if(isset($_POST['submit_form'])){
   $name =  $_POST['name'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $gender = $_POST['gender'];
   $country = $_POST['country'];
   $comment = $_POST['comment'];
   if(empty($_POST['skill1'])){
       $_POST[$skill1] = '';
   }
   if(empty($_POST['skill2'])){
    $_POST[$skill2] = '';
    }
    if(empty($_POST['skill3'])){
        $_POST[$skill3] = '';
    }
    if(empty($_POST['skill4'])){
        $_POST[$skill4] = '';
    }

   $ins_sql = "INSERT INTO users(name,email, subject, gender, skill1, skill2, skill3, skill4, country, comments) 
                values('$name', '$email', '$subject', '$gender', '$_POST[skill1]', '$_POST[skill2]', 
                '$_POST[skill3]' ,'$_POST[skill4]' ,'$country', '$comment' )";

    $run_sql = mysqli_query($conn,$ins_sql);

}else{

}





?>