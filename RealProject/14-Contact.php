<?php include 'includes/db.php';
    if(isset($_POST['submit_contact'])){
         $date = date('Y-m-d h:i:s');
        $ins_sql = "INSERT INTO comments(name,email,subject,comment,date) VALUES('$_POST[name]', 
        '$_POST[email]','$_POST[subject]','$_POST[comment]','$date')";
        mysqli_query($conn, $ins_sql);

    
    }

?>

<html>
    <head>
        <title>New Form</title>
      <link rel="stylesheet" type = "text/css" href ="css/bootstrap.css">
      <script type="text/javascript" src="js/jquery.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>

    </head>
    <body>
    <?php include 'includes/header.php'?>

<div class="container">
    <article class="row">
        <section class ="col-lg-8">
        <div class= "jumbotron">
    <h1>Contact us page</h1>
    </div>
        <form class="form-horizontal" action="14-Contact.php" method="POST" role="form">
            <div class="form-group">
                <label for="name" class="control-label col-sm-2">Name*</label>
                <div class="col-sm-8">
                    <input type="text" id="name" class="form-control" name="name" placeholder="Full Name" required>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="control-label col-sm-2">Email*</label>
                <div class="col-sm-8">
                    <input type="email" id="email" class="form-control" name="email" placeholder="Email Address" required>
                </div>
            </div>
            <div class="form-group">
                <label for="subject" class="control-label col-sm-2">Subject*</label>
                <div class="col-sm-8">
                    <input type="text" id="subject" class="form-control" name="subject"  placeholder="Subject" required>
                </div>
            </div>
            <div class="form-group">
                <label for="comments" class="control-label col-sm-2">Comment</label>
                <div class="col-sm-8">
                    <textarea class="form-control my-fixed" name="comment" rows="10" style="resize:none;"> </textarea>
                </div>
            </div>
            <div class="form group">
                <label  class="col-sm-2 control-label"></label>
                <div class="col-sm-8">
                <input type="submit"  class="btn btn-danger btn-block" name= "submit_contact" value="Submit your form"></td>  
                </div>
            </div>


        </form>


        </section>
        <?php include 'includes/aside.php'  ?>


    </article>
</div>
    </body>
    <div style="width: 50px; height: 80px;"></div>
    <?php  include 'includes/footer.php' ?>

</html>



























