<?php
class OrderController{

    function getTypes(){
        require_once "DbController.php";
        $dbfunctions=DbController::getInstance();
        $connection=$dbfunctions->connectToDatabase();
        $selectedColors=$dbfunctions->getList("SELECT * FROM `model`");
        return $selectedColors;
    }

    function getColor(){
        require_once "DbController.php";
        $dbfunctions=DbController::getInstance();
        $connection=$dbfunctions->connectToDatabase();
        $selectedTypes=$dbfunctions->getList("SELECT * FROM `color` WHERE 1 ");
        return $selectedTypes;
    }
    
    function getExtras(){
        require_once "DbController.php";
        $dbfunctions=DbController::getInstance();
        $connection=$dbfunctions->connectToDatabase();
        $selectedTypes=$dbfunctions->getList("SELECT * FROM `extra` WHERE 1 ");
        return $selectedTypes;
    }

    function insertOrder($params){
            $orderedCar = $params;

            require_once "DbController.php";
            $dbfunctions = DbController::getInstance();
            $connection = $dbfunctions->connectToDatabase();
          try{
              $insertedCar = $dbfunctions->executeDML("INSERT INTO `car`( `id_extra`, `id_color`, `id_model`)
            VALUES ('{$orderedCar["extras"]}','{$orderedCar["colors"]}','{$orderedCar["models"]}')", $connection);

              $insertedId=$connection->lastInsertId();
              $insertOrder=$dbfunctions->executeDML("INSERT INTO `orders`( `description`, `user_id`, `car_id`)
            VALUES ('{$orderedCar["description"]}','{$orderedCar["user_id"]}','{$insertedId}')",$connection);
          }catch (Exception $e){
              throw new Exception($e->getMessage());
        }
        return $insertOrder;
    }

}


