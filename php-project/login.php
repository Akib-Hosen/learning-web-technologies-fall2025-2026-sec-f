<?php
session_start();
if(isset($_SESSION['status']) === true){
    header('location: home.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | BestCart</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css" />
</head>

<body style="margin:0">

<nav class="pink">
    <a class="navLink" href="#"><i class="hgi hgi-stroke hgi-home-09"></i>Home</a>
    <a class="navLink" href="#"><i class="hgi hgi-stroke hgi-customer-service-01"></i>Help</a>
</nav>

<section class="logoArea">
    <div class="logo">
        <img src="cart.png" height="70">
        <h1 class="logoText">BestCart</h1>
    </div>
</section>

<section class="loginBanner">
    <div>
        <img src="loginpic.png" width="250">
    </div>

    <div>
        <h1 class="signBanner">Sign In</h1>
        <p class="signText">Access best products & deals in Bangladesh</p>
    </div>

    <div class="loginBox">
        <form action="loginCheck.php" method="POST">
            <p>Email / Phone</p>
            <input class="textField" type="text" name="username" placeholder="Email or Phone">

            <p>Password</p>
            <input class="textField" type="password" name="password" placeholder="Password">

            <button id="loginBtn" type="submit" name="submit">Sign In</button>
        </form>

        <div class="regLine">
            <p>New here?</p>
            <a class="Register" href="#">Register</a>
        </div>
    </div>
</section>

</body>
</html>