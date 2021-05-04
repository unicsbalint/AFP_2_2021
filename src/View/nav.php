<?php 
require_once "../Controller/LoginController.php";
$lgController = new LoginController;

?>

<!-- Áthelyeztem ide a js linkjét, mert máshol úgy sem lesz rá szükség! -->
<script src="./js/homepageScroller.js"></script>

<div class="navContainer">
    <div class="navbar">
        <!-- A modelsDivben van a MODEL választó menü, de csak ha a homepagen vagyunk -> homePageScroller.js-ben megtalálod a kódot hozzá -->
        <div id="modelsDiv"></div>

        <div style="margin-right: 10%; margin-left: 10%"></div>
        <li class="nav-item dropdown" style="list-style-type: none">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <!-- order.php csak bejelentkezés után jelenjen meg a navba -->
                    <?php if ($lgController->IsUserLoggedIn()): ?>
                        <a class="dropdown-item" href="order/order.php">Order</a>
                    <?php endif; ?>
                    
                    <a class="dropdown-item" href="index.php">Home</a>
                    
                    <!-- Ha már be vagyunk jelentkezve ne jelenjen meg -->
                    <?php if (!$lgController->IsUserLoggedIn()): ?>
                        <a class="dropdown-item" id="login" href="login.php">Log in</a> 
                        <a class="dropdown-item" id="register" href="registration.php">Register</a>
                    <?php endif; ?>
                    
                    <?php if ($lgController->IsUserLoggedIn()): ?>
                    <div class="dropdown-item"><i class="fa fa-user-circle-o"></i> <?=$_SESSION['name']; ?></div>
                        <a href="logout.php" class="dropdown-item"><i class="fa fa-power-off"></i> Log out</a>      
                    <?php endif; ?>
                </div>
        </li>      
    </div>
</div>

