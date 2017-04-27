$(document).ready(function(){
    var jsonToSend = {
        "action" : "SEARCHCUSTOMERSREVIEWS"
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

    $("#searchBox").on("click", function(){
        var jsonToSend ={
            "action" : "SAVESEARCH",
            "search" : $("#searchText").val()
        };

        $.ajax({
            url : "data/applicationLayer.php",
            type : "POST",
            data : jsonToSend,
            dataType : "json",
            contentType : "application/x-www-form-urlencoded",
            success : function(jsonResponse){
                window.location.replace("searchCustomers_reviews.php");
            },
            error : function(errorMessage){
                alert(errorMessage.responseText);
            }

        });
        
    });

});

