
<?php
include '../model/db.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $hasError=0;

$fullname = $_REQUEST["fullname"];
$username = $_REQUEST["username"];
$email = $_REQUEST["email"];

if(empty($fullname))
{
    echo "Please enter a first name";
    $hasError++;
}
else{
    echo $fullname;
}
echo  "<br>";
if(empty($username))
{
    echo "Please enter a last name";
    $hasError++;
}
else{
    echo $username;
}
echo  "<br>";

if(empty($email) ){
    echo "Enter a Valid Username";
    $hasError++;
    }
    else{
        echo $email ;
    }
    echo  "<br>";
    if($hasError>0){
        echo "Enter valid data";
    }
    else{
        $mydb=new mydb();
    $conobj=$mydb->openCon();
    $result=$mydb->addAdmin("reg",$fullname,$username,$_REQUEST["password"],$email,$_REQUEST["phone"],
    $_REQUEST["address"],
    $_REQUEST["gender"],$_REQUEST["membership"],$_REQUEST["payment"],$_REQUEST["cardnumber"],$_REQUEST["communication"],$conobj );

        header("Location: ../view/login.php"); 
    }
    
}
?>
