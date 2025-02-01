<?php
include '../model/db.php';

$mydb = new mydb();
$conobj =$mydb->openCon();
$result = $mydb->showAllUsers("admin",$conobj);



?>