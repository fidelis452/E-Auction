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

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">

</head>

<body style="background-image: url('./img/bg.jpg')">
    
   <?php $db = mysqli_connect('localhost', 'root', '', 'biddingdb')
    or die('Error connecting to MySQL server.');

$query1 = "SELECT * FROM category ";
$result1 = mysqli_query($db, $query1);
$categories = mysqli_fetch_array($result1);


include 'header.php';

?>

    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">
                    <!-- *** PAGES MENU ***
 _________________________________________________________ -->
                    <!-- <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Quick Links</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <a href="contact.php">Contact Us</a>
                                </li>
                                <li>
                                    <a href="faq.php">FAQ</a>
                                </li>

                            </ul>

                        </div>
                    </div> -->

                    <!-- *** PAGES MENU END *** -->


                    <!-- <div class="banner">
                        <a href="#">
                            <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div> -->
                </div>

                <div class="col-md-12">


                    <div class="box" id="contact">
                        <h1>Contact</h1>

                        <p class="lead">Ask ant Question?</p>

                        <hr>

                        <div class="row">
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-6">
                                <h3><i class="fa fa-phone"></i> Call center</h3>
                                <p><strong>+254 797 519 669</strong>
                                </p>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-6">
                                <h3><i class="fa fa-envelope"></i> Electronic support</h3>
                                <ul>
                                    <li><strong><a href="mailto:">fideliswaweru19@gmail.com</a></strong>
                                    </li>
                                    
                                </ul>
                            </div>
                            <!-- /.col-sm-4 -->
                        </div>
                        <!-- /.row -->

                        <hr>

                        <div id="map">

                        </div>
            <div class="box text-center" data-animate="fadeInUp">
                <div class="container">
                    <div class="col-md-9">
                        <h3 class="text-uppercase">CONTACT US</h3>

                        <?php include 'contact/index.php'; ?>
                    <!-- </div> -->
                    </div>
                </div>
            </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

  <?php include 'footer.php'; ?>


    </div>
    <!-- /#all -->


    

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




    <!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script> -->
         <!-- <script async difer
         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAS7DIHKGOodQ_RgzNRIKS8ea_aS0KakxE&callback=initMap">
        </script> -->
        <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHq-4yxfIXXyeHbmPykhebuJsMdu9YuwI&callback=initMap&libraries=&v=weekly"
      async
    ></script>
    

    <script>
        let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -0.319144, lng: 37.6550383 },
    zoom: 8,
  });
}
    </script>


</body>

</html>
