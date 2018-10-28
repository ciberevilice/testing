<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 26.10.2018
 * Time: 21:30
 */
$title = "SiteName";
?>
    <head>
        <title><?=$title?></title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <meta charset="utf8">
    </head>
    <body class="pageAuth">
        <div class="authForm">
            <div class="logo">
                <img src="assets/img/logo.png" class="logoImg">
            </div>
            <form method="post" action="auth.php">
                <input type="text" name="lgn" placeholder="Введите логин" class="log" autofocus>
                <input type="password" name="pass" placeholder="Введите пароль" class="log">
                <input type="submit" value="Войти" class="authBtn">
            </form>
        </div>
    </body>
</html>
