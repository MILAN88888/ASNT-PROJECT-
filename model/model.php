<?php
include 'db.php';
class sign{
    private $conn;
    public function __construct()
    {
        $db = new db();
        $this->conn=$db->getConnection();  
    }
    public function getMSignup($email,$pass,$fname,$lname,$phone,$address)
    {
        $sql = 'INSERT INTO user (fname,lname,email,`password`,phone_no,`address`) values ("'.$fname.'", "'.$lname.'","'.$email.'","'.$pass.'","'.$phone.'","'.$address.'")';
        $res=mysqli_query($this->conn,$sql);
        if($res)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getMLogin($email,$pass)
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