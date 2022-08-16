<?php
include '../model/signin.php';

class signIn
{   private $email;
    private $pass;
    private $obj;
    private $res;
    public function __construct()
    {   
        $this->email=isset($_POST['email']) ? $_POST['email'] : null;;
        $this->pass=isset($_POST['pass']) ? $_POST['pass'] : null;;
        $this->obj=new msignIn();
    }
    public function getLogin()
    {   
            $this->res=$this->obj->getLogin($this->email,$this->pass);
            if($this->res!=false)
            {   session_start();
                $arr=$this->res;
                // $msg=json_encode($this->res);
                $_SESSION['email']=$arr[0]['email'];
                $_SESSION['fname']=$arr[0]['fname'];
                $_SESSION['lname']=$arr[0]['lname'];
                $_SESSION['phone']=$arr[0]['phone_no'];
                $_SESSION['address']=$arr[0]['address'];
                header('location:../view/profile.php?msg=sucess');
            }
            else
            {
                $msg='invalid credatials';
                header('location:controller.php?msg=fail');
            }
    }
    
}
$signin=new signIn();
if(!empty($_POST))
{
$signin->getLogin();
}

?>
hello