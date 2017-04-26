$(document).ready(function(){
	var jsonToSend = {
		"action" : "LOADPROMOTIONSMANAGER"
	};
	$.ajax({
		url : "data/applicationLayer.php",
		type : "POST",
		data : jsonToSend, 
		dataType : "json",
		contentType : "application/x-www-form-urlencoded",
		success: function(jsonResponse){
			console.log(jsonResponse);			
			var newHtml = "";
			for (var i = 0; i < jsonResponse.length; i++){
				newHtml += '<div class="col-md-55"><div class="thumbnail"><div class="image view view-first"><img style="width: 100%; display: block;" src="';
				newHtml += jsonResponse[i].imageURL;
				newHtml += '" alt="image" /> <div class="mask"><p>';
				newHtml += jsonResponse[i].name;
				newHtml += '</p> <div class="tools tools-bottom"><a href="#"><i class=""></i></a><a href="#" id="' ;
				newHtml += jsonResponse[i].idPromotions + '" class="delete_promotion" ><i  class="fa fa-pencil"></i></a><a href="#"><i class=""></i></a> </div></div></div><div class="caption"><p>';
				newHtml += jsonResponse[i].descriptions;
				newHtml += '</p></div></div></div>';
			}
			console.log(newHtml);
			$("#row").append(newHtml);
		},
		error: function(errorMessage){
			alert(errorMessage.responseText);
			window.location.replace("homepage_restaurant.php");
		}
	}); 


	$("#cancel_promotions_button").on("click", function(){
		window.location.replace("promotions_management.php");
	});

	$("#add_button_promotions").on("click", function(){
		var $name = $("#promotion_name");
		var $description = $("#promotion_description");
		var $initDay = $("#init-day");
		var $initMonth = $("#init-month");
		var $initYear = $("#init-year");
		var $expireDay = $("#expire-day");
		var $expireMonth = $("#expire-month");
		var $expireYear = $("#expire-year");
		var $imageURL = $("#promotion_image");

		var jsonToSend = {
			"action" : "ADDPROMOTIONSMANAGER",
			"name" : $name.val(),
			"description" : $description.val(),
			"initDay" : $initDay.val(),
			"initMonth" : $initMonth.val(),
			"initYear" : $initYear.val(),
			"expireDay" : $expireDay.val(),
			"expireMonth" : $expireMonth.val(),
			"expireYear" : $expireYear.val(),
			"imageURL" : $imageURL.val(),
		};
		$.ajax({
			url : "data/applicationLayer.php",
			type : "POST",
			data : jsonToSend, 
			dataType : "json",
			contentType : "application/x-www-form-urlencoded",
			success: function(jsonResponse){
				alert(jsonResponse);
				window.location.replace("promotions_management.php");

			},
			error: function(errorMessage){
				alert(errorMessage);	
			}
		});

	});

	$(document).on('click', ".delete_promotion", function(){
		var txt;
		var r = confirm("Do you want to delete your promotion?");
		if (r == true) {
			var jsonToSend = {
				"action" : "DELETEPROMOTIONSMANAGER",
				"id" : this.id
			};
			$.ajax({
				url : "data/applicationLayer.php",
				type : "POST",
				data : jsonToSend, 
				dataType : "json",
				contentType : "application/x-www-form-urlencoded",
				success: function(jsonResponse){
					console.log(jsonResponse);
					alert(jsonResponse.message);	
					window.location.replace("promotions_management.php");		
				},
				error: function(errorMessage){
					alert(errorMessage.responseText);
					window.location.replace("homepage_restaurant.php");
				}
			}); 
		} 
	});

});

