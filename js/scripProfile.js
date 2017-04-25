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
            
        },
        error : function(errorMessage){
            alert(errorMessage.responseText);
        }
    });
});