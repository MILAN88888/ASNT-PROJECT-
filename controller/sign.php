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
    private $filename;
    private $filetmp;
    private $destination;

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
    public function insertImage()
    {       
            $email1 = $_GET['email'];
            if(isset($_POST))
            {
            $this->filename = isset($_FILES['img']['name']) ? $_FILES['img']['name']:null;
            $this->filetmp =isset($_FILES['img']['tmp_name']) ? $_FILES['img']['tmp_name']:null;
            $this->destination='../upload/img/'.$this->filename;
            move_uploaded_file($this->filetmp, $this->destination);
            $res=$this->obj->minsertImage($email1,$this->filename);

            if($res==true)
            header('location:../view/profile.php?msg1=succei');
            else
            header('location:../view/profile.php?msg2=faili');
            }
    }
    public function insertVedio()
    {       
            $email1 = $_GET['email'];
            if(isset($_POST))
            {
            $this->filename = isset($_FILES['vedio']['name']) ? $_FILES['vedio']['name']:null;
            $this->filetmp =isset($_FILES['vedio']['tmp_name']) ? $_FILES['vedio']['tmp_name']:null;
            $this->destination='../upload/vedio/'.$this->filename;
            move_uploaded_file($this->filetmp, $this->destination);
            $res=$this->obj->minsertVedio($email1,$this->filename);

            if($res==true)
            header('location:../view/profile.php?msg1=succei');
            else
            header('location:../view/profile.php?msg2=faili');
            }
    }
    public function insertDocument()
    {       
            $email1 = $_GET['email'];
            if(isset($_POST))
            {
            $this->filename = isset($_FILES['document']['name']) ? $_FILES['document']['name']:null;
            $this->filetmp =isset($_FILES['document']['tmp_name']) ? $_FILES['document']['tmp_name']:null;
            $this->destination='../upload/document/'.$this->filename;
            move_uploaded_file($this->filetmp, $this->destination);
            $res=$this->obj->minsertDocument($email1,$this->filename);

            if($res==true)
            header('location:../view/profile.php?msg1=succei');
            else
            header('location:../view/profile.php?msg2=faili');
            }
    }
    public function getImage()
    {
        $email=$_POST['email'];
        if(isset($_POST['email']))
        {
            $res1=$this->obj->mgetImage($email);
            if($res1!=false)
            {
                echo json_encode($res1);
            }
        }
    }
    public function getVedio()
    {
        $email=$_POST['email'];
        if(isset($_POST['email']))
        {
            $res1=$this->obj->mgetVedio($email);
            if($res1!=false)
            {
                echo json_encode($res1);
            }
        }
    }
    public function getDocument()
    {
        $email=$_POST['email'];
        if(isset($_POST['email']))
        {
            $res1=$this->obj->mgetDocument($email);
            if($res1!=false)
            {
                echo json_encode($res1);
            }
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
    if($_GET['type'] && $_GET['type']=='image')
    {
        $cobj->insertImage();
    }
    if($_GET['type'] && $_GET['type']=='vedio')
    {
        $cobj->insertVedio();
    }
    if($_GET['type'] && $_GET['type']=='document')
    {
        $cobj->insertDocument();
    }
    if($_GET['type'] && $_GET['type']=='getimage')
    {
        $cobj->getImage();
    }
    if($_GET['type'] && $_GET['type']=='getvedio')
    {
        $cobj->getVedio();
    }
    if($_GET['type'] && $_GET['type']=='getdocument')
    {
        $cobj->getDocument();
    }
}
?>
