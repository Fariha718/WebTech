function printText(){

    var text = document.getElementById("uname").value;
    document.getElementById("print").innerHTML=text;
}

function checkfname(){
    var fname = document.getElementById("fname").value;
    //const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if(fname.length < 3||fname==""){
        document.getElementById("fnameError").innerHTML="Enter a valid  First Name";
        return false;
    }
    else{
        document.getElementById("fnameError").innerHTML="";
        
    }
    return true;
}
function checklname() {
    var lname = document.getElementById("lname").value;
    if(lname.length < 3||lname==""){  
        document.getElementById("lnameError").innerHTML = "Enter a valid last name";
        return false;
    }
    else{
        document.getElementById("lnameError").innerHTML = "";
    }
    return true;
}
function checkemail(){
   var email = document.getElementById("email").value;
    const emailRegex = /^[a-zA-Z0-9._%+-]+@xyz+.com$/;

   if(!emailRegex.test(email)){
    document.getElementById("emailError").innerHTML="Enter a valid  Email";
        return false;
   }
   else{
    document.getElementById("emailError").innerHTML="";
}
return true;
}
function validPass(){
    var pass = document.getElementById("pass").value;
     const passRegex = /^(?=.*[A-Z0-9])(?=.*\d).{6,}$/;
 
    if(!passRegex.test(pass)){
     document.getElementById("passError").innerHTML="Enter a valid  Password(Must contain a number & 6 character long)";
         return false;
    }
    else{
     document.getElementById("passError").innerHTML="";
 }
 return true;
 }
 function checkCpass(){
    var cpass = document.getElementById("cpass").value;
    var pass = document.getElementById("pass").value;
     
 
    if(cpass==pass){
     document.getElementById("cpassError").innerHTML="";
         return true;
    }
    else{
     document.getElementById("cpassError").innerHTML="Passwords don't match";
     return false;
 }
 
 }

function validation(){
  
    if(checkfname()==false ||checklname()==false||checkemail()==false||validPass()==false||checkCpass()==false){
        return false;
    }
}

function searchUser() {
    var uname = document.getElementById("uname").value;

    if (uname.trim() === "") {
        document.getElementById("print").innerHTML = ""; // Clear results if empty
        return;
    }

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("print").innerHTML = xhr.responseText;
        }
    };

    xhr.open("GET", "../control/searchcontrol.php?uname=" + encodeURIComponent(uname), true);
    xhr.send();
}

