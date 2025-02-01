<?php
include '../model/db.php';

if (isset($_GET['uname']) && !empty($_GET['uname'])) {
    $uname = $_GET['uname'];

    $mydb = new mydb();
    $conobj = $mydb->openCon();
    $result = $mydb->search("admin", $uname, $conobj);

    if ($result->num_rows > 0) {
        foreach ($result as $row) {
            echo "First name: " . $row["fname"] . "<br>";
            echo "Last name: " . $row["lname"] . "<br>";
            echo "Email: " . $row["email"] . "<br>";
            echo "User name: " . $row["uname"] . "<br>";
        }
    } else {
        echo "No user found";
    }
}
?>
