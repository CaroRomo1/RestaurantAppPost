$(document).ready(function(){
    
	$("#consumer_register_button").on("click", function(){
        window.location.replace("register_consumer.php");
    });

	$("#manager_register_button").on("click", function(){
        window.location.replace("register_restaurant.php");
    });
});