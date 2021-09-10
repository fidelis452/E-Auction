<?php include '../db.php' ?>
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
<?php
if(isset($_GET['UserID'])){
$qry = $conn->query("SELECT * FROM user where UserID= ".$_GET['BidderID']);
foreach($qry->fetch_array() as $k => $val){
	$$k=$val;
}
}
?>
<style type="text/css">
	
	.avatar {
	    max-width: calc(100%);
	    max-height: 27vh;
	    align-items: center;
	    justify-content: center;
	    padding: 5px;
	}
	.avatar img {
	    max-width: calc(100%);
	    max-height: 27vh;
	}
	p{
		margin:unset;
	}
	#uni_modal .modal-footer{
		display: none
	}
	#uni_modal .modal-footer.display{
		display: block
	}
</style>
<?php
$db = mysqli_connect('localhost','root','','biddingdb')
or die('Error connecting to MySQL server.'); 

$records = mysqli_query($db, "select * from user"); // fetch data from database

while ($data = mysqli_fetch_array($records)) 
{
?>
<div class="container-field">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-md-6">
				<p>Name: <b><?php echo $data['FName'] ?></b></p>
				<p>Email: <b><?php echo $data['Username'] ?></b></p>
				<p>Contact: <b><?php echo $data['Contact_No'] ?></b></p>
				<p>Address: <b><?php echo $data['Address'] ?></b></p>
			</div>
		</div>
	</div>
</div>
<?php
}
?>
<div class="modal-footer display">
	<div class="row">
		<div class="col-lg-12">
			<button class="btn float-right btn-secondary" type="button" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>
<script>
	
</script>
