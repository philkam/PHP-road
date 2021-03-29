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
        <form class="form-horizontal" action="" method="POST" role="form">
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
                    <input type="text" id="subject" class="form-control" name="subject"  placeholder="Subject" required>
                </div>
            </div>
                </div>
            </div>
            <div class="form-group">
                <label  class="control-label col-sm-2">Comment</label>
                <div class="col-sm-5">
                    <textarea class="form-control my-fixed" name="comment" rows="8"> </textarea>
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