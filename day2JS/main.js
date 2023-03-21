let x = 10;
function check1() {
    let x = 20;
    return console.log(x);

}
console.log(x);

function show() {
    let value = prompt("Enter Value :");
    return console.log(value);
}

function type() {
    let str = parseInt(prompt("enter Number :"));
    return console.log(typeof str);
}

function bool() {

    const num1 = parseFloat(prompt("enter number :"));
    const num2 = parseFloat(prompt("Enter number: "));
    let ans = num1 > num2;
    return console.log(ans);
}

function exp() {
    let str = document.getElementById("expression").value;
    document.getElementById("print").innerHTML = eval(str);
}



let count = 0;
let click = document.getElementById("clickbtn");
let dispaly = document.getElementById("display");
let clickbtndecr = document.getElementById("clickbtndecr");
click.onclick = function () {
    count++;
    dispaly.innerHTML = count;
}
clickbtndecr.onclick = function () {
    count--;
    dispaly.innerHTML = count;
}




function evenodd() {
    let evenodd = parseInt(prompt("Enter Number :"));

    if (evenodd % 2 == 0) {
        document.getElementById("evenodd").innerHTML = "Hey your Number is even";

    }
    else {
        document.getElementById("evenodd").innerHTML = "Hey your Number is Odd";
    }

}

function sum() {
    const num1 = parseInt(prompt("Enter number :"));
    const num2 = parseInt(prompt("Enter sec number:"));

    let ans = num1 + num2;
    document.getElementById("sum").innerHTML = asn;
}
