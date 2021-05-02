<?php
class OrderController{

    function getTypes(){
        require_once "DbController.php";
        $dbfunctions=new DbController;
        $connection=$dbfunctions->connectToDatabase();
        $selectedColors=$dbfunctions->getList("SELECT `id`, `model_name`, `model_price`, `wheel`, `engine` FROM `model` WHERE 1 ");
        return $selectedColors;
    }

    function getColor(){
        require_once "DbController.php";
        $dbfunctions=new DbController;
        $connection=$dbfunctions->connectToDatabase();
        $selectedTypes=$dbfunctions->getList("SELECT `id_color`, `color`, `name` FROM `color` WHERE 1 ");
        return $selectedTypes;
    }
    
    function getExtras(){
        require_once "DbController.php";
        $dbfunctions=new DbController;
        $connection=$dbfunctions->connectToDatabase();
        $selectedTypes=$dbfunctions->getList("SELECT * FROM `extra` WHERE 1 ");
        return $selectedTypes;
    }

    function insertOrder($params){
            $orderedCar = $params;

            require_once "DbController.php";
            $dbfunctions = new DbController;
            $connection = $dbfunctions->connectToDatabase();
          try{
              $insertedCar = $dbfunctions->executeDML("INSERT INTO `car`( `id_extra`, `id_color`, `id_model`)
            VALUES ('{$orderedCar["extras"]}','{$orderedCar["colors"]}','{$orderedCar["models"]}')", $connection);

              $insertedId=$connection->lastInsertId();
              $insertOrder=$dbfunctions->executeDML("INSERT INTO `orders`( `description`, `user_id`, `car_id`)
            VALUES ('{$orderedCar["description"]}','2','{$insertedId}')",$connection);
          }catch (Exception $e){
              throw new Exception($e->getMessage());
        }
        return $insertOrder;
    }


}


