<?php session_start(); ?>

<?php

/*
Ez egy olyan function lett volna, ami dinamikusan beállítja az elérési útvonalát a css, js fájloknak, hogy 
csak 1db headert kelljen használnunk az egész projektben.
Ha valaki gondolja kidolgozhatja:

meghívni az adott fájlból így kéne:
require header,
setPath(__FILE__)

Üdv, Bálint


global $path;
function setPath($page_required){
    $temp = explode('\\',$page_required);
    $count = 0;
    for($i = 0; $i < count($temp); $i++){
        echo $temp[$i]." ";
        if($temp[$i] == "View"){
            $count = count($temp) - $i;
            break;
        }
    }
}
*/

?> 

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="https://www.tesla.com/themes/custom/tesla_frontend/assets/favicons/favicon.ico">
    <link rel="stylesheet" type="text/css" href="js/cookie warning/purecookie.css" async />
    <script src="js/cookie warning/purecookie.js" async></script>

    <title>Anabolic Tesla</title>
</head>
