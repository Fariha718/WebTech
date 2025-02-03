<?php
require '../control/regcontrol.php'; 
?>
<!DOCTYPE html>

<head>

    <title>Cashier Registration Page</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1 class="head">Cashier Registration Page</h1>

    <form action="" method="POST" enctype="multipart/form-data" onsubmit="return validation()">  
        <fieldset class="center">
            <legend class="leg">Cashier Information</legend>
            <table>
                <tr>
                    <td><label for="fname">Full name: </label></td>
                    <td><input type="text" id="fname" name="fname" ><br></td>
                    <td><p id="fnameError"></p></td>
                </tr>

                <tr>
                    <td><label for="uname">User name: </label></td>
                    <td><input type="text" id="uname" name="uname" ><br></td>
                    <td><p id="unameError"></p></td>
                </tr>

                <tr>
                    <td><label for="email">Email: </label></td>
                    <td><input type="email" id="email" name="email" ><br></td>
                 </tr>

                <tr>
                    <td><label for="phone">Phone: </label></td>
                    <td><input type="tel" id="phone" name="phone" ><br></td>
                </tr>

                <tr>
                    <td><label for="password">Password: </label></td>
                    <td><input type="password" id="pwd" name="pwd" ><br></td>
                    <td><p id="pwdError"></p></td>
                </tr>

                <tr>
                    <td><label for="confirm_password">Confirm Password: </label></td>
                    <td><input type="password" id="cpwd" name="cpwd" ><br></td>
                </tr>

                <tr>
                    <td><label for="role">Role/Position: </label></td>
                    <td>
                        <select name="role" id="role" >
                            <option value="" disabled selected>Select role/position</option>
                            <option value="salesman">Salesman</option>
                            <option value="cashier">Cashier</option>
                            <option value="supervisors">Supervisors</option>
                            <option value="store_manager">Store Manager</option>
                            <option value="inventory_manager">Inventory Manager</option>
                            <option value="product_manager">Product Manager</option>
                        </select><br>
                    </td>
                </tr>

                <tr>
                    <td><label>Branch Location: </label></td>
                    <td>
                        <input type="radio" name="bl" value="dhaka" ><label for="dhaka">Dhaka</label><br>
                        <input type="radio" name="bl" value="rajshahi" ><label for="rajshahi">Rajshahi</label><br>
                        <input type="radio" name="bl" value="kushtia" ><label for="kushtia">Kushtia</label><br>
                        <input type="radio" name="bl" value="sylhet" ><label for="sylhet">Sylhet</label><br>
                        <input type="radio" name="bl" value="barishal" ><label for="barishal">Barishal</label><br>
                    </td>
                </tr>

                <tr>
                    <td><label for="profilepic">Upload Profile Picture: </label></td>
                    <td><input type="file" id="profilepic" name="profilepic"><br></td>
                </tr>

                <tr>
                    <td><label for="sts">Shift Timing Selector: </label></td>
                    <td>
                        <select name="sts" id="sts" >
                            <option value="" disabled selected>Select Shift Timing</option>
                            <option value="morning_shift">Morning Shift: 8am - 3pm</option>
                            <option value="afternoon_shift">Afternoon Shift: 3pm - 8pm</option>
                        </select><br>
                    </td>
                </tr>

            </table>
        </fieldset>

        <input type="submit" value="Submit">
        <input type="reset" value="Clear Form">
        <p class="head">Already have an account?</p>
        <a href="../view/login.php">login here</a>
    </form>
    <script src="../js/cashier_val.js"></script>
</body>
</html>
     
