<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 26.10.2018
 * Time: 21:59
 */

session_set_cookie_params(3600);
session_start();
require_once 'assets/php/config.php';
require 'assets/php/page.php';


$lgn = $_POST['lgn'];
$pass = $_POST['pass'];

$auth = new auth();
$auth->getUser();



class auth {
    private $lgn;
    private $pass;

    function getUser() {
        $lgn = $_POST['lgn'];
        $pass = $_POST['pass'];
        $db = conn();
        $query = "SELECT * FROM `user` WHERE `login` = '".$lgn."' AND  `pass` = '".$pass."'";
        $row = $db->query($query);

        if (!$row) {
            echo 1;
        }else
            foreach ($row as $data) {
          //  print_r($data);
        }
        if ($data == null) {
            echo 3;
        } else {
            if ($lgn == $data['login'] and $pass = $data['pass']) {
                $_SESSION['idlogin'] = $data['iduser'];
                $_SESSION['login'] = $data['login'];
                $page = new page();
                $page->mainPage();
            } else {
                echo 5;
            }
        }
    }

}

