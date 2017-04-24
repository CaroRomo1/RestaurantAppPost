$(document).ready(function(){

	$("#homapage_list_manager").on("click", function(){
        window.location.replace("homepage_restaurant.php");
    });

	$("#restaurant_reviews_list_manager").on("click", function(){
        window.location.replace("customers_reviews.php");
    });

    $("#promotions_list_manager").on("click", function(){
        window.location.replace("promotions_management.php");
    });

    $("#restaurant_profile_manager").on("click", function(){
        window.location.replace("restaurant_profile.php");
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