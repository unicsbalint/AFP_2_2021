<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="https://www.tesla.com/themes/custom/tesla_frontend/assets/favicons/favicon.ico">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="x_style.css">

    <script src="orderX.js"></script>
    <title>Anabolic Tesla</title>
</head>


<body>



<section class="bgimage">
    <div id="heroText">THE MODEL X</div>
</section>


<div class="album p-5 mx-5 bg-light">
    <div class="row justify-content around">
        <div class="col-md-4">
            <div class="col-m-4"><h2>Description about MODEL X</h2></div>
            <div class="row align-items-start">
                <div class="col m-4" style="width: 500px; background-color: rgba(255, 255, 255, 0.411);">
                    Pick an astonishing color for your new MODEL X
                    <div id="colorDiv">Color</div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col m-4">
                    Choose from a wide selection of package for your new car
                    <br> (choose one, and you will see what it contains)
                    <div id="packageDiv">Packages</div>
                </div>
            </div>

            <div class="row align-items-end">
                <div class="col m-4">
                    <textarea id="description" placeholder="Any special request for your order?"></textarea>
                    <a id="orderXBtn" class="btn btn-primary btn-large">Order</a>
                </div>
            </div>

            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>Please <a href="/tesla/src/view/login.php">sign in</a> in order to fulfill your order</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 ml">
            <div>
                <img src="../images/homepage/model_x.jpg" alt="Model s red" width="750px" height="500px">
            </div>
        </div>
    </div>
</div>

<?php
include_once "../footer.php"
?>
</body>
</html>
