<?php

session_start();


if (!isset($_SESSION['userid'])) {
    header('Location: addlisting.php?err=1');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        E-Auction
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
<?php $db = mysqli_connect('localhost', 'root', '', 'biddingdb')
    or die('Error connecting to MySQL server.');

$query1 = "SELECT * FROM category ";
$result1 = mysqli_query($db, $query1);
$categories = mysqli_fetch_array($result1);
?>
    <?php include 'header.php'; ?>
    <div id="content">
    <div class="container">
    <!-- *** PAGES MENU ***
_________________________________________________________ -->
<div class="col-md-12">
<div class="box" id="text-page">
<?php
$userID = $_SESSION['userid'];

if (isset($_POST['CategoryID'])) {
    $CategoryID = $_POST['CategoryID'];
}
else {
    $CategoryID = null;
}
if (isset($_POST['ItemName'])) {
    $ItemName = $_POST['ItemName'];
}
else {
    $ItemName = null;
}
if (isset($_POST['Description'])) {
    $Description = $_POST['Description'];
}
else {
    $Description = null;
}

if (isset($_POST['PhotosID'])) {
    $PhotosID = $_POST['PhotosID'];
}
else {
    $PhotosID = null;
}
if (isset($_POST['StartingPrice'])) {
    $StartingPrice = $_POST['StartingPrice'];
}
else {
    $StartingPrice = null;
}
if (isset($_POST['ExpectedPrice'])) {
    $ExpectedPrice = $_POST['ExpectedPrice'];
}
else {
    $ExpectedPrice = null;
}
if (isset($_POST['EndTime'])) {
    $EndTime = $_POST['EndTime'];
}
else {
    $EndTime = null;
}



$db = mysqli_connect('localhost', 'root', '', 'biddingdb')
    or die('Error connecting to MySQL server.');

$sql = "INSERT INTO item (CategoryID,ItemName,Description, PhotosID, StartingPrice, ExpectedPrice,currentPrice,EndTime,SellerID)VALUES ('$CategoryID','$ItemName','$Description', '$PhotosID', '$StartingPrice', '$ExpectedPrice','$StartingPrice', '$EndTime', '$userID') ";

if ($db->query($sql) === TRUE) {
//echo "New record created successfully";
}
else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

mysqli_close($db);

?>

                        <h1>Your Listing was submitted successfully!</h1>
                        <h1>Wait for your to be Approved !!!!</h1>
                        </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        
        <!-- /#content -->


        <!-- *** FOOTER ***
 _________________________________________________________ -->
    
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






</body>

</html>