$(document).ready(function(){
    var jsonToSend = {
        "action" : "GETCUSTOMERSREVIEWS"
    };

    $.ajax({
        url : "data/applicationLayer.php",
        type : "POST",
        data : jsonToSend,
        dataType : "json",
        contentType : "application/x-www-form-urlencoded",
        success : function(jsonResponse){
            for(var i = 0; i < jsonResponse.length; i++) {
                $("#customersReviewsBody").append(
                    '<tr> <td>' + jsonResponse[i].username + '</td> <td>' + jsonResponse[i].reviewText + '</td> <td>' + jsonResponse[i].rating + '</td> </tr>');
            }
        },
        error : function(errorMessage){
            alert(errorMessage.responseText);
        }

    });

});

