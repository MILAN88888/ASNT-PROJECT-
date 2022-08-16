<?php
include 'db.php';
class msignUp{
    private $conn;
    public function __construct()
    {
        $db = new db();
        $this->conn=$db->getConnection();  
    }
    public function getLogin($email,$pass,$fname,$lname,$phone,$address)
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
}

?>