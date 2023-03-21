
function root() {
    let num = document.getElementById("sqroot").value;
    let root = Math.sqrt(num);
    document.getElementById("sqrootr").innerHTML = root;
}

function swap() {
    let x = document.getElementById("num1").value;
    let num1 = parseInt(x);
    let y = document.getElementById("num2").value;
    let num2 = parseInt(y);
    num1 = num1 + num2;
    num2 = num1 - num2;
    num1 = num1 - num2;
    document.getElementById("swapans").innerHTML = num1 + " " + num2;
}
function checknum() {
    let num = document.getElementById("checknum").value;
    let checknum = parseInt(num);

    if (checknum > 0) {
        document.getElementById("checkans").innerHTML = "Your value is possitive";

    }
    else if (checknum < 0) {
        document.getElementById("checkans").innerHTML = "Your value is Negative";
    }
    else {
        document.getElementById("checkans").innerHTML = "This is number Zero";

    }
}

function LargNum() {
    const larg_num_1 = document.getElementById("larg_num_1").value;
    const larg_num_2 = document.getElementById("larg_num_2").value;
    const larg_num_3 = document.getElementById("larg_num_3").value;
    const larg_num = Math.max(larg_num_1, larg_num_2, larg_num_3);
    document.getElementById("larg_num").innerHTML = larg_num;
}

function NumPrime() {
    const prime_num = document.getElementById("NumPrime").value;
    let isPrime = true;

    if (prime_num == 1) {
        document.getElementById("num_prime_ans").innerHTML = "The number 1 is not a prime or not composit number"
    }
    else if (prime_num > 1) {
        for (let i = 2; i < prime_num; i++) {
            if (prime_num % i == 0) {
                isPrime = false;
                break;
            }

        }
        if (isPrime) {
            document.getElementById("num_prime_ans").innerHTML = "IS prime number ";
        }
        else {
            document.getElementById("num_prime_ans").innerHTML = "IS Not prime number ";
        }
    }
    else {
        document.getElementById("num_prime_ans").innerHTML = "Is Not prime number ";

    }
}

function MultiplicationTable() {

    const number = parseInt(prompt("Enter your number : "));
    for (let i = 1; i <= 10; i++) {
        const result = i * number;
        console.log(number + " * " + i + " = " + result);
        // for (let j = ans; j <= 10; j++) {
        //     let ans = document.createElement("ans").innerHTML = number + " *" + i + " =" + result;
        // }
    }
}

function CheckLastNumber() {
    const num1 = parseInt(prompt("enter Number 1"));
    const num2 = parseInt(prompt("enter Number 2"));
    const num3 = parseInt(prompt("enter Number 3"));

    let result1 = num1 % 10;
    let result2 = num2 % 10;
    let result3 = num3 % 10;

    if (result1 == result3 && result1 == result2) {
        alert("Lasrt degit is same ");
    }
    else {
        alert("Last degit is not same");
    }
}

function SortAlpha() {
    let str1 = document.getElementById("sortalpha").value;
    let sortstr = str1.split(' ').sort().join(' ');

    document.getElementById("sort_alph").innerHTML = sortstr;
}
function ReplaceWord() {
    let str = "hello world !";

    let newstr = str.replace("world", "good morning");
    document.getElementById("oldstr").innerHTML = str;
    alert(newstr);
}

function CheckOdjProperty() {
    let userInfo = {
        name: "jigar malani",
        age: "22",
        std: "MCA"
    };
    let propobj = userInfo.hasOwnProperty('hobby');

    document.getElementById("objprop").innerHTML = propobj;

    document.getElementById("objprint").innerHTML = userInfo["name"];

}

function ObjMearge() {
    let UserInfo = {
        name: "jigar",
        age: "22",
        std: "MCA"
    }
    let jobInfo = {
        Company: "Biztehcs",
        Department: "DYI"
    }

    let mearge = {
        ...UserInfo,
        ...jobInfo
    }
    document.getElementById("objmearge").innerHTML = mearge;
    let meargeobj = Object.assign(UserInfo, jobInfo);
    console.log(mearge);
    console.log(meargeobj);

}

function TrimStr() {

    let strwrite = "      Hello Good Morning Dear !  ..    .   ";
    document.getElementById("trimedstr").innerHTML = strwrite;
    console.log(strwrite);
    let trimstr = strwrite.trim();
    alert(trimstr);
    console.log(trimstr);
}

function Comparestr() {
    let str1 = "hei jigar";
    let str2 = "hei jigar";
    let finalstr = str1.localeCompare(str2);
    alert(finalstr);
}

function splitstrwith() {
    let newstr = document.getElementById("bigtext").value;
    let space = / /g;
    let splitstr = newstr.replace(space, ',');
    console.log(splitstr);
}

function dateformate() {
    let todayDate = new Date();

    let toDate = todayDate.getDate();
    let toMonth = todayDate.getMonth() + 1;
    let toyear = todayDate.getFullYear();

    console.log(toDate);
    console.log(todayDate);
    console.log(toMonth);
    console.log(toyear);
    let ddmmyy = toDate + '/' + toMonth + '/' + toyear;
    alert(ddmmyy);
}

function AddArr() {
    let arr1 = new Array();
    arr1.push = parseInt(document.getElementById("additem").value);
    console.log(arr1);
}

function Addobj()
{
    let arr = ['name' ,'age'];
    let  obj = {
        1 : 'jigar',
        2 : 'malani'
    }
    arr.push(obj);
    console.log(arr);
}
Addobj();


function Additem()
{
    let arr = ['name' ,'age'];
    
    arr.unshift('company add fsr unshift');
    arr.push('devision add last push');
    console.log(arr);
}
Additem();