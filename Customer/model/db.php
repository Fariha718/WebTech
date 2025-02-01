<?php

class mydb{

    function openCon(){
$dbhost="localhost";
$dbusername="root";
$dbpassword="";
$dbname="supershop";
$connobject=new mysqli($dbhost, $dbusername, $dbpassword,$dbname);
return $connobject;    
}
function addAdmin($table,$fullname,$username,
$password,$email,$phone,$address,$gender,$membership,$payment,$cardnumber,$communication,
$connobject ){
    $sql="INSERT INTO $table (
    fullname,username,
password,email,phone,address,gender,membership,payment,cardnumber,communication) 
    VALUES 
    ('$fullname','$username',
'$password','$email','$phone','$address','$gender','$membership','$payment','$cardnumber','$communication')";
   return $connobject->query($sql);
   
  
}


function login($table, $username, $password, $connobject){
    $sql="SELECT username, password FROM $table
    WHERE username='$username' AND password='$password'";
    $result=$connobject->query($sql);
    return $result;
}

}






?>