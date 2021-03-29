<?php
    include 'includes/db.php'
?>

<html>
    <head>
        <title>Index || Phil</title>
      <link rel="stylesheet" type = "text/css" href ="css/bootstrap.css">
      <script type="text/javascript" src="js/jquery.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>

    </head>
    <body>
    <?php include 'includes/header.php'?>
        <div class="container">
            <article class="row">
                <section class ="col-lg-8">
                <?php 
                
                    $sel_sql = "SELECT * FROM posts WHERE category='$_GET[cat_name]'";
                    $run_sql = mysqli_query($conn,$sel_sql);
                    while($rows = mysqli_fetch_assoc($run_sql)){
                        echo '

                        <div class="panel panel-success">
                        <div class="panel-heading">
                        <h3><a href="12-Postpage.php?post_id='.$rows['id'].'">'.$rows['title'].'</a></h3>
                        </div>
                            <div class="panel-body">
                                <div class="panel-header">
                                </div>
                                <div class="col-lg-4">
                                <img src="'.$rows['image'].'" width="100%">
                                </div>
                                <div class="col-lg-8">
                                <p>'.substr($rows['description'],0,244).'
                                </p>
                                </div>
                                <a href="12-Postpage.php?post_id='.$rows['id'].'" class="btn btn-primary">Read More</a>
                      
    
                            </div>
                        </div>
                        
                        
                        ';
                    }
                

                
                
                ?>
                    <!--div class="panel panel-success">
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
                    </div-->
                 
                </section>
                <?php include 'includes/aside.php'  ?>

            </article>
        </div>
        <div style="width:50px;height:50px;"></div>
        <?php include 'includes/footer.php' ?>

  
    </body>
</html>