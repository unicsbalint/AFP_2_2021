<?php
include "header.php";
include "nav.php";
require_once "../Controller/LoginController.php";
$lgController = LoginController::getInstance();
$lgController->UserLogout();
?>

