<?php 
session_start(); 

if(isset($_SESSION['userid'])){
    header('Location: index.php');
}   

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">

    <title>
        E-auction
    </title>

    <meta name="keywords" content="">

    <!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'> -->

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="css/reg.css">
    <script src="js/respond.min.js"></script>


    <link rel="shortcut icon" href="favicon.png">



</head>

<body>

    <?php include 'header.php';?>


    <div id="all">

        <div id="content">
            <div class="container">
                <div class="col-md-4">
</div>
            <div class="col-md-4">
                    <div class="box">
                        <h1>Login</h1>
                        <hr>

                        <?php 
                        if(isset($_GET['err']) && $_GET['err'] == 1) {
                            echo '
                            <div class="alert alert-danger">
                                <strong>Error!</strong> You have entered an invalid username or password.
                            </div>
                            ';
                        }
                        ?>
                        <form action="process_login.php" method="post">
                        <div class="form-group">
                                <label for="username">Email Address</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="text-center">
                            <p class="lead">New User?  <a href="register.php">REGISTER</a></p>
                                <button type="submit" name="cmdlogin" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
</script>

        
    <?php include 'footer.php';?>

    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>



</body>

</html>