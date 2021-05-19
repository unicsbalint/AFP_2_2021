<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="https://www.tesla.com/themes/custom/tesla_frontend/assets/favicons/favicon.ico">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
<?php
session_start();
require_once "nav.php";


?>
<script src="js/myOrders.js"></script>
<body>
<div><h1 class="display-1" style="margin-bottom: 2rem">My placed orders:</h1></div>
<div id="myOrders">

</div>
<button type="button" class="btn btn-success" id="setOrder">Success</button>


</body>
<script>
    $("#setOrder").click(function() {
        $.ajax({
            url: "../Controller/localController.php",
            type: 'POST',
            data: {
                "whichFunction": "saveOrder",
                data: $("#myOrders").html()
            },
            dataType: "JSON",
            async: false,
            success: function (response) {
                if (response) {
                    alert("Order succesfull");
                    window.location.href = 'index.php';

                } else {
                    alert("Something went wrong...");
                }
            }
        });
    });
</script>