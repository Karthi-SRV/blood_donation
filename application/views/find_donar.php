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
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style/style.css">
<div class="container">
    <div class="row">
    	<div class="form-group col-md-12">
    		<div class="form-group col-sm-3">
				<div class="col-md-12 col-sm-9 col-xs-12">
					<select class="form-control" id="country" class="form-control col-md-7 col-xs-12" name="country" required = "required">
					<option value="0">Select Country</option>
					<?php foreach ($country as $key ) {
					?>
					<option value="<?php echo $key['country'] ?>"><?php echo $key['country'] ?></option>
					<?php }?>
					</select>
				</div>
			</div>
			<div class="form-group col-sm-3">
				<div class="col-md-12 col-sm-9 col-xs-12">
					<select class="form-control" id="state" class="form-control col-md-7 col-xs-12" name="state" required = "required">
					<option value="0">Select State</option>
					</select>
				</div>
			</div>
			<div class="form-group col-sm-3">
				<div class="col-md-12 col-sm-9 col-xs-12">
					<select class="form-control" id="district" class="form-control col-md-7 col-xs-12" name="district" required = "required">
					<option value="0">Select District</option>
					</select>
				</div>
			</div>
			<div class="form-group col-sm-3">
				<div class="col-md-12 col-sm-9 col-xs-12">
					<select class="form-control" id="city" class="form-control col-md-7 col-xs-12" name="city" required = "required">
					<option value="0">Select City</option>
					</select>
				</div>
			</div>
    	</div>
    	<div class="col-md-12 streaming-table">
	    	<table id="country-list">
	    		<thead>
	    			<tr class="country-table-head">
		    			<th>Name</th>
		    			<th>Blood Group</th>
		    			<th>Mobile Number</th>
		    			<th>Alternate Number</th>
		    			<th>Email_ID</th>
		    			<th></th>
	    			</tr>
	    		</thead>
	    	</table>
    	</div>
    </div>
</div>
	
<div>
 <?php require_once 'common/footer.php';
?>
</div>