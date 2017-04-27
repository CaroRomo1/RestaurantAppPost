$(document).ready(function(){
    var jsonToSend = {
        "action" : "LOADPROFILE"
    };
    $.ajax({
        url : "data/applicationLayer.php",
        type : "POST",
        data : jsonToSend,
        dataType : "json",
        contentType : "application/x-www-form-urlencoded",
        success : function(jsonResponse){
            var newHtml = "";
            newHtml += "<h3>" + jsonResponse.username + "</h3>";
            $(".col-md-3 col-sm-3 col-xs-12 profile_left").append(newHtml);
            
        },
        error : function(errorMessage){
            alert(errorMessage.responseText);
        }
    });
});