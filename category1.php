<?php session_start(); ?>
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

<body>
    
    <?php include 'header.php';?>

    <?php 
    $db = mysqli_connect('localhost','root','','biddingdb')
    or die('Error connecting to MySQL server.'); 
                //  $id = isset($_GET['id']) ? $_GET['id'] : '';
                 $CategoryID = isset ($_GET['CategoryID']) ? $_GET['CategoryID'] :'';
                 $query = "SELECT * FROM item Where CategoryID=$CategoryID AND Status = 'approved'";
                 $result = mysqli_query($db, $query);
                 $list = mysqli_fetch_array($result);

                 $query2 = "SELECT * FROM category Where CategoryID=$CategoryID";
                 $result2 = mysqli_query($db, $query2);
                 $CategoryName = mysqli_fetch_array($result2);
                                      
                            ?>

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                   


                    <!-- *** MENUS AND FILTERS END *** -->
                </div>

                <div class="col-md-12"> 

                    <div class="row products">

                    <?php 
                        while($list) { 

                                        
                        ?>

                        <div class="col-md-3 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.php?ItemNo=<?php echo $list['ItemID'] ?>">
                                                <img src="<?php echo $list['PhotosID'];?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.php?ItemNo=<?php echo $list['ItemID'] ?>">
                                                <img src="<?php echo $list['PhotosID'];?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="img/product1.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php?ItemNo=<?php echo $list['ItemID'] ?>"><?php echo $list['ItemName'] ?></a></h3>
                                    <p class="price">ksh : <?php echo number_format($list['CurrentPrice'],2);?></p>
                                    <p class="buttons">
                                        <a href="detail.php?ItemNo=<?php echo $list['ItemID'] ?>" class="btn btn-default">View detail</a>
                                        <a href="basket.html" class="btn btn-primary"><i class="fa fa-bidding_dbping-cart"></i>BID NOW</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                       <?php 
                        $list = $result->fetch_assoc(); }

                                        
                        ?>
                    </div>
                    <!-- /.products -->

                    <div class="pages">

                        <p class="loadMore">
                            <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>
                        </p>

                        <ul class="pagination">
                            <li><a href="#">&laquo;</a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li><a href="#">&raquo;</a>
                            </li>
                        </ul>
                    </div>


                </div>
                <!-- /.col-md-9 -->
                

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
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