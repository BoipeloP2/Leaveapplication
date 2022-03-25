<?php include('assets/includes/header.php')?>

<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="../vendors/images/deskapp-logo-svg.png" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>
	
	<?php include('assets/includes/navbar.php')?>

	<?php include('assets/includes/right_sidebar.php')?>

	<?php include('assets/includes/left_sidebar.php')?>

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Leave Type List</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
										<li class="breadcrumb-item active" aria-current="page">Leave Type Module</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
							<div class="card-box pd-30 pt-10 height-100-p">
								<h2 class="mb-30 h4">New Leave Type</h2>
								<section>
									<form  method="post" action="<?= base_url('LeaveTypeController/create') ?>">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label >Leave Type</label>
												<input name="LeaveType" type="text" class="form-control" required="true" autocomplete="off">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Leave Description</label>
												<textarea name="Description" style="height: 5em;" class="form-control text_area" type="text"></textarea>
											</div>
										</div>
									</div>
									<!-- <div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Start Date</label>
												<input name="date_from" class="form-control" type="date">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>End Date</label>
												<input name="date_to" class="form-control" type="date">
											</div>
										</div>
									</div> -->
									
									<div class="col-sm-12 text-right">
										<div class="dropdown">
										   <input class="btn btn-primary" type="submit"  id="add">
									    </div>
									</div>
								   </form>
							    </section>
							</div>
						</div>
						
						<div class="col-lg-8 col-md-6 col-sm-12 mb-30">
							<div class="card-box pd-30 pt-10 height-100-p">
								<h2 class="mb-30 h4">Leave Type List</h2>
								<div class="pb-20">
									<table class="data-table table stripe hover nowrap">
										<thead>
										<tr>
										    <th class="table-plus">ID</th>
											<th class="table-plus">LEAVETYPE</th>
											<th class="table-plus">DESCRIPTION</th>
											<th table-plus>DATE FROM</th>
											<th class="datatable-nosort">ACTION</th>
										</tr>
										</thead>
										<tbody>

										

                                          <?php if($data): ?>

                                            <?php foreach($data as $row): ?>
	
	                                         	<tr>
		                                          	<td><?php echo $row["id"]; ?></td>
		                                        	<td><?php echo $row["LeaveType"];?></td>
			                                        <td><?php echo $row["Description"];?></td>
			                                        <td><?php echo $row["date_from"]?></td>
		                                        	<td><a href="<?php echo base_url('updateLeavetype/'.$row['id']);?>" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>&nbsp &nbsp &nbsp &nbsp &nbsp 	
		                                         	<a href="<?php echo base_url('LeaveTypeController/delete/'.$row['id']);?>" onclick="" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a></td>
		                                        	<td></td>
	                                               	</tr>
	
	                                      	<?php endforeach; ?>
	                                	<?php endif; ?>



										

											<!-- <tr>
												<td> </td>
	                                            <td></td>
	                                            <td></td>
												<td>
													<div class="table-actions">
														<a href="" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
														<a href="" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
													</div>
												</td>
											</tr> -->


										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

				</div>

			<?php include('assets/includes/footer.php'); ?>
		</div>
	</div>
	<!-- js -->

	<?php include('assets/includes/scripts.php')?>
</body>
</html>


<script>
function delete_data(id)
{
    if(confirm("Are you sure you want to remove it?"))
    {
        window.location.href="<?php echo base_url(); ?>LeaveTypeController/delete"+id;
    }
    return false;
}
</script>