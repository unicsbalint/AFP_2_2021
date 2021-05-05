$(document).ready(function(){

let isUserLoggedIn = false;
    $.ajax({
        url: "localController.php",
        type: 'POST',
        data: { "whichFunction":"getAllData", "getUser":true},
        dataType: "JSON",
        async: false,
        success: function(response) { 
        
            
        isUserLoggedIn = response["isUserLoggedIn"];           
        let colorDiv = `<select id="colorPicker" class="form-control col-12">`   
        response["szinek"].forEach(element => 
            colorDiv +=  `<option value="${element["id_color"]}">${element["name"]}</option>`       
        );
        colorDiv += `</select>`
        $("#colorDiv").html(colorDiv);

        let extraDiv = `<select id="extraPicker" class=" form-control col-12">`   
        response["extrak"].forEach(element => 
            extraDiv +=  `<option value="${element["_id"]}">${element["description"]}</option>`       
        );
        extraDiv += `</select>`
        $("#packageDiv").html(extraDiv);
       
        }


        });

        $("#orderBtn").click(function(){

            if(!isUserLoggedIn){
                var modal = document.getElementById("myModal");
                var btn = document.getElementById("orderBtn");
                var span = document.getElementsByClassName("close")[0];  
                modal.style.display = "block";   
                span.onclick = function() {
                modal.style.display = "none";
                }
                window.onclick = function(event) {
                    if (event.target == modal) {
                      modal.style.display = "none";
                    }
                  }     
        
                return;
            }
            $.ajax({
                url: "localController.php",
                type: 'POST',
                data: { "whichFunction":"insertOrder",
                        "extras":$("#extraPicker").val(),
                        "colors":$("#colorPicker").val(),
                        "models": 1,
                        "description":$("#description").val()
                        },
                success: function(response) {
                    if(response){
                        
                        $(".modal-content p").html("Your order is succesfully placed");
                        var modal = document.getElementById("myModal");
                        var span = document.getElementsByClassName("close")[0];  
                        modal.style.display = "block";   
                        span.onclick = function() {
                        modal.style.display = "none";
                        }
                        window.onclick = function(event) {
                            if (event.target == modal) {
                              modal.style.display = "none";
                            }
                          }
                    }
                }
            });

        })

});