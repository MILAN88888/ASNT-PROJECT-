<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/header.css">
    <script src="../bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.6.0.min.js"></script>
    
</head>
<body>
<nav id="nav"class="navbar navbar-expand-lg navbar-light">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a id="asnt" class="navbar-brand ml-2 " href="#">ASNT &nbsp;PROJECT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <?php if(!isset($_SESSION['email'])){ ?>
      <li class="nav-item">
        <a class="nav-link" id="signin" href="#">SignIn</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " id="signup" href="#">Signup</a>
      </li>
    </ul>
    <?php } ?>
  </div>
  <?php if(isset($_SESSION['email']))
  { ?>
  <button class="btn btn-outline-success mr-5"  id= "profile" type="">Profile</button>&nbsp;
  <button class="btn btn-outline-success mr-5"   id= "logout"><a href="../view/logout.php">Logut</a></button>
  <?php } ?>
  </nav>
    
</body>
</html>