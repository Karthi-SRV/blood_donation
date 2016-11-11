$(document).ready(function(){ 
	$("#first_name").focus();
	$('.adduserForm').on('click', '#addUser', function(){
		var first_name = $('.adduserForm').find('#first_name').val();
		var last_name = $('.adduserForm').find('#last_name').val();
		var password = $('.adduserForm').find('#pass1').val();
		var password2 = $('.adduserForm').find('#pass2').val();
		var email = $('.adduserForm').find('#email').val();
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if(!first_name) {
			$("#first_name").focus();
		} else if(!last_name) {
			$("#last_name").focus(); 
		} else if(email.length == 0) {
			$("#email").focus();
		} else if(!email.match(mailformat)) {
		  	alert("Enter an invalid email address!"); 
		  	$("#email").focus();
		} else if(password.length == 0) {
			$("#pass1").focus();
		} else if(password.length <= 3) {
			alert("Password must be at least 4 characters long");
			$("#pass1").focus();
		} if(password2.length == 0) {
			$("#pass2").focus();
		} else if ( password != password2) {
			alert("Password did not match");
			$("#pass2").focus();
		} else if( password == password2 && password.length >= 3 ) {
			$('.adduserForm').attr('action', 'save');
		}
	});

	$('#pass1').on('change', function(){
		var password = $('.adduserForm').find('#pass1').val();
		if(password.length == 0) {
			$("#pass1").focus();
		} else if(password.length <= 3) {
			alert("Password must be at least 4 characters long");
			$("#pass1").focus();
		}
	});
	
	$('#email').on('change', function(){
		var password = $('.adduserForm').find('#email').val();
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if(email.length == 0) {
			$("#email").focus();
		}else if(!password.match(mailformat)) {
		  alert("Entered an invalid email address!"); 
		  $("#email").focus(); 
		}
	});

	    	
});