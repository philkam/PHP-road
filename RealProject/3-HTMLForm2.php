<html>
    <head>
        <title>PHP form </title>
    </head>
    <body>
        <form method="POST" action="<?php $_SERVER['PHP_SELF']?>">
            <table>
                <tr>
                    <td>Name: <td>
                    <td><input type="text" name="name"></td>                 
                </tr>
                <tr>
                    <td>E-mail Address<td>
                    <td><input type="email" name="email"></td>                 
                </tr>
                <tr>
                    <td>Subject<td>
                    <td><input type="text" name="subject"></td>                 
                </tr>
                <tr>
                    <td>Comments<td>
                    <td><textarea  name="comment"></textarea></td>                 
                </tr>
                <tr>
                    <td><input type="hidden" value="yes" name="validate"><td>
                    <td><input type="submit" name="login_submit"></td>                 
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
if(isset($_POST['validate'])){
echo "The name is $_POST[name] <br>";
echo "The name is $_POST[email] <br>";
echo "The name is $_POST[subject] <br>";
echo "The name is $_POST[comment] <br>";



}else{
    echo 'There&apos;s no request received';
}
?>