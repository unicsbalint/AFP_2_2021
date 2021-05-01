<?php
include "header.php";
include "nav.php";
require_once "../Controller/LoginController.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['loginSubmit'])) {
  $postData = [
    'email' => $_POST['userEmail'],
    'password' => $_POST['userPassword']
  ];

  if (empty($postData['email']) || empty($postData['password'])) {
    echo "<script>alert('Missing details!');</script>";
  } else if (!UserLogin($postData['email'], $postData['password'])) {
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
<form>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="userEmail" aria-describedby="emailHelp" placeholder="Email cím">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="userPassword" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Log in</button>
</form>
</div>
</div>
