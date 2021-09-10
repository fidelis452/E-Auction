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
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/owl.carousel.css" rel="stylesheet">
    <link href="../css/owl.theme.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

    <!-- theme stylesheet -->
    <link href="../css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="../css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/reg.css">
    <script src="../js/respond.min.js"></script>
    <link rel="shortcut icon" href="../favicon.png">


</head>

<body>


    <div id="all">

        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <div class="box">
                        <?php
if (isset($_GET['err']) && $_GET['err'] == 2) {
    echo '
                            <div class="alert alert-danger">
                                <strong>Error!</strong> Username you entered already exists.
                            </div>
                            ';
}

if (isset($_GET['success'])) {
    echo '
                            <div class="alert alert-success">
                                <strong>Success!</strong> Thank you for contacting us.
                            </div>
                            ';
}

?>

                        <form action="process_register.php" method="post">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" id="fname" name="fname" Required>
                            </div>
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lname" Required>
                            </div>
                    </div>
                    <div class="col-md-6">
                    
                    <div class="form-group">
                                <label for="username">Email Address</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                            <div class="form-group">
                                <label for="msg">Write your Message Here</label>
                                <input type="text" class="form-control" id="msg" name="msg" Required>
                            </div>
                    </div>
                            <div class="text-center">
                                <button type="submit" name="message" class="btn btn-primary"><i class="fa fa-user-md"></i> Submit</button>
                            </div>
                        </form>

                        
                    </div>
                </div>
                
                    
                <!-- <div class="col-md-6">
                    <div class="box">
                        <h1>Login</h1>

                        <p class="lead">Already our customer?</p>

                        <hr>

                        
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
                                <button type="submit" name="cmdlogin" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div> -->
            <!-- /.container -->
        </div>
        <!-- /#content -->
        <!-- <script>
           function triggerClick(e) {
  document.querySelector('#profileImage').click();
}
function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
} -->
</script>

        
    

    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="../js/jquery-1.11.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.cookie.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <script src="../js/modernizr.js"></script>
    <script src="../js/bootstrap-hover-dropdown.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/front.js"></script>



</body>

</html>