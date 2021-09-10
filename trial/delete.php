<?php

include "../db.php"; // Using database connection file here
$db = mysqli_connect('localhost','root','','biddingdb')
    or die('Error connecting to MySQL server.');
$UserID = $_GET['UserID']; // get id through query string
$del = mysqli_query($db,"delete from user where UserID = '$UserID'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:users.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>