$(document).ready(function(){

    activeSession(); // Redirect to homepage if the session is active

    $("#password").keyup(function(event){
    	if(event.keyCode == 13){
    		$("#loginButton").click();
    	}
    });

    $("#loginButton").on("click", function(){
    	var $userName = $("#userName");
    	var $password = $("#password");
        var $typeuser;
    	if ($userName.val() == "" || $password.val() == "" || (!(($("#t1").is(":checked") || $("#t2").is(":checked"))))){
    		alert("Please insert username and password");
    	}
    	else {
    		if ($("#t1").is(":checked")) {
    			$typeuser = "consumer";
    		} 
    		else {
    			$typeuser = "manager";
    		}
    		var jsonToSend = {
    			"action" : "LOGIN",
    			"username" : $userName.val(),
    			"userPassword" : $password.val(),
    			"remember" : $("#remember").is(":checked"),
    			"typeUser" : $typeuser
    		};
    		//console.log(jsonToSend);
    		$.ajax({
    			url : "data/applicationLayer.php",
    			type : "POST",
    			data : jsonToSend,
    			dataType : "json",
    			contentType : "application/x-www-form-urlencoded",
    			success : function(jsonResponse){
    				if (jsonResponse.message == "consumer"){
    					window.location.replace("homepage_consumers.php");
    				}
    				else{
    					window.location.replace("homepage_restaurant.php");
    				}
    			},
    			error : function(errorMessage){
    				console.log("ERROR");
    				console.log(errorMessage);
    				alert(errorMessage.responseText);
    			}
    		});
    	}
    });
    
    function activeSession(){
    	var jsonToSend = {
    		"action" : "ACTIVESESSION"
    	};

    	$.ajax({
    		url : "data/applicationLayer.php",
    		type : "POST",
    		data : jsonToSend,
    		dataType : "json",
    		contentType : "application/x-www-form-urlencoded",
    		success : function(jsonResponse){
    			console.log(jsonResponse.message);
    			if (jsonResponse.message == "consumer"){
    				window.location.replace("homepage_consumers.php");
    			}
    			else {
    				window.location.replace("homepage_restaurant.php");
    			}
    		},
    		error : function(errorMessage){
                //
            }
        });
    }
});