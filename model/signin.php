<?php
include 'db.php';
class msignIn{
    private $conn;
    public function __construct()
    {
        $db = new db();
        $this->conn=$db->getConnection();  
    }
    public function getLogin($email,$pass)
    {
        $sql="select * from `user` where email='$email' and password='$pass'";
        $res=mysqli_query($this->conn,$sql);
        $count=mysqli_num_rows($res);
        if($count>0)
        {   $result = array();
            while($row=mysqli_fetch_assoc($res))
            {
                array_push($result,$row);
            }
            return $result;
        }
        else
        {
            return false;
        }
    }
}

?>