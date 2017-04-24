$(document).ready(function(){

	$("#homapage_list_consumer").on("click", function(){
        window.location.replace("homepage_consumers.php");
    });

	$("#restaurant_reviews_list_consumer").on("click", function(){
        window.location.replace("restaurants_reviews.php");
    });

    $("#promotions_list_consumer").on("click", function(){
        window.location.replace("promotions.php");
    });

    $("#restaurant_profile_consumer").on("click", function(){
        window.location.replace("restaurant_profile_for_consumers.php");
    });

    $("#log_out_button").on("click", function(){
        var jsonToSend = {
            "action" : "ENDSESSION"
        };
        $.ajax({
            url : "data/applicationLayer.php",
            type : "POST",
            data : jsonToSend,
            dataType : "json",
            contentType : "application/x-www-form-urlencoded",
            success : function(jsonResponse){
                window.location.replace("index.php");
            },
            error : function(errorMessage){
                alert(errorMessage.responseText);
            }

        });
    });
});