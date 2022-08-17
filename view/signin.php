
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/signin.css">

    <script src="../js/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div id="container">
            <button id='close' > x</button>
            <div>
            <h1>Login Form</h1>
            <br>
            <form action="sign.php?type=signin" id='logform' autocomplete="off" method="POST">
                <lable>Email</lable>
                <br>
                <input type="email" id='email'name='email' required></input>
                <br>
                <span id="emailerror" ></span>
                <br>
                <label>Password</label>
                <br>
                <input type="password" id="pass" name='pass' required />
                <br>
                <span id="passerror"></span>
                <br>
                <br>
                <button  id="submit" name='submit'>Log in</button>
                
                <br>
                <p id='error'></p>
            </form>
            
            </div>
    </div>

    <script src="../js/signin.js"></script>
</body>
</html>