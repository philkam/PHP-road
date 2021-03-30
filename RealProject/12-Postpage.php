<?php
    include 'includes/db.php'
?>

<html>
    <head>
        <title>Post || Phil</title>
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
                if(isset($_GET['post_id'])){
                $sel_sql = "SELECT * FROM posts WHERE id = '$_GET[post_id]'";
                $run_sql = mysqli_query($conn,$sel_sql);
                while($rows = mysqli_fetch_assoc($run_sql)){
                    echo '
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="panel-header">
                                <h2>'.$rows['title'].'</h2>
                            </div>
                            <img src="'.$rows['image'].'" width="100%">
                            <p>'.$rows['description'].'</p>
                        </div>
                    </div>
                    
                    
                    ';
                }
            }
                
                
                
                ?>
                    <!--div class="panel panel-default">
                        <div class="panel-body">
                            <div class="panel-header">
                                <h2>The first Post</h2>
                            </div>
                            <img src="images/violin.jpg" width="100%">
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
                    </div-->
                </section>
                
                <?php include 'includes/aside.php'  ?>

            </article>
        </div>
        <div style="width:50px;height:50px;"></div>
        <?php include 'includes/footer.php' ?>

  
    </body>
</html>