<?php
class LoginController{
    function IsUserLoggedIn() {
        return $_SESSION != null;
    }
    
    function UserLogout() {
        session_unset();
        session_destroy();
        header('Location: index.php');
    } 

    function UserLogin($email, $password) {
        $params = [
            ':email' => $email,
            ':password' => sha1($password)
        ];
        $query = "SELECT id_user, name, email, password FROM user WHERE email = :email AND password = :password";
        
        require_once "DbController.php";
        $dbfunctions = new DbController;
        $connection = $dbfunctions->connectToDatabase();

        $record = $dbfunctions->getRecord($query, $params);
        if (!empty($record)) {
            $_SESSION['name'] = $record['name'];
            $_SESSION['email'] = $record['email'];   
            header('Location: index.php');
        }
        return false;
    }

}
