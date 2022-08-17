<?php
include 'header.php';
if(!isset($_SESSION['email']))
{
    header("location:../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="../css/profile.css">
</head>
<body>
    <div id="container">
    <?php  
    if(isset($_SESSION['email']))
    {   $arr=$_GET['msg'];
        // print_r($arr);
        $email = $_SESSION['email'];
        $name = $_SESSION['fname']." ".$_SESSION['lname'];
        $phone = $_SESSION['phone'];
        $address=$_SESSION['address'];
        echo "<table id='tbl'>
        <tr id='tr'><th>Name</th><td>$name</td></tr>
        <tr id='tr'><th>Email</th><td>$email</td></tr>
        <tr id='tr'><th>Phone No</th><td>$phone</td></tr>
        <tr id='tr'><th>Address</th><td>$address</td></tr>
        </table>";   
    } 
    ?>
    </div>
 <div id="container1"> 


 </div>
<div id="error">
<p id="demo_2">
    <?php
     if(isset($_GET['msg1'] )&&$_GET['msg1']=='succei' )
     {echo "add successfully";}
     if(isset($_GET['msg'] )&&$_GET['msg']=='sucess' )
     {echo "Welcome ".$_SESSION['fname'];}
    if(isset($_GET['msg2']) &&$_GET['msg2']=='faili' )
     {echo "Not added";}
     ?>
     <button id="btn2">x</button></p> 
</div>
    <div id="addImage">
        <form action="../controller/sign.php?type=image&email=<?php echo $email ?>" method="POST" enctype="multipart/form-data">
        <b><lable>Browser Image</lable></b><br>
        <input type="file" name="img" required >        
        <button type="submit" name="submit">upload</button>
        </form>
    </div>
    <div id="addVedio">
        <form  action="../controller/sign.php?type=vedio&email=<?php echo $email ?>"method="POST" enctype="multipart/form-data">
        <b><lable>Browser Video</lable></b><br>
        <input type="file" name="vedio" required/>
        <button type="submit"name="submit">upload</button>
        </form>
    </div> 
    <div id="addDocument" >
        <form action="../controller/sign.php?type=document&email=<?php echo $email ?>" method="POST" enctype="multipart/form-data">
        <b><lable>Browser Docuemnt</lable></b><br>
        <input type="file"  name="document" required/>
        <button type="submit" name="submit">upload</button>
        </form>
    </div>
<div id="buttons">
<button id="clickimage"onclick="imageclick('<?php echo $email; ?>')">Images</button>
<button id="clickimage"onclick="vedioclick('<?php echo $email; ?>')">Vedio</button>
<button id="clickimage"onclick="documentclick('<?php echo $email; ?>')">Document</button>
</div>
<div id="allimages">

</div>
<div id="allvedios">
    
</div>
<div id="alldocuments">
    
</div>
    <script src="../js/profile.js"></script>
   
</body>
</html>
<?php
include 'footer.php';
?> 

