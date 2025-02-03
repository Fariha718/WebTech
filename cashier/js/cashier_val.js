
function checkfname(){
    var fname = document.getElementById("fname").value;
   

    if(fname.length < 3||fname==""){
        document.getElementById("fnameError").innerHTML="Enter a valid  Full Name";
        return false;
    }
    else{
        document.getElementById("fnameError").innerHTML="";
        
    }
    return true;
}
function checkuname() {
    var uname = document.getElementById("uname").value;
    if(uname.length < 3||uname==""){  
        document.getElementById("unameError").innerHTML = "Enter a valid User name";
        return false;
    }
    else{
        document.getElementById("unameError").innerHTML = "";
    }
    return true;
}

function validPassword(){
    var password = document.getElementById("pwd").value;
     const passwordRegex = /^(?=.*[A-Z0-9])(?=.*\d).{6,}$/;
 
    if(!passwordRegex.test(password)){
     document.getElementById("pwdError").innerHTML="Enter a valid  Password(Must contain a number & 6 character long)";
         return false;
    }
    else{
     document.getElementById("pwdError").innerHTML="";
 }
 return true;
 }
 

function validation(){
  
    if(checkfname()==false ||checkuname()==false||validPassword()==false){
        return false;
    }
}
