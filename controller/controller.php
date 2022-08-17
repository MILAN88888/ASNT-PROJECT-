<?php

class HomeController
{
    public function __construct()
    {
        include '../view/header.php';
        include '../view/signin.php';
        include '../view/signup.php';
        include '../view/main.php';
        include '../view/footer.php'; 
    }
}
$obj=new HomeController();
?>