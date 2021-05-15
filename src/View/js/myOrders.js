$(document).ready(function(){
$(".navbar").css("marginRight","200px"); 
    $.ajax({
        url: "../Controller/localController.php",
        type: 'POST',
        data: { "whichFunction":"getUserOrders"},
        dataType: "JSON",
        async: false,
        success: function(response) {
            let table = `<table style="" class="table table-striped">`;
                table += `<thead>`
                table += `<tr>`
                table +=  `<th scope="col">Customer</th>`
                table +=  `<th scope="col">Ordered model</th>`
                table +=  `<th scope="col">Ordered package</th>`
                table +=  `<th scope="col">Order price</th>`
                table +=  `<th scope="col">Description</th>`
                table +=  `<th scope="col"></th>`
                table += `</tr>`
                table += `</thead>`
                response.forEach(function(element){
                table += `<tr>`;
                table += `<td>${element["name"]}</td>`;
                table += `<td>${element["model"]}</td>`;  
                table += `<td>${element["package"]}</td>`;  
                table += `<td>${element["finalPrice"]}</td>`;  
                table += `<td>${element["orderDescription"]}</td>`;  
                table += `<td><div class="deleteOrder" style="cursor: pointer" data-id=${element["order_id"]}><i style="color:red" class="fa fa-trash" aria-hidden="true"></div></i></td>`;  
                table += `<tr>`;  
            });
            table += `</table>`;
            $("#myOrders").html(table);
        }
       });

       $(".deleteOrder").click(function(){
           let thisButton = this;
            $.ajax({
                url: "../Controller/localController.php",
                type: 'POST',
                data: { "whichFunction":"deleteOrder","order_id":$(this).data("id")},
                dataType: "JSON",
                async: false,
                success: function(response) { 
                    if(response){
                        $(thisButton).closest("tr").remove();      
                    }

                }
            });
        });

});

