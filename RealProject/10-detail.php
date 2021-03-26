<?php include 'C:/wamp64/www/php/RealProject/7-db.php' ?>
<html>
    <head>
        <title>Retrieving Data From Database</title>
        <link rel="stylesheet" type = "text/css" href ="css/bootstrap.css">
      <script type="text/javascript" src="js/jquery.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container">
            <div class="Jumbotron">
                <h1>User Details</h1>
            <p>Let just get the complete details</p>
            </div>
            <?php
            if(isset($_GET['user_id'])){

                
            $sql = "SELECT * FROM users WHERE id = '$_GET[user_id]'";
            $run_sql = mysqli_query($conn, $sql); 

            while($rows = mysqli_fetch_assoc($run_sql)){
                echo '

                <div class="row">
                <strong class="col-sm-3">Name</strong>
                <div class="col-sm-3">'.$rows['name'].'</div>
            </div>
            <div class="row">
                <strong class="col-sm-3">Email</strong>
                <div class="col-sm-3">'.$rows['email'].'</div>
            </div>
            <div class="row">
                <strong class="col-sm-3">Subject</strong>
                <div class="col-sm-3">'.$rows['subject'].'</div>
            </div>
            <div class="row">
                <strong class="col-sm-3">Gender</strong>
                <div class="col-sm-3">'.$rows['gender'].'</div>
            </div>
            <div class="row">
                <strong class="col-sm-3">Skills</strong>
                <div class="col-sm-3">'.$rows['name'].'</div>
            </div>
            <div class="row">
                <strong class="col-sm-3">Country</strong>
                <div class="col-sm-3">'.$rows['country'].'</div>
            </div>
            <div class="row">
                <strong class="col-sm-3">Comment</strong>
                <div class="col-sm-3">'.$rows['comments'].'</div>
            </div>

                
               
                ';



            }

            }



            ?>

           
        </div>
    </body>
</html>