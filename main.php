<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 27.10.2018
 * Time: 8:21
 */
session_start();

require "assets/php/page.php";

$title = 'Главная';

$page = new page();

$user = $_SESSION['login'];
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <meta charset="utf8">
        <script src="assets/js/script.js"></script>
        <title> <?=$title?></title>
    </head>
    <body>
        <div class="mainFrame">
            <div class = "navigation">
                <ul class="nav">
                    <li>
                        <button class="menuMain" onclick="urlAction()">Главная</button>
                        <!--<a href = "" class="ssylka">Главная</a>-->
                    </li>
                    <li>
                        <button class="menuMain" onclick="urlAction()">Каталог</button>
                        <!--<a href = "#">Каталог</a>-->
                    </li>
                    <li>
                        <button class="menuMain" onclick="urlAction()">Поиск</button>
                        <!--<a href = "">Поиск</a>-->
                    </li>
                    <li>
                        <button class="menuMain" onclick="urlAction()">О нас</button>
                        <!--<a href = "">О нас</a>-->
                    </li>
                    <li>
                        <button class="menuMain" onclick="urlAction()"><?=$user?></button>
                        <!--<a href = ""><?=$user?></a>-->
                    </li>
                    <li>
                        <button class="menuMain" onclick="urlAction()">Выход</button>
                        <!--<a href = "">Выход</a>-->
                    </li>
                </ul>
            </div>
            <div class="content">

            </div>
            <div class="footer">

            </div>

        </div>
    </body>
</html>
