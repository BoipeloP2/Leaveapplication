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

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>WorkFlow Portal</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active" aria-current="page">WorkFlow Module</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<div class="card-box mb-30">
					<div class="pd-20">
						<h2 class="text-blue h4">Week Days</h2>
					</div>
					<div class="pb-20">
						<table class="data-table table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">Monday</th>
									<th>Tuesday</th>
									<th>Wednesday</th>
									<th>Thursday</th>
									<th>Friday</th>
									<th class="datatable-nosort">ACTION</th>
								</tr>
							</thead>
							<tbody>
								<tr>



									<td class="table-plus">
										<div class="name-avatar d-flex align-items-center">
											<div class="txt mr-2 flex-shrink-0">
												<b></b>
											</div>
											<div class="txt">
												<div class="weight-600"></div>
											</div>
										</div>
									</td>
									<td></td>
									<td></td>
									<td>
									</td>
									<td>
									</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href=""><i class="dw dw-eye"></i> View</a>
												<a class="dropdown-item" href=""><i class="dw dw-delete-3"></i> Delete</a>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Work Flow</h4>
							<p class="mb-20"></p>
						</div>
					</div>
					<div class="wizard-content">
						<form method="post" action="<?= base_url() ?>/EmployeeController/create">
							<section>
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Employee Status :</label>
											<select name="EmployeeStatus" class="custom-select form-control" required="true" autocomplete="off">
												<option value="">Select Status</option>
												<option value="male">Permanent</option>
												<option value="female">Contract</option>
											</select>
										</div>
									</div>
									<!-- <div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label >Title :</label>
											<input name="Title" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">
										</div>
									</div> -->


								</div>
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Contract Period :</label>
											<input name="ContractPeriod" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Contract Start Date :</label>
											<input name="ContractStartDate" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Contract End Date :</label>
											<input name="ContractEndDate" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">
										</div>
									</div>
								</div>
								<div class="row">

									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>OTTS Office Zone :</label>
											<select name="Office" class="custom-select form-control" required="true" autocomplete="off">
												<option value="">Select Office</option>
												<option value="male">Brooklyn </option>
												<option value="female">Gezina</option>
											</select>
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Department :</label>
											<input name="Department" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Role :</label>
											<input name="Role" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">
										</div>
									</div>
								</div>
								<div class="row">

									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Grade :</label>
											<input name="Grade" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">
										</div>
									</div>
									<!-- <div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Citizenship  :</label>
											<select name="Citizenship " class="custom-select form-control" required="true" autocomplete="off" value="">
												<option value="">Select Citizenship </option>
												<option value="RSA">RSA</option>
												<option value="Other">Other</option>
											</select>
										</div>
									</div> -->

								</div>
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Promotion 1 :</label>
											<input name="Promotion1" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Promotion 2 :</label>
											<input name="Promotion2" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Promotion 3 :</label>
											<input name="Promotion3" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">
										</div>
									</div>
								</div>



								<div class="row">
									<!-- <div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>ID :</label>
											<input name="ID" type="number" class="form-control" required="true" autocomplete="off" value="">
										</div>
									</div> -->

									<div class="col-md-5 col-sm-12">
										<div class="form-group">
											<label>Supervisor :</label>
											<input name="Supervisor" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">

										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<div class="form-group">
											<label style="font-size:16px;"><b></b></label>
											<!-- <div class="modal-footer justify-content-center">
									<button class="btn btn-primary" name="add_staff" id="add_staff" data-toggle="modal">Save&nbsp;Staff</button>
								</div> -->
										</div>
									</div>
								</div>
								<div class="row">

									<div class="col-md-5 col-sm-12">
										<div class="form-group">
											<label>Client Base :</label>
											<input name="ClientBase" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">

										</div>
									</div>

									<div class="col-md-5 col-sm-12">
										<div class="form-group">
											<label>External Supervisor :</label>
											<input name="ExternalSupervisor" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">

										</div>
									</div>

									<!-- <div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label style="font-size:16px;"><b></b></label>
											<div class="modal-footer justify-content-center">
												<button class="btn btn-primary" name="add_staff" id="add_staff" data-toggle="modal">Save&nbsp;Staff</button>
											</div>
										</div>
									</div> -->
								</div>
								<div class="row">

									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Contact Details <br> E :</label>
											<input name="ClientBase" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">

										</div>
									</div>

									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label><br>C :</label>
											<input name="ExternalSupervisor" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">

										</div>
									</div>

									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label><br>W :</label>
											<input name="ExternalSupervisor" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">

										</div>
									</div>

								</div>


										<h2 class="text-blue h4">Project Details</h2>
									</div>
									   <div class="pb-20">
										<table class="data-table table stripe hover nowrap">
											<thead>
												<tr>
													<th class="table-plus datatable-nosort">Project Name</th>
													<th>Description</th>
													<th>Date start</th>
													<th>Project Status</th>
													<th>Date End</th>
													<th>Value</th>
													<th>Client Name</th>
													<th>Role</th>
													<th>Responsibility</th>
													<th class="datatable-nosort">ACTION</th>
												</tr>
											</thead>
											<tbody>
												<tr>



													<td class="table-plus">
														<div class="name-avatar d-flex align-items-center">
															<div class="txt mr-2 flex-shrink-0">
																<b></b>
															</div>
															<div class="txt">
																<div class="weight-600"></div>
															</div>
														</div>
													</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>

													<td>
														<div class="dropdown">
															<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
																<i class="dw dw-more"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
																<a class="dropdown-item" href=""><i class="dw dw-eye"></i> View</a>
																<a class="dropdown-item" href=""><i class="dw dw-delete-3"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									   </div>

							</section>

							<!-- <div class="min-height-200px">
				       <div class="pd-20 card-box mb-30"> -->
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label style="font-size:16px;"><b></b></label>
										<div class="modal-footer justify-content-center">
											<button class="btn btn-primary" name="add_staff" id="add_staff" data-toggle="modal">Save&nbsp;Staff</button>
										</div>
									</div>
								</div>
							</div>
							<!-- </div>

			              </div> -->
					     	</form>

					</div>
				</div>

				

			</div>



			<?php include('assets/includes/footer.php'); ?>
		</div>
	</div>
	<!-- js -->
	<?php include('assets/includes/scripts.php') ?>
</body>

</html>