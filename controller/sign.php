<?php
include '../model/model.php';

class csign
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
        $this->obj=new sign();
    }
    public function getLogin()
    {       $this->email=isset($_POST['email']) ? $_POST['email'] : null;;
            $this->pass=isset($_POST['pass']) ? $_POST['pass'] : null;;
            $this->res=$this->obj->getMLogin($this->email,$this->pass);
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
    public function getSignup()
    {       $this->email=isset($_POST['email']) ? $_POST['email'] : null;
            $this->pass=isset($_POST['pass']) ? $_POST['pass'] : null;
            $this->fname=isset($_POST['fname']) ? $_POST['fname'] : null;
            $this->lname=isset($_POST['lname']) ? $_POST['lname'] : null;
            $this->phone=isset($_POST['phone_no']) ? $_POST['phone_no'] : null;
            $this->address=isset($_POST['address']) ? $_POST['address'] : null;
            $this->res=$this->obj->getMSignup($this->email,$this->pass,$this->fname,$this->lname,$this->phone,$this->address);
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

$cobj=new csign();
if(!empty($_POST))
{
    if($_GET['type'] && $_GET['type']=='signin')
        $cobj->getLogin();
    if( $_GET['type'] && $_GET['type']=='signup')
        $cobj->getSignup();
}
?>
