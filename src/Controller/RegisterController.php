<?php
class RegisterController{
    function insertUser($username, $password, $email, $address){

        require_once "DbController.php";
        $dbfunctions = new DbController;
        $connection = $dbfunctions->connectToDatabase();
        try{
            $newUSer = $dbfunctions->executeDML("INSERT INTO `user`( `name`, `email`, `address`, `password`)
            VALUES ('$username','$email','$address','$password')", $connection);

        }catch (Exception $e){
            throw new Exception($e->getMessage());
        }
        return $newUser;
    }
}
