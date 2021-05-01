<?php
class RegisterController{
    function insertUser($username, $email, $address, $password){
        require_once "DbController.php";
        $dbfunctions = new DbController;
        $connection = $dbfunctions->connectToDatabase();

      
        $password = sha1($password); //sha1 titkosítással töltjük fel az adatbázisba, így is lesz kiolvasva
        try{
            $newUser = $dbfunctions->executeDML("
            INSERT INTO `user`( `name`, `email`, `address`, `password`)
            VALUES ('$username','$email','$address','$password')", 
            $connection);

        }catch (Exception $e){
            throw new Exception($e->getMessage());
        }
        return $newUser;
    }

   /**
     * @param  $email Megnézzük, hogy már van-e ilyen emaillel regisztrált emberünk az adatbázisban, a user táblában
     * Ha van, akkor a függvény truet ad vissza, ha nincs akkor falseot
     */
    //
    function checkIfUserExists($email){ //usernév ellenőrzés nem szükséges, mert emailt fogunk használni bejelentkezéshez.
        require_once "DbController.php";
        $dbfunctions = new DbController;
        $connection = $dbfunctions->connectToDatabase();

        $params = [ ':email' => $email ];
        $query = "SELECT id_user FROM user WHERE email = :email";
        $check = $dbfunctions->getRecord($query, $params);

        if(!empty($check)){
            return true;
        }
        else{
            return false;
        }

    }
}
