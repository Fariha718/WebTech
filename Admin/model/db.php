<?php

class mydb{

    function openCon(){
        $dbhost="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="proj";
        $connobject=new mysqli($dbhost, $dbusername, $dbpassword,$dbname);
        return $connobject;    
        }
        function addAdmin($table,$fname,$lname,$adrs,$email,$phone,$gender,$dob,$nid,$emci,$uname,$pass,$joindate,$connobject )
        {
            $sql="INSERT INTO $table (fname,lname,adrs,email,phone,gender,dob,nid,emci,uname,pass,joindate) 
            VALUES ('$fname','$lname','$adrs','$email','$phone','$gender','$dob','$nid','$emci','$uname','$pass','$joindate')";
           return $connobject->query($sql);
           
            }
        function login($table, $uname, $pass, $connobject){
                $sql="SELECT uname, pass FROM $table
                WHERE uname='$uname' AND pass='$pass'";
                $result=$connobject->query($sql);
                return $result;
            }
        
            function showAllUsers($table, $conn) {
                $sql = "SELECT * FROM $table";
                $result = $conn->query($sql);
                return $result;
            }
        
            function search($table, $uname, $conn) {
                $sql = "SELECT * FROM $table WHERE uname LIKE '%$uname%'";
                $result = $conn->query($sql);
                return $result;
            }

        }
    
?>
