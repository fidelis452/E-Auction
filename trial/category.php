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
                    <h1 class="h3 mb-4 text-gray-800">Category Management</h1>
					            
					<!-- <label class="control-label col-sm-2" >Item Name:</label>
                                          <div class="col-sm-10">
                                            <input type="text" class="form-control" name="ItemName" placeholder="Enter the listing name">
                                          </div>      
					<input type="submit" align="left" class="btn btn-primary center-block" type="submit" value="Submit Listing"> -->
                    <!-- DataTales Example -->
                    <span id="message"></span>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        	<div class="row">
                            	<div class="col">
                            		<h6 class="m-0 font-weight-bold text-primary">Category List</h6>
                            	</div>
								<!-- <form action="cat_action.php" method="post">
								Category name: <input type="text" name="fname" /><br><br>
								<input type="submit" /></form> -->
                            	<!-- <div class="col" align="right">
                            		<button type="button" name="add_user" id="add_user" class="btn btn-success btn-circle btn-sm"><i class="fas fa-plus"></i></button>
                            	</div> -->
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="user_table" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Category ID</th>
                                            <th>Category Name</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

include "../db.php"; // Using database connection file here

$db = mysqli_connect('localhost', 'root', '', 'biddingdb')
    or die('Error connecting to MySQL server.');


$records = mysqli_query($db, "select * from category"); // fetch data from database

while ($data = mysqli_fetch_array($records)) 
{
?>
  <tr>
    <td><?php echo $data['CategoryID']; ?></td>
    <td><?php echo $data['Category']; ?></td>
    <td><a href="edit.php?UserID=<?php echo $data['UserID']; ?>">Edit</a></td>
    <td><a href="delete.php?UserID=<?php echo $data['UserID']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                <?php
include('footer.php');
?>
