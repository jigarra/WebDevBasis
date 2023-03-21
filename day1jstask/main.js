function concat() {
    let val1 = prompt("Enter String 1: ");
    let val2 = prompt("Enter string 2: ");
    document.getElementById('string').innerHTML = val1 + ' ' + val2;
}

function reverse() {
    const fruits = ["Banana", "Orange", "Apple", "Mango"];
    let fruitsrev = fruits.reverse();
    console.log(fruitsrev);
    document.getElementById('revstr').innerHTML = fruitsrev;

}

function shortarr() {
    let points = [40, 100, 1, 5, 25, 10];
    points.sort(function (a, b) { return a - b });
    console.log(points);
    document.getElementById('revarr').innerHTML = points;

}

function rendomnum() {
    let max = prompt("Enter String 1: ");
    let min = prompt("Enter string 2: ");
    min = Math.ceil(min);
    max = Math.floor(max);
    let rendom = Math.floor(Math.random() * (max - min) + min);
    document.getElementById('rendom').innerHTML = rendom;

    console.log(rendom);
}

function ops() {
    const num1 = parseInt(prompt("Enter number 1:"));
    const num2 = parseInt(prompt("Enter number 1:"));
    let ans;
    if (num1 > num2) {
        ans = num1 + num2;
    }
    else if (num1 < num2) {
        ans = num1 * num2;
    }
    else {
        ans = num1 / num2;
    }
    console.log(ans);
    document.getElementById('ops').innerHTML = num1 + " or " + num2 + "=" + ans;
}

function nullish() {
    let name = undefined;
    let text = "missing"
    let ans = name ?? text;
    console.log(ans);
    document.getElementById('nullish').innerHTML = ans;
}

function day() {
    let day;
    switch (new Date().getDay()) {
        case 0:
            day = "sunday";
            break;
        case 1:
            day = "monday";
            break;
        case 2:
            day = "tuesday";
            break;
        case 3:
            day = "wednesday";
            break;
        case 4:
            day = "thursday";
            break;
        case 5:
            day = "friday";
            break;
        case 6:
            day = "saturday";
            break;
    }
document.getElementById("Demo").innerHTML = "Today is a " + day;
}
