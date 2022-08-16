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
<body bgcolor="gray">
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

    <script src="../js/profile.js"></script>
</body>
</html>
<?php
include 'footer.php';
?> 

