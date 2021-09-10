<?php

//product.php

include('rms.php');

$object = new rms();

if(!$object->is_login())
{
    header("location:".$object->base_url."");
}

if(!$object->is_master_user())
{
    header("location:".$object->base_url."dashboard.php");
}

include('header.php');
                
?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Approved Orders</h1>

                    <!-- DataTales Example -->
                    <span id="message"></span>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        	<div class="row">
                            	<div class="col">
                            		<h6 class="m-0 font-weight-bold text-primary">Ordered List</h6>
                            	</div>
                            	<!-- <div class="col" align="right">
                            		<button type="button" name="add_user" id="add_user" class="btn btn-success btn-circle btn-sm"><i class="fas fa-plus"></i></button>
                            	</div> -->
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <form action="" method="get">
                                <table class="table table-bordered" id="user_table" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Item Id</th>
                                            <th>Item Name</th>
                                            <th>Sellers ID</th>
                                            <th>Starting Price</th>
                                            <th>Expected Price</th>
                                            <th>Current Price</th>
                                            <th>Photo Id</th>
                                            <th>Description</th> 
                                            <th>Category</th> 
                                            <th>End Time</th>         
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

include "../db.php"; // Using database connection file here

$db = mysqli_connect('localhost','root','','biddingdb')
    or die('Error connecting to MySQL server.'); 
    
$records = mysqli_query($db, "select * from item where Status = 'approved'"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['ItemID']; ?></td>
    <td><?php echo $data['ItemName']; ?></td>
    <td><?php echo $data['SellerID']; ?></td>
    <td><?php echo $data['StartingPrice']; ?></td>
    <td><?php echo $data['ExpectedPrice']; ?></td>
    <td><?php echo $data['CurrentPrice']; ?></td>
    <td><?php echo $data['PhotosID']; ?></td>
    <td><?php echo $data['Description']; ?></td>
    <td><?php echo $data['CategoryID']; ?></td>
    <td><?php echo $data['EndTime']; ?></td>
    <td class="text-primary"><?php echo $data['Status']; ?></td>
    <!-- <td ><a href="./Status/approve.php?ItemName<?php echo $data['ItemName']; ?>">APPROVE</a></td> -->
    <!-- <td ><a href="./approve.php?ItemID<?php echo $data['ItemID']; ?>">APPROVE</a></td>-->
    
</tr>
	
<?php
}
?>
</table>
</form>
<?php mysqli_close($db); // Close connection ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                <?php
                include('footer.php');
                ?>
