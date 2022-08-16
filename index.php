<?php
class index 
{
    public function __construct()
    {
       header('location:controller/controller.php'); 
    }
}
$obj = new index();

?>