<?php
$name = '';
$email = '';
$subject = '';
$comment = '';
$result = '';
if(isset($_POST['validate'])){
    if(empty($_POST['name'])){
        $name = '<span style="color: red;">The name field is empty</span>';
    }else{
        $name = '<span style="color: green;">'.$_POST['name'].'</span>';
    }

    if(!empty($_POST['email'])){
        $email = '<span style="color: green;">'.$_POST['email'].'</span>';
    }else{
        $email = '<span style="color: red;">The email field is empty</span>';
    }

    if($_POST['subject'] == ''){
       $subject =  '<span style="color: red;">The subject field is empty<span>';
    }else{
        $subject =  '<span style="color: green;">'.$_POST['subject'].'</span>';

    }
/*
echo 'The name is  '.htmlspecialchars($_POST['name']).'<br>';
echo "The Email address is ".strip_tags($_POST['email']).'<br>';
echo "The subject is $_POST[subject] <br>";
echo "The comment is :  ".trim(htmlspecialchars($_POST['comment']));
*/


    $comment = '<h3>Comments: <h3>'.$_POST['comment'];

}else{
    $result =  'There&apos;s no request received';
}
?>


<html>
    <head>
        <title>PHP form </title>
    </head>
    <body>
        <form method="POST" action="<?php $_SERVER['PHP_SELF']?>">
            <table>
                <tr>
                    <td>Name: * <td>
                    <td><input type="text" name="name" ><?php echo $name; ?></td>                 
                </tr>
                <tr>
                    <td>E-mail Address*<td>
                    <td><input type="email" name="email" ><?php echo $email; ?></td>                 
                </tr>
                <tr>
                    <td>Subject*<td>
                    <td><input type="text" name="subject" ><?php echo $subject; ?></td>                 
                </tr>
                <tr>
                    <td>Gender</td>
                </tr>
                <tr>
                    <td>Male:<br>Female:</td>
                    <td><input type="radio" value="male" name ="gender"><br><input type="radio" name= "gender" value="female"></td>
                </tr>
                <tr>
                    <td>  Skills:</td>
                    <td>
                        <input type="checkbox" name="skills1" value="html">:HTML <br>
                        <input type="checkbox" name="skills2" value="php">:PHP <br>
                        <input type="checkbox" name="skills3" value="css">:CSS <br>
                        <input type="checkbox" name="skills4" value="javascript">:JAVASCIPT <br>

                    </td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td>
                        <select name = "country">
                            <option selected >Select a country</option>
                            <option value="nig">Nigeria</option>
                            <option value="gh">Ghana</option>
                            <option value="egypt">Egypt</option>
                            <option value="mali">Mali</option>
                        </select>
                    </td>
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
        <?php echo $comment; 
              echo $result;
        ?>
    </body>
</html>

