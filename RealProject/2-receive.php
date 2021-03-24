<?php
    /*Get sends through data through URL but post doesn't, post is secure.
    echo "The username is : $_GET[login_email] <br>";
    echo "The password is : $_GET[login_password] <br>";
    */

if(isset($_POST['validate'])){
    echo "The username is : $_POST[login_email] <br>";
    echo "The pasword is : $_POST[login_password] <br>";

}else{
    echo"Sorry, There&apos;s no request received";
}





?>