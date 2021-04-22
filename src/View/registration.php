<?php
include "header.php";
include "nav.php";
require_once "../Controller/RegisterController.php";

$registerController = new RegisterController();


if (isset($_POST['register']) && !empty($_POST['email'])
    && !empty($_POST['address']) && !empty($_POST['password']) && !empty($_POST['re-password']) && !empty($_POST['username'])
    && $_POST['password'] == $_POST['re-password']) {
    try {
        $registerController->insertUser($_POST['name'], $_POST['password'],$_POST['address'],$_POST['email']);
        header('Location: /AFP_2_2021/src/View/index.php');
    } catch (Exception $e) {
        echo "Hiba történt a regisztrciókor!";
    }
}

?>
<div id="frm">
    <link rel="stylesheet" href="css/registration.css">
    <main class="main-block">
        <h1>Registration</h1>
        <form method="post" class="register" name="registerForm">
            <label id="icon" for="email">Email: </label>
            <input type="text" name="email" id="email" placeholder="Email" required/>
            <label id="icon" for="name">Address</label>
            <input type="text" name="address" id="address" placeholder="Address" required/>
            <label id="icon" for="address">Name</label>
            <input type="text" name="name" id="name" placeholder="Username" required/>
            <label id="icon" for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" required/>
            <label id="icon" for="re-password">Password again</label>
            <input type="password" name="re-password" id="re-password" placeholder="Password" required/>
            <button type="submit" name="register">Submit</button>
            <button >Already a member? sign in</button>
        </form>
    </main>

</div>