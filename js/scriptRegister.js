$(document).ready(function(){
	$("#cancel_register_button").on("click", function(){
		window.location.replace("index.php");
	});

	$("#register_button_consumer").on("click", function(){
		var $firstName = $("#firstName");
		var $lastName = $("#lastName");
		var $newUserName = $("#newusername");
		var $email = $("#user-email");
		var $p1 = $("#p1_user");
		var $p2 = $("#p2_user");
		var $country = $("#country");
		var $gender = 0;
		var $day = $("#dob-day");
		var $month = $("#dob-month");
		var $year = $("#dob-year");
		var $typeUser = "consumer";

		if ($firstName.val() == "" || $lastName.val() == "" || $newUserName.val() == "" || $email.val() == "" || $p1.val() == "" || $p2.val() == ""  || $country.val() == 0  || (!(($("#g1").is(":checked") || $("#g2").is(":checked")))) || $day.val()== "" || $month.val()== "" || $year.val() == "" ) {
			alert("Please add the information needed");
		}
		else {
			if ($("#g1").is(":checked")) {
				$gender = "male";
			} 
			else {
				$gender = "female";
			}

			var jsonObject = {
				"action" : "REGISTERCONSUMER",
				"userFirstName" :  $("#firstName").val(),
				"userLastName" : $("#lastName").val(),
				"username" : $("#newusername").val(),
				"userEmail" : $("#user-email").val(),
				"userPassword1" : $("#p1_user").val(),
				"userPassword2" : $("#p2_user").val(),
				"userCountry" : $("#country").val(),
				"userGender" : $gender,
				"day" : $day.val(),
				"month" : $month.val(),
				"year" : $year.val(),
				"typeUser" : $typeUser

			};   
			console.log(jsonObject);

			$.ajax({
				url : "data/applicationLayer.php",
				type : "POST" , 
				data : jsonObject , 
				dataType : "json" , 
				contentType : "application/x-www-form-urlencoded",
				success : function(jsonResponse) {
					alert(jsonResponse.message);
					window.location.replace("homepage_consumer.php");
				},
				error : function(errorMessage){
					alert(errorMessage.responseText);
				}
			});
		}
	}); 

	$("#register_button_restaurant").on("click", function(){
		var $RestaurantName = $("#restaurant-name");
		var $newUsernameRestaurant = $("#newUsernameRestaurant");
		var $email = $("#restaurant-email");
		var $p1 = $("#p1_restaurant");
		var $p2 = $("#p2_restaurant");
		var $restaurantAddress = $("#restaurant-address");
		var $restaurantPhone = $("#restaurant-phone");
		var $restaurantWebpage = $("#restaurant-webpage");
		var $openHour = $("#open-hour");
		var $openMin = $("#open-min");
		var $closeHour = $("#close-hour");
		var $closeMin = $("#close-min");
		var $securityKey = $("#security_key");
		var $maxCapacity = $("#max_capacity");
		var $typeUser = "manager";

		if ($RestaurantName.val() == "" || $newUsernameRestaurant.val() == "" || $email.val() == "" || $restaurantAddress.val() == "" || $p1.val() == "" || $p2.val() == ""  || $restaurantPhone.val() == "" || $restaurantWebpage.val() == "" || $openHour.val()== "" || $openMin.val() == "" || $closeHour.val()== "" || $closeMin.val() == "" ) {
			alert("Please add the information needed");
		}
		else {
			var jsonObject = {
				"action" : "REGISTERRESTAURANT",
				"RestaurantName" :  $RestaurantName.val(),
				"newUsernameRestaurant" : $newUsernameRestaurant.val(),
				"RestaurantEmail" : $email.val(),
				"restaurantAddress" : $restaurantAddress.val(),
				"RestaurantPassword1" : $p1.val(),
				"RestaurantPassword2" : $p2.val(),
				"restaurantPhone" : $restaurantPhone.val(),
				"restaurantWebpage" : $restaurantWebpage.val(),
				"openHour" : $openHour.val(),
				"openMin" : $openMin.val(),
				"closeHour" : $closeHour.val(),
				"closeMin" : $closeMin.val(),
				"securityKey" : $securityKey.val(),
				"maxCapacity" : $maxCapacity.val(),
				"typeUser" : $typeUser
			};   
			console.log(jsonObject);

			$.ajax({
				url : "data/applicationLayer.php",
				type : "POST" , 
				data : jsonObject , 
				dataType : "json" , 
				contentType : "application/x-www-form-urlencoded",
				success : function(jsonResponse) {
					alert(jsonResponse.message);
					window.location.replace("homepage_restaurant.php");
				},
				error : function(errorMessage){
					alert("errorMessage.responseText");
				}
			});
		}
	});   
})