$(document).ready(function(){

let colors = [
    'Rough Black',
    'Bright Metal White',
    'Metal Gray',
    'Sky Blue',
    'Rose Red'];

let models = [
    'Model S',
    'Model 3',
    'Model X',
    'Model Y'
];

let package = [
    'Basic Package',
    'Bigger Wheels, textil interior package',
    'Crazy power with dual motor (700hp), and alcantara interior package',
    'Crazy power with dual motor (700hp) and premium quality interior'
];

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
        
        $("#checkoutBtn").click(function(){

            if(!isUserLoggedIn){
                var modal = document.getElementById("myModal");
                var btn = document.getElementById("checkoutBtn");
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
            };

            $.ajax({
                url: "localController.php",
                type: 'POST',
                data: { "whichFunction":"insertOrderIfLoggedIn",
                        "extras":$("#extraPicker").val(),
                        "colors":$("#colorPicker").val(),
                        "models": 1,
                        "description":$("#description").val()
                        },
                success: function(response) {
                    if(response && isUserLoggedIn == true){
                        
                        $("#changeableDiv").html("Your order is succesfully placed");
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
                },
            });
        })
});

function Passer($value, $selectorId, $array) {
    switch ($value){
        case 1:
            $selectorId.text(array[0]);
            break;
        case 2:
            $selectorId.value(array[1]);
            break;
        case 3:
            $selectorId.value(array[2]);
            break;
        case 4:
            $selectorId.value(array[3]);
            break;
        case 5:
            $selectorId.value(array[4]);
            break;
    }
}