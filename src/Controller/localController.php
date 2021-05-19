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
    case "inserNotRegisteredUser":
        echo inserNotRegisteredUser($_POST);
        break;
    case "getUserOrders":         
        echo json_encode(getUserOrders());
        break;
    case "deleteOrder":         
        echo deleteOrder($_POST["order_id"]);
        break;
    case "insertOrderIfNotRegistered":
        echo insertOrderIfNotRegistered($_POST);
        break;
    case "getUserDatas":
        echo json_encode(getUserByEmail($_POST["email"]));
        break;
    case "saveOrder":
        echo json_encode(saveOrder($_POST["data"]));
        break;
        case "updateProfile":
        echo json_encode(updateProfile($_POST["data"],$_POST["user_id"]));
        break;
    default:

    break;
}



function getAllData(){
    require_once "OrderController.php";
    $oc = new OrderController();
    $data = [];
    $data["tipusok"] = $oc->getTypes();
    $data["szinek"] = $oc->getColor();
    $data["extrak"] = $oc->getExtras();

    if($_POST['getUser']){
        require_once "LoginController.php";
        $lc = LoginController::getInstance();
        $data["isUserLoggedIn"] = $lc->isUserLoggedIn();
    }
    return $data;
}

function insertOrder($data){
    $data["user_id"] = $_SESSION["user_id"];
    require_once "OrderController.php";
    $oc = new OrderController();
    return $oc->insertOrder($data);
}

function insertOrderIfNotRegistered($data){
    $data["user_id"] = "";
    require_once "OrderController.php";
    $oc = new OrderController();
    return $oc->insertOrder($data);
}

function getUserOrders(){
require_once "DbController.php";
$dbfunctions=DbController::getInstance();
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
AND model.id = car.id_model";


$orders=$dbfunctions->getList($sql);
return $orders;
}

function deleteOrder($order_id){
require_once "DbController.php";
$dbfunctions=DbController::getInstance();
$connection=$dbfunctions->connectToDatabase();
$result=$dbfunctions->executeDML("
DELETE FROM orders WHERE id = {$order_id}
", 
$connection);
return $result;
}

function inserNotRegisteredUser($data){
    require_once "DbController.php";
    $dbfunctions = DbController::getInstance();
    $connection = $dbfunctions->connectToDatabase();
    $insertedUser = $data;
  
    try{
        $newUser = $dbfunctions->executeDML("
        INSERT INTO `user`( `name`, `email`, `address`)
        VALUES ('{$insertedUser["name"]}','{$insertedUser["email"]}','{$insertedUser["address"]}')", 
        $connection);

    }catch (Exception $e){
        throw new Exception($e->getMessage());
    }
    return $newUser;
}

function saveOrder($html){
    require_once "DbController.php";
    require_once "../Controller/RegisterController.php";
    $sendMail=new RegisterController();

    $dbfunctions = DbController::getInstance();
    $connection = $dbfunctions->connectToDatabase();
    if (isset($html) && !is_null($html) && $html!==""){
        try {

            $sendMail
                ->sendMail($_SESSION["email"],$_SESSION["name"],1,null,$html);
        }catch (Exception $e){

        }
        return $sendMail;
    }
}

 function getUserByEmail($email){
    require_once "DbController.php";
     $dbfunctions = DbController::getInstance();
     $connection = $dbfunctions->connectToDatabase();
    $query = "SELECT * FROM user WHERE email = '{$email}'";
    $record = $dbfunctions->getRecord($query);

    return $record;
}
 function updateProfile($datas, $id){
    require_once "DbController.php";
    $dbfunctions=DbController::getInstance();
    $connection=$dbfunctions->connectToDatabase();
    $sql="UPDATE `user` SET 
                `name`='{$datas["name"]}',
                `email`='{$datas["email"]}',
                `address`='{$datas["address"]}',
                  `phone_number`='{$datas["phone_num"]}',
                  `vat_number`='{$datas["vat_num"]}',
                  `post_name`='{$datas["post_name"]}',
                  `post_address`='{$datas["post_address"]}',
                  `post_phone_number`='{$datas["post_phone_number"]}'
                WHERE `id_user`={$id}";

    $updatedUser=$dbfunctions->executeDML($sql,$connection);

    return $updatedUser;
}



































?>