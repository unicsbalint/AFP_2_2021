<?php
session_start();

switch($_POST['whichFunction'])
{
    case "getAllData":         
        echo json_encode(getAllData());
        break;
    case "insertOrder":        
        echo insertOrder($_POST);   
        break;
    default:

    break;
}



function getAllData(){
    require_once "../../Controller/OrderController.php";
    $oc = new OrderController();
    $data = [];
    $data["tipusok"] = $oc->getTypes();
    $data["szinek"] = $oc->getColor();
    $data["extrak"] = $oc->getExtras();

    if($_POST['getUser']){
        require_once "../../Controller/LoginController.php";
        $lc = new LoginController();
        $data["isUserLoggedIn"] = $lc->isUserLoggedIn();
    }
    return $data;
}

function insertOrder($data){
    $data["user_id"] = $_SESSION["user_id"];
    require_once "../../Controller/OrderController.php";
    $oc = new OrderController();
    return $oc->insertOrder($data);
}






































?>