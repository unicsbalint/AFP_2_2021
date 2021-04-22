<?php
include "header.php";
include "nav.php";

?>
<div id="frm">
    <link rel="stylesheet" href="css/registration.css">
    <div class="main-block">
        <h1>Registration</h1>
        <form method="post" class="register" name="registerForm">
            <label id="icon" for="email">Email: </label>
            <input type="text" name="email" id="email" placeholder="Email" required/>
            <label id="icon" for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Username" required/>
            <label id="icon" for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Password" required/>
            <label id="icon" for="re-password">Password again:</label>
            <input type="password" name="re-password" id="re-password" placeholder="Password" required/>
            <button type="submit">Submit</button>
        </form>
    </div>

</div>