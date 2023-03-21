function RemoveSpace() {
    let stringInput = "     Hellow Word       ";
    let TrimStr = stringInput.trim();
    console.log(stringInput);
    console.log(TrimStr);
}
RemoveSpace();

function NegativeStr() {
    let inputStr = document.getElementById("NewString").value;
    let replaceStr = inputStr.replace(" is", " is not ");


    alert(replaceStr);
}

function ReverceString() {
    let OldString = document.getElementById("OldString").value;
    let revString = "";

    for (let i = OldString.length - 1; i >= 0; i--) {
        //console.log(revString+=OldString[i]);
        revString += OldString[i];

    }
    return console.log(revString);
}

