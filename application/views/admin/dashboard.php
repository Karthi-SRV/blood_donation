<?php
require_once 'common/header.php';
?>
<body class="nav-md">
  <div class="container body">

	<div class="main_container">
	  <?php
require_once 'common/sidebar.php';
require_once 'common/nav.php';
?>
	  <!-- page content -->
	  <div class="right_col" role="main">
		<div class="">
		  <div class="page-title">
			<div class="title_left">
			  <h3>Dashboard <small>Welcome</small></h3>
			</div>
		  </div>
		  <div class="clearfix"></div>
		  <div class="row">
		  <div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel" style="height:600px;">
				<div class="x_content">
				  <div class="row">
				  <?php
					if (count($users)) {
						foreach ($users as $key => $value) {
							?>
						  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">

						  <div class="tile-stats">
							<div class="icon"><i class="fa fa-users"></i>
						  </div>
						  <div class="count"><?php echo $value['users']; ?></div>

							<h3>Users</h3>

						  </div>


						</div>
						  <?php
					}
					} else {
						?>
						  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">

						  <div class="tile-stats">
							<div class="icon"><i class="fa fa-users"></i>
						  </div>
						  <div class="count">0</div>

							<h3>Users</h3>

						  </div>


						</div>
						  <?php
					}

					if (count($donar)) {
						?>
						  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">

						  <div class="tile-stats">
							<div class="icon"><i class="fa fa-check-circle"></i>
						  </div>
						  <div class="count"><?php echo $donar[0]['total']; ?></div>

							<h3>Donars</h3>

						  </div>


						</div>
						  <?php
							} else {
								?>
						  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">

						  <div class="tile-stats">
							<div class="icon"><i class="fa fa-check-circle"></i>
						  </div>
						  <div class="count">0</div>
							<h3>Donar</h3>
						  </div>
						</div>
						  <?php
						}

						if (count($blood_request)) {
							?>
						  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">

						  <div class="tile-stats">
							<div class="icon"><i class="fa fa-book"></i>
						  </div>
						  <div class="count"><?php echo $blood_request[0]['total']; ?></div>

							<h3>Blood Request</h3>

						  </div>


						</div>
						  <?php
						} else {
							?>
						  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">

						  <div class="tile-stats">
							<div class="icon"><i class="fa fa-book"></i>
						  </div>
						  <div class="count">0</div>
							<h3>Blood Request</h3>
						  </div>
						</div>
						  <?php
						}
						?>
				</div>
				<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="x_panel tile fixed_height_320">
					  	<div class="x_title">
						<h2>Active Donar</h2>

						<div class="clearfix"></div>
					  	</div>
					  	<div class="x_content">
							<h4>Active Donar</h4>
							<div class="col-md-12 col-sm-12 col-xs-6">
							<?php
							if (count($active_donar)) {
							foreach ($active_donar as $key => $value) {
								?>
								<div>
								<p><?php echo $value['total']; ?></p>
									<div class="">
							  			<div class="progress progress_sm" style="width: 100%;">
											<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo (((int) $value['total'] / (int) $donar[0]['total']) * 100); ?>"></div>
							  			</div>
									</div>
						  		</div>
						  <?php
							}
							}
							?>
					  		</div>
					 	</div>
					</div>
			  	</div>

			  	
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="x_panel tile fixed_height_320">
					  	<div class="x_title">
						<h2>Active Blood Request</h2>

						<div class="clearfix"></div>
					  	</div>
					  	<div class="x_content">
							<h4>Active Blood Request</h4>
							<div class="col-md-12 col-sm-12 col-xs-6">
							<?php
							if (count($active_request)) {
							foreach ($active_request as $key => $value) {
								?>
								<div>
								<p><?php echo $value['total']; ?></p>
									<div class="">
							  			<div class="progress progress_sm" style="width: 100%;">
											<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo (((int) $value['total'] / (int) $blood_request[0]['total']) * 100); ?>"></div>
							  			</div>
									</div>
						  		</div>
						  <?php
							}
							}
							?>
					  		</div>
					 	</div>
					</div>
			  	</div>
				</div>

			</div>
		  </div>
		</div>
	  </div>
	  </div>
	  <!-- /page content -->
	</div>
  </div>
  <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- bootstrap progress js -->
  <script src="<?php echo base_url(); ?>assets/bootstrap/js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
  <!-- pace -->
  <script src="<?php echo base_url(); ?>assets/js/pace/pace.min.js"></script>
</body>
</html>
