<?php
require '../control/regcontrol.php';
?>
<!DOCTYPE html>

<html>

<body>

<head>

<title>Customer Registration Page</title>

<link rel="stylesheet" type="text/css" href="../css/cus.css">

</head>

    <h1>Customer Registration Page</h1>

 <form action="" method="post" enctype="multipart/form-data" onsubmit="return validation()">


        <fieldset>

    <legend>Customer Information</legend>

    <table>

        <tr><td><label for="fullname"> Full name: </label></td>

        <td><input type="text" id="fullname" name="fullname"><br></tr></td>
        <td><p id="fullnameError"></p></td></tr>


        <tr><td><label for="username"> Username: </label></td>

<td><input type="text" id="username" name="username"><br></tr></td>
<td><p id="usernameError"></p></td></tr>



<tr><td><label for="password"> Password : </label></td>

<td><input type="password" id="password" name="password"><br></tr></td>
<td><p id="passwordError"></p></td></tr>


        <tr><td><label for="email"> Email: </label></td>

        <td><input type="text" id="email" name="email"><br></tr></td>
        <td><p id="emailError"></p></td></tr>


        <tr><td><label for="phone"> Phone: </label></td>

        <td><input type="number" id="phone" name="phone"><br></tr></td>

    

        <tr><td><label for="address"> Address: </label></td>

<td><input type="text" id="address" name="address"><br></tr></td>

<tr><td><label for="gender"> Gender: </label></td>

<td> <select name="gender" id="gender">

<option value="Select gender">Select Gender</option>

<option value="male">Male</option>

<option value="female">Female</option> </select></tr></td>
   

        <tr><td><label for="membership"> Membership Options: </label></td>

        <td> <select name="membership" id="membership">

        <option value="Membership ">Select Membership</option>

        <option value="General">General</option>

        <option value="Premium">Premium</option> </select></tr></td>


        <tr><td><label for="payment"> Payment Preference : </label></td>

        <td> <input type="radio" name="payment" id="payment" value="Cash">

            <label for="Cash"> Cash </label></td>

             <td> <input type="radio" name="payment" id="payment" value="Card">

             <label for="Card"> Card </label></tr></td>

             <tr><td><label for="cardnumber"> Card number(if chosen): </label></td>

<td><input type="number" id="cardnumber" name="cardnumber"><br></tr></td>


             <tr><td><label for="communication"> Communication Preference: </label></td>

        <td> <input type="checkbox" name="communication" id="communication" value="Daily Updates">

            <label for="daily"> Daily Updates </label> </td>

            <td> <input type="checkbox" name="communication" id="communication" value="Weekly Updates">

            <label for="weekly"> Weekly Updates </label> </td>

            <td> <input type="checkbox" name="communication" id="communication" value="Monthly Updates">

            <label for="monthly"> Monthly Updates </label></td>

    

    

</table>

</fieldset>

<input type="submit" class="centered btnsubmit"  value="Submit">

<input type="reset" class="btnreset" value="Clear form">
</form>



<script src="../jss/myjs.js"></script>
</body>
</html>