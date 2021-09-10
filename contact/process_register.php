<?php
if (isset($_POST['message'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $msg = $_POST['msg'];
    $username = strip_tags($_POST['username']);

    //check whether there's already a user having the same username
    $db = mysqli_connect('localhost', 'root', '', 'biddingdb')
        or die('Error connecting to MySQL server.');
    $newmessage = "INSERT INTO messages (Username, text, FName, LName)
                        VALUES ('$username','$msg', '$fname', '$lname')";

    if (mysqli_query($db, $newmessage)) {
        header("location:index.php?success=1");
    }
    else {
        echo "Error: " . $newmessage . "<br>" . mysqli_error($db);
    }
}
else {
    //username already exists!
    header("location:index.php?err=2");
}
?>