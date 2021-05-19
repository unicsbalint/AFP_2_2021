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
    <link rel="stylesheet" href="s_style.css">

    <script src="orderS.js"></script>
    <title>Anabolic Tesla</title>
</head>


<body>
    
    
    
<section class="bgimage">
<div id="heroText">THE MODEL S</div>
</section>


<div class="album p-5 mx-5 bg-light">
    <div class="row justify-content around">
        <div class="col-md-4">
            <div class="col-m-4"><h2>Description about MODEL S</h2></div>
            <div class="row align-items-start">
                <div class="col m-4" style="width: 500px; background-color: rgba(255, 255, 255, 0.411);">
                    Pick an astonishing color for your new MODEL S
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
                        <a id="checkoutBtn" class="btn btn-primary btn-large">Order</a>
                </div>
            </div>

            <div id="myModal" class="modal">
            <span class="close" id="close">&times;</span>

              <div class="modal-content" id="changeableDiv">
                <form action="" class="container">
                    <h1 class="py-3">Checkout</h1>
                <div class="userDetails row">
                
                <div class="row w-100">
                    <label for="nev" class="col px-4">Name: </label>
                    <input type="text" placeholder="Név" class="col" id="nameId"> 
                </div>

                <div class="row w-100">
                    <label for="email" class="col px-4">Email: </label>
                    <input type="text" placeholder="E-mail"class="col" id="email">
                </div>

                <div class="row w-100">
                    <label for="cim" class="col px-4">Address: </label>
                    <input typy="text" placeholder="Cím"class="col"id="addressId">
                </div>
            </div>

            <div class="carDetails row my-4 ">
                <div class="row w-100">
                    <label type="text" class="col px-4">Model: </label>
                    <p id="modelCheckout" value="" class="col"></p>
                </div>

                <div class="row w-100">
                    <label type="text" class="col px-4">Colour: </label>
                    <p id="colorCheckout" value="" class="col"></p>
                </div>

                <div class="row w-100">
                    <label type="text" class="col px-4">Extra: </label>
                    <p id="extraCheckout" value="" class="col"></p>
                </div>

                <div class="row w-100">
                    <label type="text" class="col px-4">Description: </label>
                    <p id="descriptionCheckout" value="" class="col"></p>
                </div>
            </div>
            <div>
                <button type="button" class="btn btn-primary btn-large" id="orderBtn">Checkout and order</button>
            </div>
        </div>
        </div>
        </div>


        <div class="col-md-4 ml">
            <div>
                <img class="img-fluid" src="../images/homepage/models_red.png" alt="Model s red">
            </div>
        </div>
    </div>
</div>

<?php
include_once "../footer.php"
?>
</body>

</html>
