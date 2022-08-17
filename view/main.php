<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/main.css">
    <script src="../bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.6.0.min.js"></script>
</head>
<body style="background-color:gray;">

    <?php if(isset($_GET['msg']) && $_GET['msg'] == 'fail') {
    echo '<div id="msg"><span>Invalid credentials</span><button id="btn">x</button></div>
    ';
    } 
?>
<div id='maindiv'></div>
<center><h1 id="m">Hello Programmer Welcome !!</h1></center>
<br>
<center><p id= "b">We will rock together....</p></center>
<br>

<center><p id="a">Here, we can add images, vedio and document files</p></center>
</div>
<script src="../js/main.js"></script>
</body>
</html>