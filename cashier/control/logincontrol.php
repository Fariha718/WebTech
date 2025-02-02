
<?php
include '../model/db.php';
session_start();

if(isset($_POST['login'])){
$uname=$_POST["uname"];
$password=$_POST["pwd"];

$mydb= new mydb();
$conobj=$mydb->openCon();
$result=$mydb->login("regs",$uname , $password, $conobj);
if($result->num_rows > 0){
$_SESSION["uname"]=$uname;
header('Location: ../view/cashier_dashboard.php');
}
else{
    echo "Wrong credential";
}
}
?>