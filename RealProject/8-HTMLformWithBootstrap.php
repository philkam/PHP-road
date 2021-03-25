<!DOCTYPE html>
<html>
    <head>
        <title>New Form</title>
        <script src="bootstrap/js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    </head>
    <body>
        <div class="container">
        <h1>Submit form</h1>
        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label for="name" class="control-label col-sm-2">Name*</label>
                <div class="col-sm-5">
                    <input type="text" id="name" class="form-control" placeholder="Full Name" required>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="control-label col-sm-2">Email*</label>
                <div class="col-sm-5">
                    <input type="email" id="email" class="form-control" placeholder="Email Address" required>
                </div>
            </div>
            <div class="form-group">
                <label for="subject" class="control-label col-sm-2">Subject*</label>
                <div class="col-sm-5">
                    <input type="text" id="subject" class="form-control" placeholder="Subject" required>
                </div>
            </div>
            <div class="form-group">
                <label for="subject" class="control-label col-sm-2">Gender*</label>
                <div class="col-sm-2">
                    <select class="form-control" required>
                        <option class="">Your gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
            <div class="form-group" >
                <label class="control-label col-sm-2"></label>
                <div class="col-sm-5"></div>
                <label class="checkbox-inline"><input type="checkbox">HTML</label>
                <label class="checkbox-inline"><input type="checkbox">CSS</label>
                <label class="checkbox-inline"><input type="checkbox">PHP</label>
                <label class="checkbox-inline"><input type="checkbox">Javascript</label>

            </div>
            <div class="form-group">
                <label for="subject" class="control-label col-sm-2">Country</label>
                <div class="col-sm-2">
                    <select class="form-control" required>
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
                    <textarea class="form-control my-fixed" rows="8"></textarea>
                </div>
            </div>
            <div class="form group">
                <label  class="control-label col-sm-2"></label>
                <div class="col-sm-5">
                <input type="hidden" value="yes" name="validate"><td>
                <input type="submit" name="login_submit"></td>  
                </div>
            </div>


        </form>




        </div>
    </body>
</html>