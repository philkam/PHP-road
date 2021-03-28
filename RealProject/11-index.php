<html>
    <head>
        <title>Bootstrap Navbar and Header</title>
      <link rel="stylesheet" type = "text/css" href ="css/bootstrap.css">
      <script type="text/javascript" src="js/jquery.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>

    </head>
    <body>
        <header class="navbar navbar-inverse navbar-static-top ">
            <div class="container">
                <a href="index.php" class="navbar-brand">Phil System</a>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Home</a>
                    <li><a href="#">Article</a>
                    <li><a href="#">Contact</a>
                    <li><a href="#">Log out</a>
                </ul>
            </div>
        </header>
        <div class="container">
            <article class="row">
                <section class ="col-lg-8">
                    <div class="panel panel-success">
                    <div class="panel-heading">
                    <h3>The first Post</h3>
                    </div>
                        <div class="panel-body">
                            <div class="panel-header">
                            </div>
                            <div class="col-lg-4">
                            <img src="images/violin.jpg" width="100%">
                            </div>
                            <div class="col-lg-8">
                            <p>Ever considered Violin lessons.
                            A classical violinist works on one piece at a time.
                                The criteria she uses to choose the piece that will get her whole attention for the next few days — or weeks —is her intention.
                                
                            </p>
                            </div>
                            <a href="12-Postpage.php" class="btn btn-primary">Read More</a>
                  

                        </div>
                    </div>
                 
                </section>
                
                <aside class="col-lg-4">
                    <form class="panel-group form-horizontal" role="form">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="panel-header">
                                    <h4>Search Something</h4>
                                </div>
                                <div class="input-group ">
                                <input type="search" class="form-control" placeholder="Search something...">
                                <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></i>Q</i></button>
                                </div>
                            </div>
                        </div>

                    </form>
                    <form class="panel-group form-horizontal" role="form" >
                        <div class="panel panel-default">
                        <div class="panel-heading">Login</div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="username" class="control-label col-sm-4" >User Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="username" placeholder="Enter username" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label col-sm-4" >Password</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="password" placeholder="Enter password" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="submit" class="btn btn-block btn-success" value="submit" >
                                    </div>
                                </div>

                                
                            </div>
                        </div>

                    </form>
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">Lorem Ipsum</h4>
                            <p class="list-group-item-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                        </a>
                        <a href="#" class="list-group-item active">
                            <h4 class="list-group-item-heading">Lorem Ipsum</h4>
                            <p class="list-group-item-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">Lorem Ipsum</h4>
                            <p class="list-group-item-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </a>
                    </div>
                </aside>
            </article>
        </div>
        <div style="width:50px;height:50px;"></div>
        <footer class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
        <p class="navbar-text"> Created by Philip Marfo</p>
        <a href="#" class="btn btn-success pull-right navbar-btn">Share</a>
        
        </div>
        
        </footer>
  
    </body>
</html>