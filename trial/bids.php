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
<?php include('../db.php')?>

<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">
				
			</div>
		</div>
		<div class="row">
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b>List of Bids</b>
					</div>
					<div class="card-body">
						<table class="table table-condensed table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="">Name</th>
									<th class="">Product</th>
									<th class="">Amount</th>
									<th class="">Status</th>
									<th class=""></th>
								</tr>
							</thead>
							<tbody>
								<?php 
                                include "../db.php"; // Using database connection file here

                                $db = mysqli_connect('localhost', 'root', '', 'biddingdb')
                                    or die('Error connecting to MySQL server.');
								$i = 1;
								$cat = array();
								$cat[] = '';
								$qry = $conn->query("SELECT * FROM category ");
								while($row = $qry->fetch_assoc()){
									$cat[$row['CategoryID']] = $row['Category'];
								}
								$books = $conn->query("SELECT b.*, i.ItemName, u.Fname as uname,i.EndTime bdt FROM bids b inner join user u on u.UserID = b.BidderID inner join item i on i.ItemID = b.ItemID ");
								while($row=$books->fetch_assoc()):
									$get = $conn->query("SELECT * FROM bids where ItemID = {$row['ItemID']} order by BidAmount desc limit 1 ");
									$uid = $get->num_rows > 0 ? $get->fetch_array()['BidderID'] : 0 ;
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="">
										 <p> <b><?php echo ucwords($row['uname']) ?></b></p>
									</td>
									<td class="">
										 <p> <b><?php echo ucwords($row['ItemName']) ?></b></p>
									</td>
									<td class="text-right">
										 <p> <b><?php echo number_format($row['BidAmount'],2) ?></b></p>
									</td>
									<td class="text-center">
										<?php if($row['status'] == 1): ?>
										<?php if(strtotime(date('Y-m-d H:i')) < strtotime($row['bdt'])): ?>
										<span class="badge badge-secondary">Bidding Stage</span>
										<?php else: ?>
										<?php if($uid == $row['BidderID']): ?>
										<span class="badge badge-success">Wins in Bidding</span>
										<?php else: ?>
										<span class="badge badge-secondary">Loose in Bidding</span>
										<?php endif; ?>
										<?php endif; ?>
										<?php elseif($row['status'] == 2): ?>
										<span class="badge badge-primary">Confirmed</span>
										<?php else: ?>
										<span class="badge badge-danger">Canceled</span>
										<?php endif; ?>
									</td>
									<td>
										<button class="btn btn-primary btn-sm view_user" type="button" data-id ='<?php echo $row['BidderID'] ?>'>View Buyer Details</button>
									</td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<style>
	
	td{
		vertical-align: middle !important;
	}
	td p{
		margin: unset
	}
	img{
		max-width:100px;
		max-height: :150px;
	}
</style>
<script>
	$(document).ready(function(){
		$('table').dataTable()
	})
	
	$('.view_user').click(function(){
		uni_modal("<i class'fa fa-card-id'></i> Buyer Details","user.php?BidderID="+$(this).attr('data-id'))
		
	})
	// $('#new_book').click(function(){
	// 	uni_modal("New Book","manage_booking.php","mid-large")
		
	// })
	// $('.edit_book').click(function(){
	// 	uni_modal("Manage Book Details","manage_booking.php?id="+$(this).attr('data-id'),"mid-large")
		
	// })
	// $('.delete_book').click(function(){
	// 	_conf("Are you sure to delete this book?","delete_book",[$(this).attr('data-id')])
	// })
	
	// function delete_book($id){
	// 	start_load()
	// 	$.ajax({
	// 		url:'ajax.php?action=delete_book',
	// 		method:'POST',
	// 		data:{id:$id},
	// 		success:function(resp){
	// 			if(resp==1){
	// 				alert_toast("Data successfully deleted",'success')
	// 				setTimeout(function(){
	// 					location.reload()
	// 				},1500)

	// 			}
	// 		}
	// 	})
	// }
</script>