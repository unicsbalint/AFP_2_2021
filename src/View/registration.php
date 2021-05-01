<?php
include "header.php";
include "nav.php";
require_once "../Controller/RegisterController.php";

$registerController = new RegisterController();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {

    $postData = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'address' => $_POST['address'],
        'password' => $_POST['password'],
        'password1' => $_POST['re-password']
    ];
    $error = false;
    if (empty($postData['name']) || empty($postData['email']) || empty($postData['password']) || empty($postData['password1']) || empty($postData['address'])) {
        echo "<script>alert('Missing details!');</script>";
        $error = true;
    } 
    else if ($postData['password'] != $postData['password1']) {
        echo "<script>alert('A jelszavak nem egyeznek!');</script>";
        $error = true;

    } 
    else if (strlen($postData['password']) < 5) {
        echo "<script>alert('A jelszó minimum 5 karakter hosszú kell, hogy legyen');</script>";
        $error = true;
    }
    else if($registerController->checkIfUserExists($postData['email'])){
        echo "<script>alert('Ilyen emaillel már regisztráltak');</script>";
        $error = true;
    }
    if(!$error){
            $registerController->insertUser($postData['name'],$postData['email'],$postData['address'],$postData['password']);
            header('Location: index.php');      
    }
        
}


?>
<div id="frm">
    <link rel="stylesheet" href="css/registration.css">
    <main class="main-block">
        <h1>Registration</h1>
        <form method="post" class="register" name="registerForm">

            <label id="icon">Email: </label>
            <input type="text" name="email" id="email" placeholder="Email" required/>

            <label id="icon">Address</label>
            <input type="text" name="address" id="address" placeholder="Address" required/>

            <label id="icon">Name</label>
            <input type="text" name="name" id="name" placeholder="Username" required/>

            <label id="icon">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" required/>

            <label id="icon">Password again</label>
            <input type="password" name="re-password" id="re-password" placeholder="Password" required/>

            <button type="submit" name="register">Submit</button>

            <button >Already a member? <a href="login.php">sign in</a></button>
        </form>
    </main>

</div>