<?php include 'C:/wamp64/www/php/RealProject/7-db.php';
    ///DELETE ROWS////
    if(isset($_GET['del_id'])){
        $del_sql = "DELETE FROM users WHERE id = '$_GET[del_id]'";
        $run_sql = mysqli_query($conn, $del_sql);

    }

?>
<html>
    <head>
        <title>Retrieving Data From Database</title>
        <link rel="stylesheet" type = "text/css" href ="css/bootstrap.css">
      <script type="text/javascript" src="js/jquery.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container-fluid">
        <table class="table table-striped" >
           
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email Address</th>
                    <th>Subject</th>
                    <th>Gender</th>
                    <th>Skill</th>
                    <th>Country</th>
                    <th>Access</th>
                    <th>Delete</th>
                </thead>
                <tbody>
          
        <?php
        $sql = "SELECT * FROM users";
        $run_sql = mysqli_query($conn,$sql);

        while($rows = mysqli_fetch_assoc($run_sql)){
            echo '
                    <tr>
                        <td>' .$rows['id']. '</td>
                        <td>' .$rows['name']. '</td>
                        <td>' .$rows['email']. '</td>
                        <td>' .$rows['subject']. '</td>
                        <td>' .$rows['gender']. '</td>
                        <td>' .$rows['skill1'].' , '.$rows['skill2'].', '.$rows['skill3'].','.$rows['skill4']. '</td>
                        <td>' .$rows['country']. '</td>
                        <td><a class="btn btn-info btn-xs" href="10-detail.php?user_id='.$rows['id'].'">Access</a> </td>
                        <td><a class= "btn btn-danger btn-xs" href="6-ReceivingFromDB.php?del_id='.$rows['id'].'">Delete</a>  </td>
                    </tr>
            
            ';

           

        }
        
        

        ?>
                </tbody>
        </table>
        </div>
    </body>
</html>