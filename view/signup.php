
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/signup.css">

    <script src="../js/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div id="containers">
            <button id='closes' > x</button>
            <div>
            <h1>Registration Form</h1>
            <br>
            <form action="signup.php" id='logforms' autocomplete="off" method="POST">
                <table>
                <tr><td>Fname</td><td><input type="text" id='fnames'name='fname' required/><span id="fnameerrors" ><br></span></td></tr>
                <tr><td>Lname</td><td><input type="text" id='lnames'name='lname' required/><span id="lnameerrors" ><br></span></td></tr>
                <tr><td>Email</td><td><input type="email" id='emails'name='email' required/><br><span id="emailerrors" ></span></td></tr>
                <tr><td>Password</td><td><input type="password" id="passs" name='pass'  required/><br><span id="passerrors"></span></td></tr>
                <tr><td>Confirm Password</td><td><input type="password" id="cpasss" name='cpass' required/><br><span id="cpasserrors"></span></td></tr>
                <tr><td>Phone no.</td><td> <input type="text" id="phone_nos" name="phone_no"required/> <br><span id="phoneerrors"></span></td></tr>
                <tr><td>Address</td><td><textarea type="text" id="addresss" name="address" required></textarea> <br><span id="addresserrors"></span></td></tr>
                </table>
                <button type="submit" id="submit" name='submit'>Log in</button>
                <p id='errors'></p>
            </form>
            
            </div>
    </div>

    <script src="../js/signup.js"></script>
</body>
</html>