function checkEmail() {
    var email = document.getElementById("email").value.trim();
    var emailRegex = /^[a-zA-Z0-9._%+-]+@xyz\.com$/;

    if (!emailRegex.test(email)) {
        document.getElementById("emailError").innerHTML = "Email must be in the format abc@xyz.com";
        return false;
    } else {
        document.getElementById("emailError").innerHTML = "";
    }
    return true;
}

function checkPassword() {
    var password = document.getElementById("pwd").value;
    
    if (password.length < 6) {
        document.getElementById("pwdError").innerHTML = "Password must be at least 6 characters long.";
        return false;
    } else {
        document.getElementById("pwdError").innerHTML = "";
    }
    return true;
}

function checkFullName() {
    var fname = document.getElementById("fname").value.trim();
    
    if (fname.length < 3) {
        document.getElementById("fnameError").innerHTML = "Full Name must be at least 3 characters long.";
        return false;
    } else {
        document.getElementById("fnameError").innerHTML = "";
    }
    return true;
}

function checkUsername() {
    var uname = document.getElementById("uname").value.trim();
    var unameRegex = /^[a-zA-Z0-9_]+$/;

    if (!unameRegex.test(uname) || uname.length < 3) {
        document.getElementById("unameError").innerHTML = "Username must be at least 3 characters and contain only letters, numbers, and underscores.";
        return false;
    } else {
        document.getElementById("unameError").innerHTML = "";
    }
    return true;
}

function validateForm() {
    if (checkEmail() && checkPassword() && checkFullName() && checkUsername()) {
        return true;
    }
    return false;
}
