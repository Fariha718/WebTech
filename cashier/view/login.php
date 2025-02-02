<?php
include '../control/logincontrol.php';
?>

<html>
<head>
    <title>Cashier Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1 class="head">Cashier Login Page</h1>
    <form method="POST" action="">
    <fieldset class="center">
        <legend>Login</legend>
        <table>
<tr><td>            
<tr><td><label for="uname"> User name: </label></td>
<td><input type="text" id="uname" name="uname"></td></tr>
<tr><td><label for="password"> Password: </label></td>
<td><input type="password" id="pwd" name="pwd"></td></tr>
</table>
</fieldset>
<input type="submit" name="login" value="Login">
<p class="head">Don't have an account?</p>
<a href="../view/cashierreg.php">Register here</a>

</form>
</body>

</html>