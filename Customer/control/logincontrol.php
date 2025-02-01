<?php
include '../model/db.php';
session_start();

if(isset($_POST['login'])){
$username=$_POST["username"];
$password=$_POST["password"];

$mydb= new mydb();
$conobj=$mydb->openCon();
$result=$mydb->login("reg",$username , $password, $conobj);
if($result->num_rows > 0){
$_SESSION["username"]=$username;
echo "Logged in successfully";
header('Location: ../view/product.php');
}
else{
    echo "cant login";
}
}
?>