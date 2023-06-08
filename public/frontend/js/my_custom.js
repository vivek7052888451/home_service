	$(document).ready(function(){
	$('#Customer').click(function(){
		$('#dynamic_field').hide();
		$('#user_name i').removeClass('fa fa-user').addClass('fa fa-phone');
		// $('#user_name ::placeholder').css('color','1px solid green');
		var login_url=baseUrl +'/customer/login';
		var signup_url=baseUrl +'/customer/create';
	
		 $('#login_form').attr('action',login_url );
		 $('#signup_form').attr('action',signup_url );
 

	})
	$('#Associate').click(function(){
		$('#dynamic_field').show();
		$('#user_name i').removeClass('fa fa-phone').addClass('fa fa-user');

		var login_url=baseUrl +'/associate/login';
		var signup_url=baseUrl +'/associate/create';

		 $('#login_form').attr('action',login_url );
		 $('#signup_form').attr('action',signup_url );
	})
})