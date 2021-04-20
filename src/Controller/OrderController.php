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

}


