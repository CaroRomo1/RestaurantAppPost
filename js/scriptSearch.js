$(document).ready(function(){
    var jsonToSend ={
        "action" : "SEARCH_RESULTS"
    };

    $.ajax({
        url : "data/applicationLayer.php",
        type : "POST",
        data : jsonToSend,
        dataType : "json",
        contentType : "application/x-www-form-urlencoded",
        success : function(jsonResponse){
            var newHtml = "";
            for (var i = 0; i < jsonResponse.length; i++){
                newHtml += '<tr> <td> <th><input type="checkbox" id="check-all" class="flat"></th></td>';
                var name = jsonResponse[i].rName;
                var rating = jsonResponse[i].rating;
                var location = jsonResponse[i].address;
                var availability = jsonResponse[i].maxCapacity - 5;
                var page = jsonResponse[i].webpage;
                newHtml += '<td>' + name + '</td><td>' + rating + '</td><td>' 
                    + location + '</td><td>' + availability + '</td><td>' + page + '</td>';
                newHtml += "</tr>";
            }
            $("#datatable-checkbox").append(newHtml);
        },
        error : function(errorMessage){
            alert(errorMessage.responseText);
            window.location.replace("index.php");
        }

    });

    $("#searchTable").on("click", ".requestButton", function(){
        var username = $(this).parent().parent().get(0).cells[0].innerHTML;

        console.log(username);

        var jsonToSend ={
            "action" : "SEND_REQUEST",
            "friendUsername" : username
        };
        $.ajax({
            url : "data/applicationLayer.php",
            type : "POST",
            data : jsonToSend,
            dataType : "json",
            contentType : "application/x-www-form-urlencoded",
            success : function(jsonResponse){
                alert(jsonResponse.message);
                window.location.replace("search.php");
            },
            error : function(errorMessage){
                console.log(errorMessage.responseText);
            }

        });

    });

    $("#searchBox").on("click", function(){
        var jsonToSend ={
            "action" : "SEARCH",
            "search" : $("#searchBox").val()
        };

        $.ajax({
            url : "data/applicationLayer.php",
            type : "POST",
            data : jsonToSend,
            dataType : "json",
            contentType : "application/x-www-form-urlencoded",
            success : function(jsonResponse){
                window.location.replace("search.php");
            },
            error : function(errorMessage){
                alert(errorMessage.responseText);
            }

        });
        
    });

});

