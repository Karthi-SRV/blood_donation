<?php
require_once 'common/header.php';
?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<?php
require_once 'common/sidebar.php';
require_once 'common/nav.php';
?>
<style type="text/css">
	.form-group{
		padding: 0px;
	}
	legend.scheduler-border {
	    width:inherit; /* Or auto */
	    padding:0 10px; /* To give a bit of padding on the left and right */
	    border-bottom:none;
	}
	fieldset.scheduler-border {
    	border: 1px groove #ddd !important;
	    padding: 0 1.4em 1.4em 1.4em !important;
	    margin: 0 0 1.5em 0 !important;
	    -webkit-box-shadow:  0px 0px 0px 0px #000;
	            box-shadow:  0px 0px 0px 0px #000;
	}
</style>
	<!-- Main Container -->
	<div class="container">
	    <div class="row">
		    <div class="col-md-12" style="padding:10px;text-align: center;">
		    	<div class="col-md-6">
		    		<div class="services-group wow animated fadeInLeft" data-wow-offset="40">
						<p class="services-icon"><span class="fa fa-question fa-5x"></span></p>
						<h4 class="services-title">Blood Donar</h4>
						<p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
						<p class="services-more"><a id ="registrationLink" style="cursor: pointer;">Register Here</a></p>
					</div>
		    	</div>
		    	<div class="col-lg-6">
					<div class="services-group wow animated fadeInRight" data-wow-offset="40">
							<p class="services-icon"><i class="fa fa-search fa-5x"></i></p>
							<h4 class="services-title">Find a Donar</h4>
							<p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
							<p class="services-more"><a href="#">Find Out Your Donar</a></p>
					</div>        
				</div>
		    </div>
		    </br>
		    </br>
		    <div class="col-md-12" style="padding:10px;text-align: center;">
		    	<div class="col-md-6" >
		    		<div class="services-group wow animated fadeInLeft" data-wow-offset="40">
						<p class="services-icon"><span class="fa fa-envelope fa-5x"></span></p>
						<h4 class="services-title">Post your Blood Request</h4>
						<p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
						<p class="services-more"><a href="#">Request Here</a></p>
					</div>
		    	</div>
		    	<div class="col-lg-6">
					<div class="services-group wow animated fadeInRight" data-wow-offset="40">
							<p class="services-icon"><i class="fa fa-thumbs-o-up fa-5x"></i></p>
							<h4 class="services-title">Find a Service Organisation</h4>
							<p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
							<p class="services-more"><a href="#">Find Out Your Organisation</a></p>
					</div>        
				</div>
		    </div>
		    <div class="col-md-11" id = "registration" style="display:none">
		    	<div class="col-md-1"></div>
		    	<div class="col-md-10">
		    	<form class="form-horizontal form-label-left adduserForm" data-parsley-validate class="form-horizontal form-label-left"  method="post">
			    	<fieldset class="scheduler-border">
			    		<legend class="scheduler-border">Donor Registration:</legend>
			    		<div class="col-sm-12">
					     	<div class="form-group col-md-6">
								<label class="control-label col-sm-6">First Name</label>
								<div class="col-sm-6">
									<input type="text" class="form-control first_name" name="first_name" id ="first_name" placeholder="First Name" required="required">
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="control-label col-md-6 col-sm-3 col-xs-12">Last Name</label>
								<div class="col-md-6 col-sm-9 col-xs-12">
									<input type="text" class="form-control last_name" name = "last_name" id = "last_name" placeholder="Last Name" required="required">
								</div>
							</div>
						</div>

			    		<div class="col-sm-12">
							
							<div class="form-group col-md-6">
								<label class="col-md-6 col-sm-3 col-xs-12 control-label">Gender</label>
								<div class="col-md-6 col-sm-9 col-xs-12">
									<div class="radio" style="float: left;">
										<label>
											<input type="radio" class="flat gender" value ="male" checked name="gender"> Male
										</label>
									</div>
									<div class="radio" style="float: left; padding-left: 18%;">
										<label>
											<input type="radio" class="flat gender" value ="female" name="gender"> Female
										</label>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-12" style="margin-bottom:15px;">
							<div class="form-group col-md-6">
								<label class="control-label col-md-6 col-sm-3 col-xs-12">Date of Birth</label>
								<div class="col-md-6 col-sm-9 col-xs-12">
									<input type="text" class="form-control last_name" name = "last_name" id = "last_name" placeholder="Date of Birth" required="required">
								</div>
							</div>
							
							<div class="form-group col-md-6">
								<label class="control-label col-md-6 col-sm-3 col-xs-12">Blood Group</label>
								<div class="col-md-6 col-sm-9 col-xs-12">
									 <select class="form-control" id="subject-name" class="form-control col-md-7 col-xs-12" name="subject-name">
									 <option value="0">Select Blood Group</option>
									 </select>
								</div>
							</div>
						</div>


						<hr size="2" style="border:1px solid;">
						
						<div class="form-group">
							<label class="control-label col-md-3">Permanent Address</label>
							<div class="col-md-9">
								<textarea  class="form-control col-md-6" rows="4" id="comment" style="max-width:88%"></textarea>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="form-group col-sm-6">
								<label class="control-label col-md-6 col-sm-3 col-xs-12">Country</label>
								<div class="col-md-6 col-sm-9 col-xs-12">
									<select class="form-control" id="subject-name" class="form-control col-md-7 col-xs-12" name="subject-name">
									<option value="0">Select Country</option>
									</select>
								</div>
							</div>
							<div class="form-group col-sm-6">
								<label class="control-label col-md-6 col-sm-3 col-xs-12">State</label>
								<div class="col-md-6 col-sm-9 col-xs-12">
									<select class="form-control" id="subject-name" class="form-control col-md-7 col-xs-12" name="subject-name">
									<option value="0">Select State</option>
									</select>
								</div>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="form-group col-sm-6">
								<label class="control-label col-md-6 col-sm-3 col-xs-12">District</label>
								<div class="col-md-6 col-sm-9 col-xs-12">
									<select class="form-control" id="subject-name" class="form-control col-md-7 col-xs-12" name="subject-name">
									<option value="0">Select District</option>
									</select>
								</div>
							</div>
							<div class="form-group col-sm-6">
								<label class="control-label col-md-6 col-sm-3 col-xs-12">City</label>
								<div class="col-md-6 col-sm-9 col-xs-12">
									<select class="form-control" id="subject-name" class="form-control col-md-7 col-xs-12" name="subject-name">
									<option value="0">Select City</option>
									</select>
								</div>
							</div>
						</div>
						
						<div class="col-sm-12" style="margin-bottom:15px;">
							<div class="form-group col-md-6">
								<label class="control-label col-md-6 col-sm-3 col-xs-12">Mobile No</label>
								<div class="col-md-6 col-sm-9 col-xs-12">
									<input type="text" class="form-control last_name" name = "last_name" id = "last_name" placeholder="Mobile Number" required="required">
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="control-label col-md-6 col-sm-3 col-xs-12">Alternate Mobile No</label>
								<div class="col-md-6 col-sm-9 col-xs-12">
									<input type="text" class="form-control last_name" name = "last_name" id = "last_name" placeholder="Alternate Number">
								</div>
							</div>
						</div>
						<hr size="2" style="border:1px solid;">

						<div class="col-md-12">
							<div class="form-group col-md-6">
								<label class="control-label col-md-6 col-sm-3 col-xs-12">Email</label>
								<div class="col-md-6 col-sm-9 col-xs-12">
									<input type="email" class="form-control email" name="email" id="email" placeholder="Email" required>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="control-label col-md-6 col-sm-3 col-xs-12">User Name</label>
								<div class="col-md-6 col-sm-9 col-xs-12">
									<input type="text" class="form-control first_name" id="pass1" name="pass1" placeholder="UserName" required>
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group col-md-6">
									<label class="control-label col-md-6 col-sm-3 col-xs-12">Password</label>
									<div class="col-md-6 col-sm-9 col-xs-12">
										<input type="password" class="form-control first_name" id="pass1" name="pass1" placeholder="Password" required>
									</div>
								</div>
							<div class="form-group col-md-6">
								<label class="control-label col-md-6 col-sm-3 col-xs-12" style="padding: 0px;">Confirm Password</label>
								<div class="col-md-6 col-sm-9 col-xs-12">
									<input type="password" class="form-control last_name" id="pass2" name = "pass2" placeholder="Password" required="required">
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-top:10px">
							<div class="col-md-12 col-sm-9 col-xs-12 col-md-offset-3">
								<button type="button" class="btn btn-primary col-md-2" id="cancel" style="padding: 5px;margin: 25PX;">Cancel</button>
								<button type="submit" class="btn btn-success addUser col-md-2" id="addUser" style="padding: 5px;margin: 25PX;">Submit</button>
							</div>
						</div>
					</fieldset>
				</form>
				</div>
		    	<div class="col-md-1"></div>
		    </div>
        </div>
    </div>
<div>
 <?php require_once 'common/footer.php';
?>
</div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){ 

	$('#registrationLink').on('click', function(){
		$('#registration').fadeIn().delay(5000);
	});
	$('#cancel').on('click', function(){
		$('#registration').fadeOut().delay(500);
	});
	    	
});
</script>