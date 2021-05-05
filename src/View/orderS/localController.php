<?php

switch($_POST['whichFunction'])
{
    case "getAllData":         
        echo json_encode(getAllData());
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
    return $data;
}






































?>