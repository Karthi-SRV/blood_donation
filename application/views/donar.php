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
							<p class="services-more"><a href="<?php echo base_url();?>index.php/finddonar ">Find Out Your Donar</a></p>
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
						<p class="services-more"><a id="blood_request">Request Here</a></p>
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
		    	<form class="form-horizontal form-label-left donarForm" data-parsley-validate class="form-horizontal form-label-left"  method="post">
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
									<input type="text" class="form-control last_name" name = "DOB" id = "last_name" placeholder="Date of Birth" required="required">
								</div>
							</div>
							
							<div class="form-group col-md-6">
								<label class="control-label col-md-6 col-sm-3 col-xs-12">Blood Group</label>
								<div class="col-md-6 col-sm-9 col-xs-12">
									<select class="form-control" id="subject-name" class="form-control col-md-7 col-xs-12" name="blood_group" required="required">
									 	<option value="0">Select Blood Group</option>
									 	<option value="A+">A+</option>
										<option value="A-">A-</option>
										<option value="A1+">A1+</option>
										<option value="A1-">A1-</option>
										<option value="A1B+">A1B+</option>
										<option value="A1B-">A1B-</option>
										<option value="A2+">A2+</option>
										<option value="A2-">A2-</option>
										<option value="A2B+">A2B+</option>
										<option value="A2B-">A2B-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
										<option value="B+">B+</option>
										<option value="B-">B-</option>
										<option value="Bombay Blood Group">Bombay Blood Group</option>
										<option value="O+">O+</option>
										<option value="O-">O-</option>
									</select>
								</div>
							</div>
						</div>


						<hr size="2" style="border:1px solid;">
						
						<div class="form-group">
							<label class="control-label col-md-3">Permanent Address</label>
							<div class="col-md-9">
								<textarea  class="form-control col-md-6" rows="4" id="comment" name ="Address"style="max-width:88%" required = "required"></textarea>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="form-group col-sm-6">
								<label class="control-label col-md-6 col-sm-3 col-xs-12">Country</label>
								<div class="col-md-6 col-sm-9 col-xs-12">
									<select class="form-control" id="country" class="form-control col-md-7 col-xs-12" name="country" required = "required">
									<option value="0">Select Country</option>
									<?php foreach ($country as $key ) {
									?>
									<option value="<?php echo $key['country'] ?>"><?php echo $key['country'] ?></option>
									<?php }?>
									</select>
								</div>
							</div>
							<div class="form-group col-sm-6">
								<label class="control-label col-md-6 col-sm-3 col-xs-12">State</label>
								<div class="col-md-6 col-sm-9 col-xs-12">
									<select class="form-control" id="state" class="form-control col-md-7 col-xs-12" name="state" required = "required">
									<option value="0">Select State</option>
									</select>
								</div>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="form-group col-sm-6">
								<label class="control-label col-md-6 col-sm-3 col-xs-12">District</label>
								<div class="col-md-6 col-sm-9 col-xs-12">
									<select class="form-control" id="district" class="form-control col-md-7 col-xs-12" name="district" required = "required">
									<option value="0">Select District</option>
									</select>
								</div>
							</div>
							<div class="form-group col-sm-6">
								<label class="control-label col-md-6 col-sm-3 col-xs-12">City</label>
								<div class="col-md-6 col-sm-9 col-xs-12">
									<select class="form-control" id="city" class="form-control col-md-7 col-xs-12" name="city" required = "required">
									<option value="0">Select City</option>
									</select>
								</div>
							</div>
						</div>
						
						<div class="col-sm-12" style="margin-bottom:15px;">
							<div class="form-group col-md-6">
								<label class="control-label col-md-6 col-sm-3 col-xs-12">Mobile No</label>
								<div class="col-md-6 col-sm-9 col-xs-12">
									<input type="number" class="form-control last_name" name = "mobile_no" id = "mobile_no" placeholder="Mobile Number" required="required">
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="control-label col-md-6 col-sm-3 col-xs-12">Alternate Mobile No</label>
								<div class="col-md-6 col-sm-9 col-xs-12">
									<input type="number" class="form-control last_name" name = "Alt_No" id = "last_name" placeholder="Alternate Number">
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
									<input type="text" class="form-control first_name" id="username" name="username" placeholder="UserName" required>
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
								<button type="button" class="btn btn-success addUser col-md-2" id="addUser" style="padding: 5px;margin: 25PX;">Submit</button>
							</div>
						</div>
					</fieldset>
				</form>
				</div>
		    	<div class="col-md-1"></div>
		    </div>
		    <div class="col-md-11" id = "request" style="display:none">
		    	<div class="col-md-1"></div>
		    	<div class="col-md-10">
		    	<form class="form-horizontal form-label-left requestForm" data-parsley-validate class="form-horizontal form-label-left"  method="post">
			    	<fieldset class="scheduler-border">
			    		<legend class="scheduler-border">BLood Request:</legend>
			    		Dear,
						<p>Please fill the following information to post your blood request. We will inform our donors and we hope the needy people recover soon.</p>
		    			<br>
		    			<h3 style="text-align: center;color: red;">POST BLOOD REQUEST FORM</h3>
		    			<br>
		    			<p style="text-align:center">If your are already posted your blood request and want to update your blood request then please enter request code and press submit</p>
		    			<br>
		    			<div class="form-group col-sm-12">
			    			<label class="control-label col-sm-5">Enter Your Blood Request Code</label>
								<div class="col-sm-4">
									<input type="number" class="form-control first_name" name="blood_request_id" id ="blood_request_id" placeholder="Request Code" min = 0 required="required">
								</div>
							<div class="form-group col-md-3">
								<button type="button" class="btn btn-success " id="search_blood" style="margin-left: 25PX;">Submit</button>
							</div>
							<span>
								<p id="request_id" style="display:none; text-align:center;color:red;"></p>
							</span>	
		    			</div>
			    		<div id="hr" style="display:none">
			    			<hr>
			    			<br>
			    		</div>
		    			<br>
						<hr>
						<hr size="2" style="border:1px solid;">

			    		<!-- <div class="col-sm-12"> -->
					     	<div class="form-group col-md-12">
								<label class="control-label col-sm-5">Patient Full Name</label>
								<div class="col-sm-4">
									<input type="text" class="form-control first_name" name="patient_name" id ="patient_name" placeholder="Patient Name" required="required">
								</div>
							</div>
							<div class="form-group col-md-12">
								<label class="control-label col-md-5 col-sm-3 col-xs-12">Blood Group</label>
								<div class="col-md-4 col-sm-9 col-xs-12">
									<select class="form-control" class="form-control col-md-7 col-xs-12" name="blood_group" id='post_blood_group' required="required">
									 	<option value="0">Select Blood Group</option>
									 	<option value="A+">A+</option>
										<option value="A-">A-</option>
										<option value="A1+">A1+</option>
										<option value="A1-">A1-</option>
										<option value="A1B+">A1B+</option>
										<option value="A1B-">A1B-</option>
										<option value="A2+">A2+</option>
										<option value="A2-">A2-</option>
										<option value="A2B+">A2B+</option>
										<option value="A2B-">A2B-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
										<option value="B+">B+</option>
										<option value="B-">B-</option>
										<option value="Bombay Blood Group">Bombay Blood Group</option>
										<option value="O+">O+</option>
										<option value="O-">O-</option>
									</select>
								</div>
							</div>
							<div class="form-group col-md-12">
								<label class="control-label col-md-5 col-sm-3 col-xs-12">Patient Age</label>
								<div class="col-md-4 col-sm-9 col-xs-12">
									<input type="number" class="form-control last_name" name = "patient_age" id = "patient_age" placeholder="Patient Age" min = 0 required="required">
								</div>
							</div>
						<!-- </div> -->

						<div class="form-group col-md-12">
							<label class="control-label col-md-5 col-sm-3 col-xs-12">When you need blood?</label>
							<div class="col-md-4 col-sm-9 col-xs-12">
								<input type="text" class="form-control last_name" name = "blood_needed_date" id = "blood_needed_date" placeholder="Date" required="required">
							</div>							
						</div>

						<div class="form-group col-md-12">
							<label class="control-label col-md-5 col-sm-3 col-xs-12">How many units you need ?</label>
							<div class="col-md-4 col-sm-9 col-xs-12">
								<input type="number" class="form-control last_name" name = "units" id = "units" placeholder="Units" min=0 required="required">
							</div>
						</div>
						<div class="form-group col-md-12">
							<label class="control-label col-md-5 col-sm-3 col-xs-12">Mobile Number</label>
							<div class="col-md-4 col-sm-9 col-xs-12">
								<input type="number" class="form-control last_name" name = "mobile_no" id = "post_mobile_no" placeholder="Mobile Number" min=0 required="required">
							</div>
						</div>
						<div class="form-group col-md-12">
							<label class="control-label col-md-5 col-sm-3 col-xs-12">Alternate Number</label>
							<div class="col-md-4 col-sm-9 col-xs-12">
								<input type="number" class="form-control last_name" name = "Alt_mobile_no" id = "post_alt_mobile_no" placeholder="Mobile Number" min=0 required="required">
							</div>
						</div>
						<div class="form-group col-md-12">
							<label class="control-label col-md-5 col-sm-3 col-xs-12">Email</label>
							<div class="col-md-4 col-sm-9 col-xs-12">
								<input type="email" class="form-control email" name="email" id="post_email" placeholder="Email" required>
							</div>
						</div>
						<div class="form-group col-md-12">
							<label class="control-label col-md-5 col-sm-3 col-xs-12">Hospital Name</label>
							<div class="col-md-4 col-sm-9 col-xs-12">
								<input type="text" class="form-control last_name" name = "hospital_name" id = "hospital_name" placeholder="Hospital Name" required="required">
							</div>
						</div>
						<div class="form-group col-md-12">
							<label class="control-label col-md-5 col-sm-3 col-xs-12">Location</label>
							<div class="col-md-4 col-sm-9 col-xs-12">
								<input type="text" class="form-control last_name" name = "Location" id = "location" placeholder="Location"  required="required">
							</div>
						</div>
						<!-- <hr size="2" style="border:1px solid;"> -->
						
						<div class="form-group col-md-12">
							<label class="control-label col-md-5">Patient Address</label>
							<div class="col-md-4">
								<textarea  class="form-control col-md-6" rows="3"  name ="patient_address" id='post_patient_address' placeholder="Patient Address" required = "required"></textarea>
							</div>
						</div>
						<div class="form-group col-md-12">
							<label class="control-label col-md-5">Purpose</label>
							<div class="col-md-4">
								<textarea  class="form-control col-md-6" rows="3"  name ="purpose" id='post_purpose' placeholder="Purpose" required = "required"></textarea>
							</div>
						</div>
						<div class="form-group" style="margin-top:10px">
							<div class="col-md-12 col-sm-9 col-xs-12 col-md-offset-3">
								<button type="button" class="btn btn-primary col-md-2" id="request_cancel" style="padding: 5px;margin: 25PX;">Cancel</button>
								<button type="button" class="btn btn-success addUser col-md-2" id="add_blood_request" style="padding: 5px;margin: 25PX;">Submit</button>
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
<script src="<?php echo base_url();?>assets/js/lodash.js"></script>
<script type="text/javascript">
$(document).ready(function(){ 
	var SITE = "<?php echo site_url();?>"
	$('#registrationLink').on('click', function(){
		$('#request').fadeOut().delay(500);
		$('#registration').fadeIn().delay(5000);
	});

	$('#cancel').on('click', function(){
		$('#registration').fadeOut().delay(500);
	});

	$('#blood_request').on('click', function(){
		$('#registration').fadeOut().delay(500);
		$('#request').fadeIn().delay(5000);
	});

	$('#request_cancel').on('click', function(){
		$('#request').fadeOut().delay(500);
	});

	$('#country').on('click', function(){
		$.ajax({
			url: SITE +'index.php/donar/getState/'+$(this).val(),
			type: 'post',
			success: function(response) {
				var response = JSON.parse(response);
				$("#state").empty();
				var option ='';
				option += '<option value = 0>Select State</option>';		

				if(response.success == 'true') {
					$.each(response.data, function(state, val) {
						option += '<option value='+val['state']+'>'+val['state']+'</option>';
		        		$('#state').append(option);
		        	});
				} else {
					alert(response.message);
		        	$('#state').append(option);
				}
	        }
		});	
	});

	$('#state').on('click', function(){
		$.ajax({
			url: SITE +'index.php/donar/getDistrict/'+$(this).val(),
			type: 'post',
			success: function(response) {
				var response = JSON.parse(response);
				$("#district").empty();
				var option ='';
				option += '<option value = 0>Select District</option>';		
				if(response.success == 'true') {
					$.each(response.data, function(state, val) {
						option += '<option value='+val['district']+'>'+val['district']+'</option>';
		        	});
	        		$('#district').append(option);
				} else {
					alert(response.message);
		        	$('#district').append(option);
				}
	        }
		});	
	});

	$('#district').on('click', function(){
		$.ajax({
			url: SITE +'index.php/donar/getCity/'+$(this).val(),
			type: 'post',
			success: function(response) {
				var response = JSON.parse(response);
				$("#city").empty();
				var option ='';
				option += '<option value = 0>Select City</option>';		
				if(response.success == 'true') {
					$.each(response.data, function(state, val) {
						option += '<option value='+val['city']+'>'+val['city']+'</option>';
		        	});
	        		$('#city').append(option);
				} else {
					alert(response.message);
		        	$('#city').append(option);
				}
	        }
		});	
	});

	$('#addUser').on('click', function(){
		$.ajax({
			url: SITE +'index.php/donar/save',
			data: $('.donarForm').serialize(),
			type: 'post',
			success: function(response) {
				var response = JSON.parse(response);
				if(response.success == 'true') {
					alert('Register SuccessFully');
					window.location.reload(true);
				} else {
					alert(response.message);
				}
	        }
		});
	});

	$('#add_blood_request').on('click', function(){
		$.ajax({
			url: SITE +'index.php/donar/bloodRequest',
			data: $('.requestForm').serialize(),
			type: 'post',
			success: function(response) {
				var response = JSON.parse(response);
				if(response.success == 'true') {
					$('input[type="text"],input[type="number"],input[type="email"], textarea').val('');
					$('select').val(0);
					if(response.id){
						alert('Register SuccessFully');
						var id = response.id;
						var data =''
						data += "Thanks for posting your request with us.<br>Please note the code : "+id+" for future use";
						$('#request_id').html(data);
						$('#request_id').show();
						$('#hr').show();
					} else {
						alert('Data Updated SuccessFully')
					}
				} else {
					alert(response.message);
				}
	        }
		});
	});

	$('#search_blood').on('click', function(){
		bloodrequest();
	});

	$('#blood_request_id').on('change', function(){
		bloodrequest();
	});

	function bloodrequest() {
		var id = $('#blood_request_id').val();
		$.ajax({
			url: SITE +'index.php/donar/search_blood/'+id,
			data: $('.requestForm').serialize(),
			type: 'post',
			success: function(response) {
				var response = JSON.parse(response);
				if(response.success == 'true') {
					if(response.data.length) {
						var data = response.data;
						$('#patient_name').val(data[0].patient_name);
						$('#post_blood_group').val(data[0].blood_group);
						$('#patient_age').val(data[0].patient_age);
						$('#blood_needed_date').val(data[0].blood_needed_date);
						$('#post_email').val(data[0].email);
						$('#hospital_name').val(data[0].hospital_name);
						$('#location').val(data[0].location);
						$('#post_mobile_no').val(data[0].mobile_no);
						$('#post_alt_mobile_no').val(data[0].alt_mobile_no);
						$('#post_patient_address').val(data[0].patient_address);
						$('#post_purpose').val(data[0].purpose);
						$('#units').val(data[0].units);
					} else {
						alert('Please Enter Valid Blood Request Id')
					}
				} else {
					alert(response.message);
					$('input[type="text"],input[type="number"],input[type="email"], textarea').val('');
					$('select').val(0);
				}
	        }
		});
	}
});
</script>