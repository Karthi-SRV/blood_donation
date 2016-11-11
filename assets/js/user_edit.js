$(document).ready(function(){ 
	$("#first_name").focus();
	$('.adduserForm').on('click', '#addUser', function(){
		var action = "../update/"+cloneCount;
		var password = $('.adduserForm').find('#pass1').val();
		var password2 = $('.adduserForm').find('#pass2').val();
		
		if(password) {
			if(password.length <= 3){
				alert("Password must be at least 4 characters long");
			} else if ( password != password2) {
				alert("Password did not match");
			} else if( password == password2 && password.length >= 3 ) {
				$('.adduserForm').attr('action', action);
			}
		} else{
			$('.adduserForm').attr('action', action);
		}
		
	});
	    	
});