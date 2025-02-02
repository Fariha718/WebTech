<?php
include '../model/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = []; // Array to store validation errors

    // Retrieve and sanitize inputs
    $fname = trim($_POST['fname'] ?? '');
    $uname = trim($_POST['uname'] ?? '');
    $password = $_POST['pwd'] ?? '';
    $cpwd = $_POST['cpwd'] ?? ''; // Confirm Password field
    $bl = $_POST['bl'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $role = $_POST['role'] ?? '';
    $sts = $_POST['sts'] ?? '';

    // Validate Full Name
    if (empty($fname)) {
        $errors[] = "Please enter your full name.";
    } elseif (strlen($fname) > 40) {
        $errors[] = "Full Name should not exceed 40 characters.";
    }

    // Validate Username
    if (empty($uname)) {
        $errors[] = "Please enter your username.";
    } elseif (strlen($uname) > 40) {
        $errors[] = "Username should not exceed 40 characters.";
    } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', $uname)) {
        $errors[] = "Username can only contain letters, numbers, and underscores.";
    }

    // Validate Password
    if (empty($password)) {
        $errors[] = "Please enter a password.";
    } elseif (strlen($password) < 6 || !preg_match('/[a-z]/', $password) || !preg_match('/[A-Z]/', $password) || !preg_match('/\d/', $password) || !preg_match('/[\W]/', $password)) {
        $errors[] = "Password must be at least 6 characters long, contain at least one lowercase letter, one uppercase letter, one number, and one special character.";
    }

    // Confirm Password Validation
    if ($password !== $cpwd) {
        $errors[] = "Passwords do not match.";
    }

    // Validate Branch Location
    if (empty($bl)) {
        $errors[] = "You must select a branch location.";
    }

    // Check if there are any errors
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        // Proceed to insert into database if no errors
        $mydb = new mydb(); 
        $conobj = $mydb->openCon(); 

        // Call addCashier method to insert data into the 'regs' table
        $result = $mydb->addCashier("regs", $fname, $uname, $password, $email, $phone, $role, $Branch_Location, $Shift_Timing, $conobj);

        if ($result) {
            header("Location: ../view/login.php");
            exit;
        } else {
            echo "<p style='color:red;'>Failed to register cashier.</p>";
        }
    }
}
?>






