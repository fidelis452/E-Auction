<?php

//product.php

include('rms.php');

$object = new rms();

if (!$object->is_login()) 
{
    header("location:" . $object->base_url . "");
}

if (!$object->is_master_user()) 
{
    header("location:" . $object->base_url . "dashboard.php");
}

include('header.php');


?>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Pending Approvals</h1>

    <!-- DataTales Example -->
    <span id="message"></span>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary">Pending Approvals</h6>
                </div>
                <!-- <div class="col" align="right">
                    <button type="button" name="add_user" id="add_user" class="btn btn-success btn-circle btn-sm"><i class="fas fa-plus"></i></button>
                </div> -->
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <form action="" method="get">
                <table class="table table-bordered" id="products" width="100%" cellspacing="0">
                <thead>
                <tr>
            <th>Item Id</th>
            <th>Item Name</th>
            <th>Sellers ID</th>
            <th>Starting Price</th>
            <!-- <th>Expected Price</th> -->
            <th>Current Price</th>
            <th>Photo Id</th>
            <th>Description</th> 
            <th>Category</th> 
            <th>End Time</th> 
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
$db = mysqli_connect('localhost', 'root', '', 'biddingdb')
    or die('Error connecting to MySQL server.');
$query = "SELECT * FROM item WHERE Status = 'pending' ORDER BY ItemID ASC";
$result = mysqli_query($db, $query);
while ($row = mysqli_fetch_array($result
)) {
?>
        <tr>
            <td><?php echo $row['ItemID']; ?></td>
            <td><?php echo $row['ItemName']; ?></td>
            <td><?php echo $row['SellerID']; ?></td>
            <td><?php echo $row['StartingPrice']; ?></td>
            <!-- <td><?php echo $row['ExpectedPrice']; ?></td> -->
            <td><?php echo $row['CurrentPrice']; ?></td>
            <td><?php echo $row['PhotosID']; ?></td>
            <td><?php echo $row['Description']; ?></td>
            <td><?php echo $row['CategoryID']; ?></td>
            <td><?php echo $row['EndTime']; ?></td>
            <td>
                <form action ="approve.php" method ="POST">
                    <input type = "hidden" name  ="id" value = "<?php echo $row['ItemID']; ?>"/>
                    <input type = "submit" name  ="approve" value = "Approve"/>
                    <input type = "submit" name  ="deny" value = "Deny"/>
                </form>
            </td>
        </tr>
        

    <?php
}
?>
            </table>
</form>
<?php

if (isset($_POST['approve'])) {
    $ItemID = $_POST['id'];

    $select = "UPDATE item SET Status = 'approved' WHERE ItemID = '$ItemID'";
    $result = mysqli_query($db, $select);

    echo '<script type = "text/javascript">';
    echo 'alert("User Approved!");';
    echo 'window.location.href = "approve.php"';
    echo '</script>';
}

if (isset($_POST['deny'])) {
    $ItemID = $_POST['id'];

    $select = "UPDATE item SET Status = 'denied' WHERE ItemID = '$ItemID'";
    $result = mysqli_query($db, $select);

    echo '<script type = "text/javascript">';
    echo 'alert("User Denied!");';
    echo 'window.location.href = "approve.php"';
    echo '</script>';
}
?>

</body>
</html>