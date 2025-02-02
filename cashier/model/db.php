<?php

class mydb {

    function openCon(){
        $dbhost = "localhost";
        $dbusername = "root";   // Database username (default for XAMPP)
        $dbpassword = "";       // Database password (empty for XAMPP by default)
        $dbname = "cashier";     // Your database name

        // Create connection
        $connobject = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

        // Check connection
        if ($connobject->connect_error) {
            die("Connection failed: " . $connobject->connect_error);
        }

        return $connobject;    
    }

    // Function to add cashier to the database (now using regs table)
    function addCashier($regs, $fname, $uname, $password, $email, $phone, $role, $Branch_Location, $Shift_Timing, $connobject) {
        // SQL query to insert cashier details into the database (using regs table)
        $sql = "INSERT INTO $regs (fname, uname, password, email, phone, role, Branch_Location, Shift_Timing) 
                VALUES ('$fname', '$uname', '$password', '$email', '$phone', '$role', '$Branch_Location', '$Shift_Timing')";
        
        return $connobject->query($sql);
    }

    // Function to validate cashier login
    function login($table, $uname, $password, $connobject) {
        $sql = "SELECT uname, password FROM $table WHERE uname='$uname' AND password='$password'";
        $result = $connobject->query($sql);
        return $result;
    }
}
?>

