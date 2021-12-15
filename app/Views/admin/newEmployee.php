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
								<h4>Staff Portal</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active" aria-current="page">Staff Module</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

	 <form method="post" action="<?= base_url('empController/create') ?>">

				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">EMPLOYEE PERSONAL DETAILS</h4>
							<p class="mb-20"></p>
						</div>
					</div>
					<div class="wizard-content">
							<section>
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Employee No :</label>
											<input name="empNo" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Title :</label>
											<input name="title" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">
										</div>
									</div>


								</div>
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>First Name :</label>
											<input name="firstname" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Nick Name :</label>
											<input name="nickname" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Surname :</label>
											<input name="surname" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">
										</div>
									</div>
								</div>
								<div class="row">

									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Gender :</label>
											<select name="gender" id="gender" class="custom-select form-control" required="true" autocomplete="off">
												<option value="">Select Gender</option>
												<option value="male">Male</option>
												<option value="female">Female</option>
											</select>
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Ethics Group :</label>
											<select name="ethicsgroup" id="ethicsgroup" class="custom-select form-control" required="true" autocomplete="off">
												<option value="">Select Ethics</option>
												<option value="Black">Black</option>
												<option value="White">White</option>
												<option value="Colured">Colured</option>
												<option value="Indian">Indian</option>
												<option value="Other">Other</option>

											</select>
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Marital Status :</label>
											<select name="maritalstatus" id="maritalstatus" class="custom-select form-control" required="true" autocomplete="off">
												<option value="">Select Marital Status</option>
												<option value="male">Single</option>
												<option value="female">Married</option>
												<option value="female">Divorced</option>

											</select>
										</div>
									</div>
								</div>
								<div class="row">

									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Disability :</label>
											<select name="disability" id="disability" class="custom-select form-control" required="true" autocomplete="off" value="">
												<option value="">Select Disability</option>
												<option value="No">No</option>
												<option value="Yes">Yes</option>
											</select>
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Citizenship :</label>
											<select name="citizenship" id="citizenship" class="custom-select form-control" required="true" autocomplete="off" value="">
												<option value="">Select Citizenship </option>
												<option value="RSA">RSA</option>
												<option value="Other">Other</option>
											</select>
										</div>
									</div>

								</div>

								<div class="row">
									<div class="col-md-8 col-sm-12">
										<div class="form-group">
											<label>Identity Number :</label>
											<input name="idno" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">

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

									<div class="col-md-8 col-sm-12">
										<div class="form-group">
											<label>Passport :</label>
											<input name="passport" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">

										</div>
									</div>
								</div>
								<div class="row">

									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>SARS TAX NO :</label>
											<input name="sarstaxno" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">

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

							</section>
						<!-- </form> -->
					</div>
				</div>

			</div>

			<!-- Contact details-->

			<div class="min-height-200px">


				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Contact Details</h4>
							<p class="mb-20"></p>
						</div>
					</div>
					<div class="wizard-content">
						<!-- <form method="post" action="<?= base_url() ?>/EmployeeController/create"> -->
							<section>
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Home Cell No :</label>
											<input name="homecellno" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Home Tele :</label>
											<input name="hometellno" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">
										</div>
									</div>


								</div>
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Work Cell No :</label>
											<input name="workcellno" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Work Tele No :</label>
											<input name="worktellno" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">
										</div>
									</div>

								</div><div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label> Personal Email :</label>
											<input name="personalemail" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Work Email :</label>
											<input name="workemail" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">
										</div>
									</div>

								</div>
								<div class="row">




								</div>

								<div class="clearfix">
									<div class="pull-left">
										<h4 class="text-blue h4">Physical Address</h4>
										<p class="mb-20"></p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8 col-sm-12">
										<div class="form-group">
											<label>Street :</label>
											<input name="streetname" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">


										</div>
									</div>



									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<!-- <label>Physical Address :</label>
											<input name="Passport" type="text" class="form-control wizard-required" required="true" autocomplete="off" value=""> -->

										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>City :</label>
											<input name="city" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Province :</label>
											<select name="province" id="province" class="custom-select form-control" required="true" autocomplete="off" value="">
												<option value="">Select Province</option>
												<option value="Gauteng">Gauteng</option>
												<option value="Western Cape">Western Cape</option>
												<option value="Northern Cape">Northern Cape</option>
												<option value="Eastern Cape">Eastern Cape</option>
												<option value="KwaZulu-Natal">KwaZulu-Natal</option>
												<option value="Free State">Free State</option>
												<option value="North West">North West</option>
												<option value="Mpumalanga">Mpumalanga</option>
												<option value="Limpopo">Limpopo</option>


											</select>
										</div>
									</div>

								</div>

								<div class="row">

									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Postal Code :</label>
											<input name="postalcode" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">

										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Country :</label>
											<input name="country" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">

										</div>
									</div>


								</div>
								<div class="row">

									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<!-- <label>Physical Address :</label>
											<input name="Passport" type="text" class="form-control wizard-required" required="true" autocomplete="off" value=""> -->

										</div>
									</div>

									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<!-- <label>SARS TAX NO :</label>
											<input name="Passport" type="text" class="form-control wizard-required" required="true" autocomplete="off" value=""> -->

										</div>
									</div>

									
								</div>
								<div class="clearfix">
									<div class="pull-left">
										<h4 class="text-blue h4">Postal Address</h4>
										<p class="mb-20"></p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8 col-sm-12">
										<div class="form-group">
											<label>Street :</label>
											<input name="pstreetname" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">


										</div>
									</div>



									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<!-- <label>Physical Address :</label>
											<input name="Passport" type="text" class="form-control wizard-required" required="true" autocomplete="off" value=""> -->

										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>City :</label>
											<input name="pcity" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Province :</label>
											<select name="pprovince" id="pprovince" class="custom-select form-control" required="true" autocomplete="off" value="">
												<option value="">Select Province</option>
												<option value="Gauteng">Gauteng</option>
												<option value="Western Cape">Western Cape</option>
												<option value="Northern Cape">Northern Cape</option>
												<option value="Eastern Cape">Eastern Cape</option>
												<option value="KwaZulu-Natal">KwaZulu-Natal</option>
												<option value="Free State">Free State</option>
												<option value="North West">North West</option>
												<option value="Mpumalanga">Mpumalanga</option>
												<option value="Limpopo">Limpopo</option>


											</select>
										</div>
									</div>

								</div>

								<div class="row">

									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Postal Code :</label>
											<input name="ppostalcode" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">

										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Country :</label>
											<input name="pcountry" type="text" class="form-control wizard-required" required="true" autocomplete="off" value="">

										</div>
									</div>


								</div>
								<div class="row">

									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<!-- <label>Physical Address :</label>
											<input name="Passport" type="text" class="form-control wizard-required" required="true" autocomplete="off" value=""> -->

										</div>
									</div>

									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<!-- <label>SARS TAX NO :</label>
											<input name="Passport" type="text" class="form-control wizard-required" required="true" autocomplete="off" value=""> -->

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

							</section>
						<!-- </form> -->
					</div>
				</div>

			</div>

			<!--End  Contact details-->

			<!-- Emergency No -->

			



			             <div class="min-height-200px">
			                     <div class="pd-20 card-box mb-30">

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
								 </div>

							</section>
					</div>
				</div>

			</div>
	</form>

			<!--End  Emergency No -->

			<?php include('assets/includes/footer.php'); ?>
		</div>
	</div>
	<!-- js -->
	<?php include('assets/includes/scripts.php') ?>
</body>

</html>