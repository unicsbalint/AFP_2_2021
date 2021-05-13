$(document).ready(function() {
    let isUserLoggedIn = false;
    $.ajax({
        url: "../../Controller/localController.php",
        type: 'POST',
        data: { "whichFunction": "getAllData", "getUser": true },
        dataType: "JSON",
        async: false,
        success: function(response) {


            isUserLoggedIn = response["isUserLoggedIn"];
            let colorDiv = `<select id="colorPicker" class="form-control col-12">`
            response["szinek"].forEach(element =>
                colorDiv += `<option value="${element["id_color"]}">${element["name"]}</option>`
            );
            colorDiv += `</select>`
            $("#colorDiv").html(colorDiv);

            let extraDiv = `<select id="extraPicker" class=" form-control col-12">`
            response["extrak"].forEach(element =>
                extraDiv += `<option value="${element["_id"]}">${element["description"]}</option>`
            );
            extraDiv += `</select>`
            $("#packageDiv").html(extraDiv);

            //console.log(isUserLoggedIn); <--- csak teszteltésre kellett
        }


    });

    $("#checkoutBtn").click(function() {

        if (!isUserLoggedIn) {
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
            $.ajax({
                url: "../../Controller/localController.php",
                type: 'POST',
                data: { "whichFunction": "getAllData", "getUser": false },
                dataType: "JSON",
                async: false,

                success: function(response) {
                    let colorIndex = $("#colorPicker").val();
                    let extraIndex = $("#extraPicker").val();
                    response["szinek"].forEach(element => {
                        if (colorIndex == `${element["id_color"]}`) {
                            $("#colorCheckout").html(`${element["name"]}`);
                        }
                    });

                    response["extrak"].forEach(element => {
                        if (extraIndex == `${element["_id"]}`) {
                            $("#extraCheckout").html(`${element["description"]}`);
                        }
                    })
                    $("#modelCheckout").html("Model S");
                    $("#descriptionCheckout").html($("#description").val());


                },
                error: function(response) {
                    console.log(response);
                }
            })

            return;
        };

        $.ajax({
            url: "../../Controller/localController.php",
            type: 'POST',
            data: {
                "whichFunction": "insertOrder",
                "extras": $("#extraPicker").val(),
                "colors": $("#colorPicker").val(),
                "models": 1,
                "description": $("#description").val()
            },
            success: function(response) {
                if (isUserLoggedIn) {
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

    $("#orderBtn").click(function() {
        $.ajax({
            url: "../../Controller/localController.php",
            type: 'POST',
            data: {
                "whichFunction": "insertOrderIfNotRegistered",
                "user_id": "",
                "extras": $("#extraPicker").val(),
                "colors": $("#colorPicker").val(),
                "models": 1,
                "description": $("#description").val()
            },
            success: function(response) {

            },
            error: function(response) {
                console.log(response)
            }
        })

        $.ajax({
            url: "../../Controller/localController.php",
            type: 'POST',
            data: {
                "whichFunction": "inserNotRegisteredUser",
                "name": $("#nameId").val(),
                "email": $("#email").val(),
                "address": $("#addressId").val()
            },
            success: function(response) {

            },
            error: function(response) {
                console.log(response)
            }
        })
    })
});