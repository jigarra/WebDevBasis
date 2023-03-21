

function namefinput() {
    let fname = document.form1.fstname.value;
    if (fname.trim() == "") {
        document.getElementById("validfname").innerHTML = "<p style ='color:red;font-size:10px;'>is not valid name</p>";
    }
    else {
        document.getElementById("validfname").innerHTML = "<p style ='color:green;'>great name</p>";
    }
}

function namelinput() {
    let lname = document.form1.lstname.value;
    if (lname.trim() == "") {
        document.getElementById("validlname").innerHTML = "<p style ='color:red;font-size:10px;'>is not valid name</p>";
    }
    else {
        document.getElementById("validlname").innerHTML = "<p style ='color:green;font-size:10px;'>great name</p>";
    }
}


function MailValidation() {
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    let mailInput = document.form1.email.value;
    if (mailInput.match(validRegex)) {
        document.getElementById("validEmial").innerHTML = "<p style='color:green;font-size:10px;'>great.....!</p>";
        return true;
    }
    else {
        document.getElementById("validEmial").innerHTML = "<p style='color:red;font-size:10px;'> not valid</p>";
        return false;
    }
}

function passwordValidation() {
    let passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    let passw1 = document.form1.password1.value;
    let passw2 = document.form1.password2.value;

    if (passw1.match(passw) && passw2.match(passw)) {

        document.getElementById("validPassword").innerHTML = "<p style='color:green;'>strong and match</p>";
        if (passw1 == passw2) {
            document.getElementById("validPassword").innerHTML = "<p style='color:green;'>match</p>";
        }
        else {
            document.getElementById("validPassword").innerHTML = "<p style='color:green;'> not match</p>";
        }
    }
    else {
        document.getElementById("validPassword").innerHTML = "<p style='color:red;'>not strong does not match</p>";
    }
}
function incom(){
    let slider = document.form1.rangeincom.value;
    document.getElementById("demo").innerHTML=slider
}

