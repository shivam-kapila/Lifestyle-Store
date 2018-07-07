<?php
require "includes/common.php";
if (isset($_SESSION['email'])) 
    { 
    header('location: products.php'); 
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="css/style.css" rel="stylesheet" type="text/css"/> 
        <title>Login</title>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <br>
        <br>
        <br>
        <br>
       <?php if(isset($_GET['login_error'])){
           ?><center><p class="text-danger">
       <?php echo $_GET['login_error'];}
            ?>
           </p></center>
           
        <div class="container">
            <div class="row row_style">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <form action="login_submit.php" method="POST" >
                        <div class="form-group">
                            <label for="email">Email ID</label>
                            <input type="email"  class="form-control" id="email" name="email" >
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password"  class="form-control" name="password" id="password" >
                        </div>
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            </form>
                           
                        </div>
                        <div class="panel-footer">Don't have an account? <a href="signup.php">Register</a></div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
         ?>
          
    </body>
</html>
