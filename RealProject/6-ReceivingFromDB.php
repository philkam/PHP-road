<?php include 'C:/wamp64/www/php/RealProject/7-db.php' ?>
<html>
    <head>
        <title>Retrieving Data From Database</title>
    </head>
    <body>
        <table border="1">
           
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email Address</th>
                    <th>Subject</th>
                    <th>Gender</th>
                    <th>Skill</th>
                    <th>Country</th>
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
                    </tr>
            
            ';

           

        }
        

        ?>
                </tbody>
        </table>
    </body>
</html>