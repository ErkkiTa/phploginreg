<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registreerumine</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>Olete registreerinud endale konto.</h3>
<br/>Vajutage siia, et sisse logida <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>login/reg leht</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Kasutajanimi" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Parool" required />
<input type="submit" name="submit" value="Registreeru" />
</form>
</div>
<?php } ?>
</body>
</html>