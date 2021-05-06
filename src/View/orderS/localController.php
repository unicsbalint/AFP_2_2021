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
    case "getUserOrders":         
        echo json_encode(getUserOrders());
        break;
    case "deleteOrder":         
        echo deleteOrder($_POST["order_id"]);
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

function getUserOrders(){
require_once "../../Controller/DbController.php";
$dbfunctions=new DbController;
$connection=$dbfunctions->connectToDatabase();

$sql = "SELECT orders.id as order_id, user.name, 
model.model_name as 'model',
extra.description as 'package',
model.model_price + extra.price AS 'finalPrice',
orders.description AS 'orderDescription'
FROM   orders,
user,
car,
model,
extra
WHERE orders.user_id = {$_SESSION["user_id"]}
AND user.id_user = {$_SESSION["user_id"]}
AND orders.user_id = orders.user_id
AND orders.car_id = car.id_car
AND car.id_extra = extra._id
AND model.id_model = car.id_model";
//var_dump($sql); die();

$orders=$dbfunctions->getList($sql);
return $orders;
}

function deleteOrder($order_id){
require_once "../../Controller/DbController.php";
$dbfunctions=new DbController;
$connection=$dbfunctions->connectToDatabase();
$result=$dbfunctions->executeDML("
DELETE FROM orders WHERE id = {$order_id}
", 
$connection);
return $result;
}





































?>