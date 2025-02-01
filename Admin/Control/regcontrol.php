<?php
include '../model/db.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $hasError=0;

$fname = $_REQUEST["fname"];
$lname = $_REQUEST["lname"];
$uname = $_REQUEST["uname"];

if(empty($fname))
{
    echo "Please enter a first name";
    $hasError++;
}
else{
    echo $fname;
}
echo  "<br>";
if(empty($lname))
{
    echo "Please enter a last name";
    $hasError++;
}
else{
    echo $lname;
}
echo  "<br>";

if(empty($uname) ){
    echo "Enter a Valid Username";
    $hasError++;
    }
    else{
        echo $uname ;
    }
    echo  "<br>";
    if($hasError>0){
        echo "Enter valid data";
    }
    else{
        $mydb=new mydb();
    $conobj=$mydb->openCon();
    $result=$mydb->addAdmin("admin",$fname,$lname,$_REQUEST["adrs"],$_REQUEST["email"],$_REQUEST["phone"],$_REQUEST["gender"],
    $_REQUEST["dob"],$_REQUEST["nid"],$_REQUEST["emci"],$uname,$_REQUEST["pass"],$_REQUEST["joindate"],$conobj );
        header("Location: ../view/login.php"); 
    }
    
}
?>