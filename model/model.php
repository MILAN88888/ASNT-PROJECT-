<?php
include 'db.php';
class sign{
    private $conn;
    public function __construct()
    {
        $db = new db();
        $this->conn=$db->getConnection();  
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
    public function minsertImage($email1,$image)
    {
        $qry = "INSERT INTO `image` (`imagename`, `email`) VALUES ('$image', '$email1')";
        $rst = mysqli_query($this->conn, $qry);
        if($rst)
        {
            return true;
        }
        else{
            return false;
        }
    }
    public function minsertVedio($email1,$vedio)
    {
        $qry = "INSERT INTO `vedio` (`vedioname`, `email`) VALUES ('$vedio', '$email1')";
        $rst = mysqli_query($this->conn, $qry);
        if($rst)
        {
            return true;
        }
        else{
            return false;
        }
    }
    public function minsertDocument($email1,$document)
    {
        $qry = "INSERT INTO `document` (`documentname`, `email`) VALUES ('$document', '$email1')";
        $rst = mysqli_query($this->conn, $qry);
        if($rst)
        {
            return true;
        }
        else{
            return false;
        }
    }
    public function mgetImage($email)
    {
        $qry = "SELECT * FROM `image` WHERE email='$email'";
        $res=mysqli_query($this->conn,$qry);
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
    public function mgetVedio($email)
    {
        $qry = "SELECT * FROM `vedio` WHERE email='$email'";
        $res=mysqli_query($this->conn,$qry);
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
    public function mgetDocument($email)
    {
        $qry = "SELECT * FROM `document` WHERE email='$email'";
        $res=mysqli_query($this->conn,$qry);
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