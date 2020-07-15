$(document).ready(function () {

	//Get Restaurant register
	$("#sign-up").click(function (event) {

		 event.preventDefault();
		 $.ajax({
		 	url: "php/restaurantRegister.php",
			method: "POST",
			data: $("form").serialize(),
			success: function (data) {
				//$("#signupmsg").html(data);
				alert(data)
			}
		 });
		 $('.form-sign')[0].reset();
		
	})

	//Get customer register
	$("#c_signup").click(function (event) {
		event.preventDefault();
		$.ajax({
			url: "php/customerRegister.php",
			method: "POST",
			data: $("form").serialize(),
			success: function (data) {
				//$("#signupmsg").html(data);
				alert(data)
			}
		});
		$('.form-signin')[0].reset();
	})

	// customer login
	$("#login").click(function (event) {
		event.preventDefault();
		var email = $("#c_inputEmail").val();
		var pass = $("#c_inputPassword").val();
		$.ajax({
			url: "php/login.php",
			method: "POST",
			data: { c_login: 1, userEmail: email, userPassword: pass },
			success: function (data) {
				if (data == "true12345") {
					window.location.href = "customerProfile.php";

				}

			}
		})

	})

	// Restaurant login
	$("#restLogin").click(function (event) {
		event.preventDefault();
		var r_email = $("#r_inputEmail").val();
		var r_pass = $("#r_inputPassword").val();
		$.ajax({
			url: "php/login.php",
			method: "POST",
			data: { r_login: 1, r_userEmail: r_email, r_userPassword: r_pass },
			success: function (data) {
				if (data == "true12345") {
					window.location.href = "restaurantProfile.php";

				}

			}
		})

	})

	//food upload
	$("#f_upload").click(function (event) {

		event.preventDefault();
		$.ajax({
			url: "php/foodRegister.php",
			method: "POST",
			data: $("form").serialize(),
			success: function (data) {
				//$("#signupmsg").html(data);
				alert(data)
			}
		});
		$('.food')[0].reset();
	})

	//fetching product in restaurant home page
	product();
	function product() {
		$.ajax({
			url: "action.php",
			method: "POST",
			data: { product: 1 },
			success: function (data) {
				$("#get_product").html(data);

			}
		})
	}
	//fetching all food item in customer page
	c_product();
	function c_product() {
		$.ajax({
			url: "action.php",
			method: "POST",
			data: { c_product: 1 },
			success: function (data) {
				$("#get_rest_food").html(data);
			}
		})
	}
	//fething restaurant name in 
	restaurantName();
	function restaurantName() {
		$.ajax({
			url: "action.php",
			method: "POST",
			data: { rest: 1 },
			success: function (data) {
				$("#get_rest").html(data);

			}
		})

	}

	//fetching restaurant food
	$("body").delegate(".rest_name", "click", function (event) {
		event.preventDefault();
		var rid = $(this).attr('rid');

		$.ajax({
			url: "action.php",
			method: "POST",
			data: { get_selected_restaurant: 1, rest_id: rid },
			success: function (data) {
				$("#get_rest_food").html(data);
			}
		})
	})

	//fetching order details
	order();
	function order() {
		$.ajax({
			url: "action.php",
			method: "POST",
			data: { order: 1 },
			success: function (data) {
				$("#get_order").html(data);

			}
		})
	}

})
