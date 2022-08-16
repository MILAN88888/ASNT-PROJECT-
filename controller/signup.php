<?php
include '../model/signup.php';

class signUn
{   private $email;
    private $pass;
    private $fname;
    private $lname;
    private $phone;
    private $address;

    private $obj;
    private $res;
    public function __construct()
    {   
        $this->email=isset($_POST['email']) ? $_POST['email'] : null;
        $this->pass=isset($_POST['pass']) ? $_POST['pass'] : null;
        $this->fname=isset($_POST['fname']) ? $_POST['fname'] : null;
        $this->lname=isset($_POST['lname']) ? $_POST['lname'] : null;
        $this->phone=isset($_POST['phone_no']) ? $_POST['phone_no'] : null;
        $this->address=isset($_POST['address']) ? $_POST['address'] : null;
        $this->obj=new msignUp();
    }
    public function getLogin()
    {   
            $this->res=$this->obj->getLogin($this->email,$this->pass,$this->fname,$this->lname,$this->phone,$this->address);
            if($this->res==true)
            {   session_start();
                $arr=$this->res;
                // $msg=json_encode($this->res);
                $_SESSION['email']=$this->email;
                $_SESSION['fname']=$this->fname;
                $_SESSION['lname']=$this->lname;
                $_SESSION['phone']=$this->phone;
                $_SESSION['address']=$this->address;
                header('location:../view/profile.php?msg=sucess');
            }
            else
            {
                $msg='invalid registration';
                header('location:controller.php?msg=fail');
            }
    }
    
}
$signin=new signUn();
if(!empty($_POST))
{
$signin->getLogin();
}
?>
