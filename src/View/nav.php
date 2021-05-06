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

                    <?php if ($lgController->IsUserLoggedIn()): ?>       
                        <div class="dropdown-item"><i style="color: gray" class="fa fa-user-circle-o"></i> <?=$_SESSION['name']; ?></div>      
                        <div class="dropdown-divider"></div>     
                    <?php endif; ?>

                    <a class="dropdown-item" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    
                      <!-- order.php csak bejelentkezés után jelenjen meg a navba -->
                    <?php if ($lgController->IsUserLoggedIn()): ?>
                        <a class="dropdown-item" href="myOrders.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> My orders</a>
                        <a class="dropdown-item" href="user/profile.php"><i class="fa fa-user" aria-hidden="true"></i> My profile</a>

                    <?php  endif; ?>
                    
                    <!-- Ha már be vagyunk jelentkezve ne jelenjen meg -->
                    <?php if (!$lgController->IsUserLoggedIn()): ?>
                        <div class="dropdown-divider"></div> 
                        <a class="dropdown-item" id="login" href="login.php"><i style="color: rgb(0, 66, 65)" class="fa fa-location-arrow" aria-hidden="true"></i></i> Log in</a> 
                        <a class="dropdown-item" id="register" href="registration.php"><i style="color: rgb(0, 66, 23)" class="fa fa-users" aria-hidden="true"></i> Sign up</a>
                    <?php endif; ?>
                    
                    <?php if ($lgController->IsUserLoggedIn()): ?>                  
                        <div class="dropdown-divider"></div> 
                        <a href="logout.php" class="dropdown-item"><i style="color: red" class="fa fa-power-off"></i> Log out</a>      
                    <?php endif; ?>
                </div>
        </li>      
    </div>
</div>

