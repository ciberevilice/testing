<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 27.10.2018
 * Time: 7:38
 */

class page
{
    function mainPage() {
        header('location: ../../main.php');
    }

    function badLogin() {
        header('location: ../../index.php');
    }

    function loginPage() {

    }
}