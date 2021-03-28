<html>
    <head>
        <title>Bootstrap Navbar and Header</title>
      <link rel="stylesheet" type = "text/css" href ="css/bootstrap.css">
      <script type="text/javascript" src="js/jquery.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>

    </head>
    <body>
        <header class="navbar navbar-inverse navbar-static-top">
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
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="panel-header">
                                <h2>The first Post</h2>
                            </div>
                            <img src="violin.jpg" width="100%">
                            <p>Ever considered Violin lessons.
                            A classical violinist works on one piece at a time.
                                The criteria she uses to choose the piece that will get her whole attention for the next few days — or weeks —is her intention.
                                Does she want to improve her technique, the agility of her fingers, her tuning skills? Maybe she will go for one of Kreisler’s studies.
                                Or does she prefer to express her awe for existence itself, letting out her creativity in the form of a musical prayer? Maybe then she will choose a sonata by Bach.
                                However, if she is after a commitment, if she wants to prove to herself — and the world — that she is not only a brilliant performer, but also an artist with her own message to spread, she will wholeheartedly dedicate her hours to a whole Shostakovich Violin Concerto, with her own cadenza and her carefully planned adornments.
                                She knows she is not the first one to make this choice: people have been playing the works of those composers for centuries — there have been countless interpretations, endless critiques, and an unimaginable number of discussions over which style of play is the most “ethical”, “authentic”, or “historically correct”.
                                But she knows better than to give in to the pressure of living up to historic legends.
                            </p>

                        </div>
                    </div>
                </section>
                <aside class="col-lg-4">
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
                    <div class="">

                    </div>

                </aside>
            </article>

    </body>
</html>