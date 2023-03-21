function grade() {
    let markes = [['English', 80], ['Science', 77], ['Social Science', 88], ['Math', 95], ['Hindi', 70]];
    let average = 0;

    for (const element of markes) {
        average += element[1];
        var avgmarks = (average / markes.length);
    }
    console.log("Average Is : " + (average) / markes.length);

    if (avgmarks < 60) {
        console.log("F grade");
    }
    else if (avgmarks < 70) {
        console.log("D grade");
    }
    else if (avgmarks < 80) {
        console.log("C grade");
    }
    else if (avgmarks < 90) {
        console.log("B grade")
    }
    else if (avgmarks < 100) {
        console.log("A grade")
    }
}

function today() {
    let day = new Date();
    console.log(day);
}


let is_weekend = function (day) {
    let dt = new Date(day);

    console.log(dt.getDay());

    if (dt.getDay() == 6 || dt.getDay() == 0) {
        return ("Wohooo this day is week end");
    }
    else {
        alert("This is not week end");
    }
}
//console.log(is_weekend(prompt("enter data")));

// referance : https://www.tutorialstonight.com/js/javascript-alphabet-pattern
function pyramid1() {
    let n = 5;
    let string = "";
    for (let i = 0; i < n; i++) {
        for (let k = 0; k < n - i; k++) {
            string += "*";
        }
        string += "\n";
    }
    console.log(string);
}

pyramid1();


function pyramid2() {
    let n = 5;
    let string = "";
    for (let i = 1; i < n; i++) {
        for (let j = 0; j < n - i; j++) {
            string += " "
        }
        for (let k = 0; k < 2 * i - 1; k++) {
            string += "*";
        }
        string += "\n";
    }
    console.log(string);
}
pyramid2();



function pyramid3() {
    let n = 3;
    let string = "";
    let counter = 1;
    for (let i = 1; i <= n; i++) {
        for (let j = 0; j < n - i; j++) {
            string += " "
        }
        for (let k = 0; k < 2 * i - 1; k++) {
            string += counter++;
        }
        string += "\n";
    }
    console.log(string);
}
pyramid3();

function pyramid4() {
    let n = 5;
    let string = "";
    let counter = 1;
    for (let i = 0; i < n; i++) {
        for (let j = 0; j < i; j++) {
            string += " "
        }
        for (let k = 0; k < 2 * (n - i) - 1; k++) {
            string += k + 1;
        }
        string += "\n";
    }
    console.log(string);
}
pyramid4();

const testnum = 10;
try {
    
    testnum = 15;
    console.log(testnum);
}
catch (err) {

    console.log(err);
}

let n=5;
let string = "";
for (let i = 0; i < n ;i++){
    string += "*";
    for( let j = 0; j < n ; j)
    {
        string+="*";

    }
    console.log(string);
}

