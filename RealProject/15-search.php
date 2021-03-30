<?php
    include 'includes/db.php'
?>

<html>
    <head>
        <title>Search || Phil</title>
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
                if(isset($_GET['search_submit'])){
                    echo '
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4> You searched for "'.$_GET['search'].'" </h4>
                    </div>
                </div>
                
                ';
                    $sel_sql = "SELECT * FROM posts WHERE title LIKE '%$_GET[search]%' OR description LIKE '%$_GET[search]%' ";
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
                
                }
                   

                
                
                ?>
           
                 
                </section>
                <?php include 'includes/aside.php'  ?>

            </article>
        </div>
        <div style="width:50px;height:50px;"></div>
        <?php include 'includes/footer.php' ?>

  
    </body>
</html>