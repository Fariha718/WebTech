<?php
include '../control/logincontrol.php';
?>

<html>

<body>
<div class="login-container">
<div class="login-box">

<form method="POST" action="">
    <link rel="stylesheet" type="text/css" href="../css/cus.css">
  
username: <input type="text" name="username"><br>
password: <input type="password" name="password"><br>
<input type="submit" class="btnsubmit" name="login" value="Login"><br>

<p>Don't Have an account?<a href="reg.php"> Sign Up</a> </p>
</form>
</div>
</div>
</body>

</html>