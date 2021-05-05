<?php
class UserController{
    function updateProfile($datas, $updatedEmail){

        require_once "DbController.php";
        $dbfunctions=new DbController;
        $connection=$dbfunctions->connectToDatabase();
        $sql="UPDATE `user` SET 
                `name`='{$datas["name"]}',
                `email`='{$datas["email"]}',
                `address`='{$datas["address"]}'
                WHERE `email`='{$updatedEmail}'";

        $updatedUser=$dbfunctions->executeDML($sql,$connection);

        return $updatedUser;
    }

}
?>