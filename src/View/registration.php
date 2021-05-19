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
        'password1' => $_POST['re-password'],
        'phone_number' => $_POST['phone-number']
        // 'vat_number' => $_POST['vat-number'],
        // 'post_address' => $_POST['post-address'],
        // 'post_name' => $_POST['post-name'],
        // 'post_phone_number' => $_POST['post-phone-number']
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
            $registerController->insertUser($postData['name'],
                                            $postData['email'],
                                            $postData['address'],
                                            $postData['password'],
                                            $postData['phone_number'],
                                            "","","",""
                                            // $postData['vat_number'],
                                            // $postData['post_address'],
                                            // $postData['post_name'],
                                            // $postData['post_phone_number']
                                            );

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

            <label id="icon">Address:</label>
            <input type="text" name="address" id="address" placeholder="Address" required/>

            <label id="icon">Name:</label>
            <input type="text" name="name" id="name" placeholder="Username" required/>

            <label id="icon">Password:</label>
            <input type="password" name="password" id="password" placeholder="Password" required/>

            <label id="icon">Password again:</label>
            <input type="password" name="re-password" id="re-password" placeholder="Password again" required/>

            <label id="icon">Phone number:</label>
            <input type="text" name="phone-number" id="phone-number" placeholder="Phone number" required/>
<!-- 
            <label id="icon">Vat number:</label>
            <input type="text" name="vat-number" id="vat-number" placeholder="Vat number" required/>

            <label id="icon">Phone number:</label>
            <input type="text" name="phone-number" id="phone-number" placeholder="Phone number" required/>

            <label id="icon">Post adress:</label>
            <input type="text" name="post-address" id="post-address" placeholder="Post address" required/>

            <label id="icon">Post name:</label>
            <input type="text" name="post-name" id="post-name" placeholder="Post name" required/>

            <label id="icon">Post phone number:</label>
            <input type="text" name="post-phone-number" id="post-phone-number" placeholder="Post phone number" required/> -->

            <button type="submit" name="register">Submit</button>

            <button >Already a member? <a href="login.php">sign in</a></button>
        </form>
    </main>

</div>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['token'])){
    $token=$_GET['token'];

   if($registerController->checkTokenUserActivate($token)){
      echo "Registration succesfully!";
   }

}
