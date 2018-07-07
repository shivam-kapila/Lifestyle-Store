<?php
require "includes/common.php";
if (isset($_SESSION['email'])) 
    { 
    header('location: products.php'); 
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="css/index.css" rel="stylesheet" type="text/css"/> 
        <title>Lifestyle Store</title>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div id="banner_image">
            <div class="container">
                <center> <div id="banner_content">
                    <h1>
                        We sell lifestyle.
                    </h1>
                    <p>
                        Flat 40% OFF on premium brands
                    </p>
                    <a href="products.php" class="btn btn-danger btn-lg active">
                        <b>Shop Now</b>
                    </a>
                </div>
                </center>
            </div>
        </div>
        <div class="container">
                 <div class="row">
                     <div class="col-sm-4">
                         <div class="thumbnail">
                             <a href="products.php">
                                 <img src="img/camera.jpg" alt="Cameras" class="img-responsive">
                             <div class="caption">
                                 <h3>
                                     Cameras
                                 </h3>  
                                 <p>
                                     Choose among the best available in the world.
                                 </p>
                             </div>
                             </a>
                         </div>
                     </div>
                     <div class="col-sm-4">
                         <div class="thumbnail">
                             <a href="products.php">
                             <img src="img/watch.jpg" alt="Watches" class="img-responsive">
                             <div class="caption">
                                 <h3>
                                   Watches
                                 </h3>  
                                 <p>
                                    Original watches from the best brands.
                                 </p>
                             </div>
                             </a>
                         </div>
                     </div><div class="col-sm-4">
                         <div class="thumbnail">
                             <a href="products.php">
                                 <img src="img/shirt.jpg" alt="Shirts" class="img-responsive">
                             <div class="caption">
                                 <h3>
                                     Shirts
                                 </h3>  
                                 <p>
                                    Our exquisite collection of shirts. 
                                 </p>
                             </div>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         <?php
        include 'includes/footer.php';
         ?>
            
        </body>
</html>