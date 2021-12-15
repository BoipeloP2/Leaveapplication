<div class="left-side-bar">
		<div class="brand-logo">
			<a href="<?php echo base_url('Dashboard') ?>">
				<img src="<?= base_url(); ?>//vendors/images/deskapp-logo-svg.png" alt="" class="dark-logo">
				<img src="<?= base_url(); ?>//vendors/images/deskapp-logo-white-svg.png" alt="" class="light-logo">

			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="<?php echo base_url('Dashboard') ?>" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Dashboard</span>
						</a>
						
					</li>
					<li>
						<a href="<?php echo base_url('DepartmentController/department') ?>" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">Department</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url('LeaveTypeController/showLeavetype') ?>" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">Leave Type</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Staff</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url('EmployeeController/NewEmployee') ?>">New Staff</a></li>
							<li><a href="<?php echo base_url('empController/showEmp') ?>">Manage Staff</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">WorkFlow</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url('workflow/workflow') ?>">WorkFlow</a></li>
							<li><a href="<?php echo base_url('workflow') ?>">Manage WorkFlow</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-apartment"></span><span class="mtext"> Leave </span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url('LeaveController/LeaveApplication') ?>">Apply Leave</a></li>
							<li><a href="<?php echo base_url('LeaveController/Leaves') ?>">All Leave</a></li>
							<!-- <li><a href="<?php echo base_url('EmployeeController/ShowEmployees') ?>">Pending Leave</a></li>
							<li><a href="<?php echo base_url('EmployeeController/ShowEmployees') ?>">Approved Leave</a></li>
							<li><a href="<?php echo base_url('EmployeeController/ShowEmployees') ?>">Rejected Leave</a></li> -->
						</ul>
					</li>

					<li>
						<div class="dropdown-divider"></div>
					</li>
					
					<li>
						
					</li>
				</ul>
			</div>
		</div>
	</div>