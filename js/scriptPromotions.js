$(document).ready(function(){
	var jsonToSend = {
		"action" : "LOADPROMOTIONS"
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
				newHtml += '</p> <div class="tools tools-bottom"><a href="#"><i class=""></i></a><a href="#"><i class="fa fa-check-square-o"></i></a><a href="#"><i class=""></i></a> </div></div></div><div class="caption"><p>';
				newHtml += jsonResponse[i].descriptions;
				newHtml += '</p></div></div></div>';
			}
			console.log(newHtml);
			$("#row").append(newHtml);
		},
		error: function(errorMessage){
			console.log("error");
			console.log(errorMessage);	
			alert(errorMessage.responseText);
			window.location.replace("index.php");
		}
	});

})

