<?php 

class db
{
    private $conn;
 
function __construct()
{      $servername = "localhost";
     $username = "root";
    $password = "";
   $database="asnt_project";   

    $this->conn = mysqli_connect($servername, $username, $password,$database);
    
}
function getConnection()
{
    return $this->conn;
}
}

?>