<!DOCTYPE html>
<html>
    <head>
        <title>New Form</title>
      <link rel="stylesheet" type = "text/css" href ="css/bootstrap.css">
      <script type="text/javascript" src="js/jquery.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container">
        <h1>Submit form</h1>
        <form class="form-horizontal" action="9-formprocess.php" method="POST" role="form">
            <div class="form-group">
                <label for="name" class="control-label col-sm-2">Name*</label>
                <div class="col-sm-5">
                    <input type="text" id="name" class="form-control" name="name" placeholder="Full Name" required>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="control-label col-sm-2">Email*</label>
                <div class="col-sm-5">
                    <input type="email" id="email" class="form-control" name="email" placeholder="Email Address" required>
                </div>
            </div>
            <div class="form-group">
                <label for="subject" class="control-label col-sm-2">Subject*</label>
                <div class="col-sm-5">
                    <input type="text" id="subject" class="form-control" name="subject" placeholder="Subject" required>
                </div>
            </div>
            <div class="form-group">
                <label for="subject" class="control-label col-sm-2">Gender*</label>
                <div class="col-sm-2">
                    <select class="form-control" name="gender" required>
                        <option class="">Your gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
            <div class="form-group" >
                <label class="control-label col-sm-2">Skills</label>
                <div class="col-sm-4">
                <label class="checkbox-inline"><input type="checkbox" value="HTML" name="skill1">HTML</label>
                <label class="checkbox-inline"><input type="checkbox" name="skill2" value="CSS">CSS</label>
                <label class="checkbox-inline"><input type="checkbox" name="skill3" value="PHP">PHP</label>
                <label class="checkbox-inline"><input type="checkbox" name="skill4" value="Javascript">Javascript</label>
                </div>

            </div>
            <div class="form-group">
                <label for="subject" class="control-label  col-sm-2">Country</label>
                <div class="col-sm-2">
                    <select class="form-control" required name="country">
                        <option value="">Your Country</option>
                        <option value="gh">Ghana</option>
                        <option value="nig">Nigeria</option>
                        <option value="ben">Benin</option>
                        <option value="sa">South Africa</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label  class="control-label col-sm-2">Comment</label>
                <div class="col-sm-5">
                    <textarea class="form-control my-fixed" name="comment" rows="8"></textarea>
                </div>
            </div>
            <div class="form group">
                <label  class="control-label col-sm-2"></label>
                <div class="col-sm-5">
                <input type="submit" class="btn btn-default btn-block" name= "submit_form" value="Submit"></td>  
                </div>
            </div>


        </form>




        </div>
    </body>
</html>