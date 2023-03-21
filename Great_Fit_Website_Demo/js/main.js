var email = localStorage.getItem("email");
var password = localStorage.getItem("passw1");



function loginform() {
    let validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    let passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;


    let loginemail = document.form1.loginemail.value;
    let passw1 = document.form1.password.value;

    if (loginemail.match(validRegex) && loginemail=== email) {
        document.getElementById("validEmial").innerHTML = "<p style='color:green;font-size:10px;'>great.....!</p>";

    }
    else {
        document.getElementById("validEmial").innerHTML = "<p style='color:red;font-size:10px;'> not valid</p>";
        return false;
    }

    if (passw1.match(passw) && passw1 === password) {

        document.getElementById("validPassword").innerHTML = "<p style='color:green;'>match</p>";

    }
    else {

        document.getElementById("validPassword").innerHTML = "<p style='color:red;'>does not match</p>";
        return false;
    }

}




function validationForm() {



    let fname = document.form1.fstname.value;
    let lname = document.form1.lname.value;

    let validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    let mailInput = document.form1.email.value;



    let phonevalid = document.form1.phone.value;
    let phoneno = /^\d{10}$/;

    let passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;

    let passw1 = document.form1.password1.value;
    let passw2 = document.form1.password2.value;



    if (fname.trim() === "") {
        document.getElementById("validfname").innerHTML = "<p style ='color:red;font-size:10px;'>is not valid name</p>";
        return false;
    }
    else {
        document.getElementById("validfname").innerHTML = "<p style ='color:green;'>great name</p>";

    }

    if (lname.trim() == "") {
        document.getElementById("validlname").innerHTML = "<p style ='color:red;font-size:10px;'>is not valid name</p>";
        return false;
    }
    else {
        document.getElementById("validlname").innerHTML = "<p style ='color:green;font-size:10px;'>great name</p>";
    }

    if (mailInput.match(validRegex)) {
        document.getElementById("validEmial").innerHTML = "<p style='color:green;font-size:10px;'>great.....!</p>";

    }
    else {
        document.getElementById("validEmial").innerHTML = "<p style='color:red;font-size:10px;'> not valid</p>";
        return false;
    }




    if (phonevalid.match(phoneno)) {
        document.getElementById("validPhone").innerHTML = "<p style='color:green;'>Yeah ...! That's great.</p>";
    }
    else {
        document.getElementById("validPhone").innerHTML = "<p style='color:red;'>not valid... !</p>";
        return false;
    }


    if (passw1.match(passw) && passw2.match(passw)) {

        document.getElementById("validPassword").innerHTML = "<p style='color:green;'>strong and match</p>";
        if (passw1 == passw2) {
            document.getElementById("validPassword").innerHTML = "<p style='color:green;'>match</p>";

        }
        else {
            document.getElementById("validPassword").innerHTML = "<p style='color:red;'> not match</p>";
            return false;
        }
    }
    else {

        document.getElementById("validPassword").innerHTML = "<p style='color:red;'>not strong does not match</p>";
        return false;
    }


    //localstorage 
    localStorage.setItem("firstname", fname);
    localStorage.setItem("lastname", lname);
    localStorage.setItem("email", mailInput);
    localStorage.setItem("phone", phonevalid);
    localStorage.setItem("passw1", passw1);
    localStorage.setItem("passw2", passw2);

}