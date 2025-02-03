<?php
include '../model/db.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $hasError=0;

$fname = $_REQUEST["fname"];
$uname = $_REQUEST["uname"];
$password = $_REQUEST["pwd"];

    // Validate Full Name
    if(empty($fname))
    {
        echo "Please enter a full name";
        $hasError++;
    }
    else{
        echo $fname;
    }
    echo  "<br>";
    if(empty($uname))
    {
        echo "Please enter a User name";
        $hasError++;
    }
    else{
        echo $uname;
    }
    echo  "<br>";
    
    if(empty($password) ){
        echo "Enter a Valid password";
        $hasError++;
        }
        else{
            echo $password ;
        }
        echo  "<br>";
        if($hasError>0){
            echo "Enter valid data";
        }
        else{
            $mydb=new mydb();
        $conobj=$mydb->openCon();
        $result=$mydb->addCashier("regs",$fname,$uname,$_REQUEST["pwd"],$_REQUEST["email"],$_REQUEST["phone"],$_REQUEST["Branch_Location"],
        $_REQUEST["Shift_Timing"],$_REQUEST["role"],$conobj );
            header("Location: ../view/login.php"); 
        }
        
    }
    ?>






