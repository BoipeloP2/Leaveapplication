<?php include('assets/includes/header.php') ?>


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

	<?php include('assets/includes/navbar.php') ?>

	<?php include('assets/includes/right_sidebar.php') ?>

	<?php include('assets/includes/left_sidebar.php') ?>

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="title pb-20">
				<h2 class="h3 mb-0">Administrative Breakdown</h2>
			</div>
			<div class="row pb-10">
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">



						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark"></div>
								<div class="font-14 text-secondary weight-500">Total Employees</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#00eccf"><i class="icon-copy dw dw-user-2"></i></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">



						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark"></div>
								<div class="font-14 text-secondary weight-500">Staffs</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#09cc06"><span class="icon-copy fa fa-hourglass"></span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">



						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark"></div>
								<div class="font-14 text-secondary weight-500">Department Heads</div>
							</div>
							<div class="widget-icon">
								<div class="icon"><i class="icon-copy fa fa-hourglass-end" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">



						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark"></div>
								<div class="font-14 text-secondary weight-500">Administrators</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#ff5b5b"><i class="icon-copy fa fa-hourglass-o" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="card-box mb-30">
				<div class="pd-20">
					<h2 class="text-blue h4">ALL EMPLOYEES</h2>
				</div>
				<div class="pb-20">
					<table class="data-table table stripe hover nowrap">
						<thead>
							<tr>
								<th class="table-plus">EmpNo</th>
								<th>Surname</th>
								<th>First Name</th>
								<th>Personal Email</th>
								<th>Contact No</th>
								<th class="datatable-nosort">ACTION</th>
							</tr>
						</thead>

						<tbody>




							<!-- <td class="table-plus">
									<div class="name-avatar d-flex align-items-center">
										<div class="avatar mr-2 flex-shrink-0">
											<img src="" class="border-radius-100 shadow" width="40" height="40" alt="">
										</div>
										<div class="txt">
											<div class="weight-600"></div>
										</div>
									</div>
								</td> -->

							<?php if($data) : ?>

								<?php foreach ($data as $row) : ?>

									<tr>
										<td><?php echo $row["empNo"]; ?></td>
										<td><?php echo $row["surname"]; ?></td>
										<td><?php echo $row["firstname"]; ?></td>
										<td><?php echo $row["personalemail"]; ?></td>
										<td><?php echo $row["homecellno"] ?></td>
										<td>
											<div class="dropdown">
												<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
													<i class="dw dw-more"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
													<a class="dropdown-item" href="<?php echo base_url('empController/updatebyid/'.$row['id']);?>"><i class="dw dw-edit2"></i> Edit</a>
													<a class="dropdown-item" href="<?php echo base_url('empController/delete/'.$row['id']);?>"><i class="dw dw-delete-3"></i> Delete</a>
												</div>
											</div>
										</td>
										<td></td>
									</tr>

								<?php endforeach; ?>
							<?php endif; ?>


						</tbody>
					</table>
				</div>
			</div>

			<?php include('assets/includes/footer.php'); ?>
		</div>
	</div>
	<!-- js -->

	<?php include('assets/includes/scripts.php') ?>
</body>

</html>

<script>
function delete_data(id)
{
    if(confirm("Are you sure you want to remove it?"))
    {
        window.location.href="<?php echo base_url(); ?>empController/delete"+id;
    }
    return false;
}
</script>