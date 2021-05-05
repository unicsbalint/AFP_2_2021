$(document).ready(function(){


    $.ajax({
        url: "localController.php",
        type: 'POST',
        data: { "whichFunction":"getAllData" },
        dataType: "JSON",
        success: function(response) { 
        
            
            
      
              
        let colorDiv = `<select class=" form-control col-12">`   
        response["szinek"].forEach(element => 
            colorDiv +=  `<option value="${element["name"]}">${element["name"]}</option>`       
        );
        colorDiv += `</select>`

           $("#colorDiv").html(colorDiv);

           
        }


        });













});