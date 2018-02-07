$(function () {

	// Hide all the error elemnts
	$('#full_name_error').hide();
	$('#username_error').hide();
	$('#password_error').hide();
	$('#email_error').hide();
	$('#address_error').hide();
	$('#phone_error').hide();


	// set error variable to false
	var error_full_name = false;
	var error_username = false;
	var error_password = false;
	var error_email = false;
	var error_address = false;
	var error_phone = false;


	// On Focusout Check the user input
	$("#full_name").focusout(function() {
		check_full_name();
	});

	$("#username").focusout(function() {
		check_username();
	});

	$("#password").focusout(function() {
		check_password();
	});

	$("#phone").focusout(function() {
		check_phone();
	});




	// Validation Functions

	// Full name (validate it to be only letters without numbers)
	function check_full_name(){

		
		var full_name_numbers_length = $("#full_name").val().replace(/[^0-9]/g,"").length;

		if(full_name_numbers_length > 0){
			$("#full_name_error").html("shouldnot have numbers");
			$("#full_name_error").show();
			error_username = true;
		} else {
			$("#full_name_error").hide();
		}

	}

	// Username (validate it to be no spaces in the name.)
	function check_username(){

		var username_length = $("#username").val();

		if(username_length.indexOf(' ') !== -1){
			$("#username_error").html("Username Shouldnot have any spaces");
			$("#username_error").show();
			error_username = true;
		} else {
			$("#username_error").hide();
		}

	}

	// Password (validate it to be not less than 5 letters and must contain numbers, letters, capital letter)
	function check_password(){

		var password_length = $("#password").val().length;
		var password_capital_letters_length = $("#password").val().replace(/[^A-Z]/g, "").length;
		var password_numbers_length = $("#password").val().replace(/[^0-9]/g,"").length;

		if(password_length < 5 || password_capital_letters_length <= 0 || password_numbers_length <= 0){
			$("#password_error").html("At least 5 letters and must contain numbers, letters, capital letter");
			$("#password_error").show();
			error_username = true;
		} else {
			$("#password_error").hide();
		}

	}

	// Email
	function check_email(){

		var username_length = $("#username").val().length;

		if(username_length < 5 || username_length > 20){
			$("#username_error").html("should be between 5-20 chars");
			$("#username_error").show();
			error_username = true;
		} else {
			$("#username_error").hide();
		}

	}

	// Phone (validate it to be not less than 9 numbers and just be numbers.)
	function check_phone(){

		var phone_length = $("#phone").val().length;

		if(isNaN($("#phone").val()) || phone_length < 9){
			$("#phone_error").html("Should be number and at least 9 chars long");
			$("#phone_error").show();
			error_phone = true;
		} else {
			$("#phone_error").hide();
		}

	}


	$("#form").submit(function(){

		error_full_name = false;
		error_username = false;
		error_password = false;
		error_email = false;
		error_address = false;
		error_phone = false;

		check_full_name();
		check_username();
		check_password();
		check_email();
		check_phone();

		if(error_full_name == false && error_username == false && error_password == false && error_email == false && error_address == false && error_phone == false){
			return true;
		} else {
			return false;
		}

	});

});






// var error_full_name = false;
// 	var error_username = false;
// 	var error_password = false;
// 	var error_email = false;
// 	var error_address = true;
// 	var error_phone = false;