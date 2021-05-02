<?php 
require_once "../Controller/LoginController.php";
$lgController = new LoginController;

?>
<div class="navContainer">
    <div class="navbar">
        <!-- Csak akkor kéne megjeleníteni ezeket, ha a homepagen vagyunk, erre majd kell egy method -->
        <a class="nav-item active" id="modelS">MODEL S</a>
        <a class="nav-item active" id="model3">MODEL 3</a>
        <a class="nav-item active" id="modelX">MODEL X</a>
        <a class="nav-item active" id="modelY">MODEL Y</a>

        <!-- order.php csak bejelentkezés után jelenjen meg a navba -->
        <?php if ($lgController->IsUserLoggedIn()): ?>
        <a class="nav-item active" href="order/order.php">Order</a>
        <?php endif; ?>
        
        <a class="nav-item active" href="index.php">Home</a>

        <!-- Ha már be vagyunk jelentkezve ne jelenjen meg -->
        <?php if (!$lgController->IsUserLoggedIn()): ?>
        <a class="nav-item active" id="login" href="login.php">Log in</a> 
        <a class="nav-item active" id="register" href="registration.php">Register</a>
        <?php endif; ?>

        <?php if ($lgController->IsUserLoggedIn()): ?>
        <div><i class="fa fa-user-circle-o"></i> <?=$_SESSION['name']; ?></div>
        <a href="logout.php"><i class="fa fa-power-off"></i> Log out</a>      
        <?php endif; ?>
    </div>
</div>

