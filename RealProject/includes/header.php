<header class="navbar navbar-inverse navbar-static-top ">
            <div class="container">
                <a href="11-index.php" class="navbar-brand">Phil System</a>
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="11-index.php">Home</a>
                    <?php
                    $sel_cat = "SELECT * FROM category";
                    $run_cat  = mysqli_query($conn,$sel_cat);
                    while($rows = mysqli_fetch_assoc($run_cat)){
                        if(isset($_GET['cat_name'])){
                            if($_GET['cat_name']==$rows['category_name']){
                                $class = 'active';
                            }else{
                                $class = '';
                            }
                        }else{
                            $class = '';
                        }
                        echo '<li class="'.$class.'"><a href="13-Menupage.php?cat_name='.$rows['category_name'].'">'.$rows['category_name'].'</a></li>';
                    }                    
                    ?>
                    <li><a href="#">Contact</a>
                    <li><a href="#">Log out</a>
                </ul>
            </div>
        </header>