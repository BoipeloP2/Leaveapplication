
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
									<h4>Department List</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
										<li class="breadcrumb-item active" aria-current="page">Department Module</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
							<div class="card-box pd-30 pt-10 height-100-p">
								<h2 class="mb-30 h4">Edit Department</h2>
								<section>
									<form name="save" method="post" action="<?= base_url('DepartmentController/updateDepartment') ?>">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
								<p class="mb-20"><input type="hidden" name="id" id="id" value="<?php echo $data['id']; ?>"></p>
												<label >Department Name</label>
												<input name="DepartmentName" type="text" class="form-control" required="true" value="<?php echo $data['DepartmentName']; ?>" autocomplete="off">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Department Short Name</label>
												<input name="DepartmentShortName" type="text" class="form-control" required="true" value="<?php echo $data['DepartmentShortName']; ?>" autocomplete="off" style="text-transform:uppercase">
											</div>
										</div>
									</div>
									<div class="col-sm-12 text-right">
										<div class="dropdown">
										   <input class="btn btn-primary" type="submit" value="update" name="add" id="add">
									    </div>
									</div>
								   </form>
							    </section>
							</div>
						</div>
						
						<div class="col-lg-8 col-md-6 col-sm-12 mb-30">
							<div class="card-box pd-30 pt-10 height-100-p">
								<h2 class="mb-30 h4">Department List</h2>
								<div class="pb-20">
									<table class="data-table table stripe hover nowrap">
										<thead>
										<tr>
											<th>SR NO.</th>
											<th class="table-plus">DEPARTMENT</th>
											<th>DEPART. SHORT NAME</th>
											<th class="datatable-nosort">ACTION</th>
										</tr>x
										</thead>
										<tbody>

										<?php if($data): ?>

                                           <?php foreach($data as $row): ?>
	
		                                       
	
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