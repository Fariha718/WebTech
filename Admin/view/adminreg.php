<?php
require '../control/regcontrol.php';
?>
<!DOCTYPE html>
    <head>
    <title>Admin Registration Page</title>
    <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
    <h1 class="head">Admin Registration Page</h1>
    <form action="" method="post" enctype="multipart/form-data" onsubmit="return validation()">
        <fieldset class="center">
        <legend> General Information </legend>
        <table>
        <tr><td><label for="fname"> First name:* </label></td>
        <td><input type="text" id="fname" name="fname"></td>
        <td><p id="fnameError"></p></td></tr>
        <tr><td> <label for="lname"> Last Name:* </label></td>
        <td><input type="text" id="lname" name="lname"></td>
        <td><p id="lnameError"></p></td></tr> 
        <tr><td> <label for="adrs"> Address: </label></td>
        <td><textarea name="adrs" rows="2" cols="21"></textarea></tr></td>
        <tr><td><label for="email"> Email:* </label></td>
        <td><input type="text" id="email" name="email"></td>
        <td><p id="emailError"></p></td></tr>
        <tr><td><label for="phone"> Phone: </label></td>
        <td><input type="number" id="phone" name="phone"></tr></td>
        <tr><td><label for="gender"> Gender: </label></td>
        <td> <select name="gender" id="gender">
        <option value="Select gender">Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option> </select></tr></td>
        <tr><td><label for="dob"> Date of birth: </label></td>
        <td><input type="date" id="dob" name="dob"></tr></td>
        <tr><td><label for="nid"> National ID(NID) number: </label></td>
        <td><input type="number" id="nid" name="nid"></tr></td>
        <tr><td> <label for="emci"> Emergency Contact Information: </label></td>
        <td><textarea name="emci" rows="2" cols="21"></textarea></tr></td>
        </table>
        </fieldset>
        <fieldset class="center">
        <legend> Account Information </legend>
        <table>
        <tr><td><label for="uname"> User name: </label></td>
        <td><input type="text" id="uname" name="uname"></tr></td>
        <tr><td><label for="pass"> Password:* </label></td>
        <td><input type="password" id="pass" name="pass"></td>
        <td><p id="passError"></p></td></tr>
        <tr><td><label for="cpass"> Confirm Password:* </label></td>
        <td><input type="password" id="cpass" name="cpass"></td>
        <td><p id="cpassError"></p></td></tr>
        <tr><td><label for="joindate">Joining Date (Month and Year):</label></td>
        <td><input type="month" id="joindate" name="joindate"></td></tr>
        </table>
        </fieldset>    
    <input type="submit" value="Proceed">
    <input type="reset" value="Clear form">
    <p class="head">Already have an acoount?</p> 
    <a href="../view/login.php" >Login here</a>
    
    </form>
    
    <script src="../js/jsval.js"></script>
    </body>
</html>