<?php
include "header.php";
include "nav.php";
require_once "../Controller/LoginController.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['loginSubmit'])) {
  $postData = [
    'email' => $_POST['userEmail'],
    'password' => $_POST['userPassword']
  ];

  $lgController = new LoginController;

  if (empty($postData['email']) || empty($postData['password'])) {
    echo "<script>alert('Missing details!');</script>";
  } else if (!$lgController->UserLogin($postData['email'], $postData['password'])) {
    echo "<script>alert('Wrong user details!');</script>";
  }

  $postData['password'] = "";
}
?>



<div style="display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;">

<div style="padding: 10; background-color: light">
<form method="post">
  <div class="form-group">
    <label for="userEmail">Email address</label>
    <input type="email" class="form-control" id="userEmail" name="userEmail" aria-describedby="emailHelp" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="userPassword">Password</label>
    <input type="password" class="form-control" id="userPassword" name="userPassword" placeholder="Password">
  </div>
  <button type="submit" name="loginSubmit" class="btn btn-primary">Log in</button>
</form>
</div>
</div>
