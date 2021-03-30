<?php include 'includes/db.php';
    if(isset($_POST['submit_user'])){
         $date = date('Y-m-d h:i:s');
         $ins_sql = "INSERT INTO users(user_firstname, user_lastname, user_email, user_password, user_gender,
         user_marital, user_contact, user_designation, user_website, user_address, user_date) VALUES ('$_POST[name])', '$_POST[email])', '$_POST[password])',
         '$_POST[gender])','$_POST[maritalstatus])','$_POST[phone_no])','$_POST[designation])','$_POST[website])', '$_POST[address])', 
         '$_POST[about_me])', '$date'";
         $run_sql = mysqli_query($conn,$ins_sql);

    
    }

?>

<html>
    <head>
        <title>Registration Page</title>
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
    <h1>Register</h1>
    </div>
        <form class="form-horizontal" action="16-Registration.php" method="POST" role="form">
            <div class="form-group">
                <label for="name" class="control-label col-sm-2"> First Name*</label>
                <div class="col-sm-8">
                    <input type="text" id="firstname" class="form-control" name="firstname" placeholder="Full Name" required>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="control-label col-sm-2">Last Name*</label>
                <div class="col-sm-8">
                    <input type="text" id="lastname" class="form-control" name="lastname" placeholder="Full Name" required>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="control-label col-sm-2">Email*</label>
                <div class="col-sm-8">
                    <input type="email" id="email" class="form-control" name="email" placeholder="Email Address" required>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="control-label col-sm-2">Password</label>
                <div class="col-sm-8">
                    <input type="password" id="password" class="form-control" name="password"  placeholder="Insert password" required>
                </div>
            </div>
            <div class="form-group">
                <label for="con_password" class="control-label col-sm-2">Confirm Password</label>
                <div class="col-sm-8">
                    <input type="password" id="con_password" class="form-control" name="con_password"  placeholder="Confirm password" required>
                </div>
            </div>
            <div class="form-group">
                <label for="Gender" class="control-label col-sm-2">Gender</label>
                <div class="col-sm-3" >
                <select class="form-control" name="gender" id="gender">
                    <option value="">Select your gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                </div>
            <label for="Gender" class="control-label col-sm-2">Marital status</label>
                <div class="col-sm-3" >
                <select class="form-control" name="maritalstatus" id="maritalstatus"> 
                    <option value="">Select Status</option>1
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="divorced">Divorced</option>
                    <option value="others">Others</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label for="contact" class="control-label col-sm-2">Phone number</label>
                <div class="col-sm-8">
                    <input type="number" id="contact" class="form-control" name="phone_no" id="phone_no"  placeholder="Enter your phone number" required>
                </div>
            </div>
            <div class="form-group">
                <label for="designation" class="control-label col-sm-2">Designation</label>
                <div class="col-sm-8">
                    <input type="text" id="designation" class="form-control" name="designation"  placeholder="Enter your designation" required>
                </div>
            </div>
            <div class="form-group">
                <label for="website" class="control-label col-sm-2">Official website</label>
                <div class="col-sm-8">
                    <input type="text" id="website" name="website" class="form-control" name="website"  placeholder="Enter your official website" required>
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="control-label col-sm-2">Address</label>
                <div class="col-sm-8">
                <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="aboutme" class="control-label col-sm-2">About me:</label>
                <div class="col-sm-8">
                <textarea class="form-control-2" name="about_me" id="about_me" rows="6"></textarea>
                </div>
            </div>
            <div class="form group">
                <label  class="col-sm-2 control-label"></label>
                <div class="col-sm-8">
                <input type="submit"  class="btn btn-danger btn-block" name= "submit_user" value="Register Yourself"></td>  
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



























