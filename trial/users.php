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
                    <h1 class="h3 mb-4 text-gray-800">User Management</h1>

                    <!-- DataTales Example -->
                    <span id="message"></span>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        	<div class="row">
                            	<div class="col">
                            		<h6 class="m-0 font-weight-bold text-primary">User List</h6>
                            	</div>
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
                                            <th>User Id</th>
                                            <th>User Name</th>
                                            <th>User Contact No.</th>
                                            <th>Address</th>
                                            <th>FName</th>
                                            <th>LName</th>
                                            <th>Gender</th>
                                            <th>Id no</th> 
                                            <th>Profile picture</th> 
                                            <th>DELETE</th>         
                                            <th>EDIT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

include "../db.php"; // Using database connection file here
$db = mysqli_connect('localhost','root','','biddingdb')
    or die('Error connecting to MySQL server.'); 
$records = mysqli_query($db,"select * from user"); // fetch data from database


while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['UserID']; ?></td>
    <td><?php echo $data['Username']; ?></td>
    <td><?php echo $data['Contact_No']; ?></td>
    <td><?php echo $data['Address']; ?></td>
    <td><?php echo $data['FName']; ?></td>
    <td><?php echo $data['LName']; ?></td>
    <td><?php echo $data['gender']; ?></td>
    <td><?php echo $data['idno']; ?></td>
    <td><?php echo $data['profile_image']; ?></td>
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
