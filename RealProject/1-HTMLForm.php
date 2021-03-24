<html>
<head>
<title>PHP Form</title>
</head>
<body>
    <!--Get sends through data through URL but post  doesn't -->
    <form  method="POST">
        <table>
            <tr>
                <td>E-mail</td>
                <td><input type="email" name="login_email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name ="login_password"></td>
            </tr>
            <tr>
                <td><input type="hidden" name= "validate" value="yes"></td>
                <td><input type="Submit" name= "login_submit"></td>
            </tr>
        </table>


</form>


</body>


</html>


<?php
if(isset($_POST['validate'])){
    echo "The username is : $_POST[login_email] <br>";
    echo "The pasword is : $_POST[login_password] <br>";

}else{
    echo"Sorry, There&apos;s no request received";
}
?>