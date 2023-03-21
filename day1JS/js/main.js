window.alert('Are you a human ?');

function titlelarger() {
    document.getElementById('title').innerHTML = "Hello User";
    document.getElementById('title').setAttribute("class", "color_title")
}

function fun2() {
    let name = document.form1.name.value;
    let comment = document.form1.comment.value;

    document.getElementById('print').innerHTML = name;
    document.getElementById('print-com').innerHTML = comment;

}

function larg() {
    const num1 = parseFloat(prompt("Enter num:"));
    const num2 = parseFloat(prompt("enter sec num"));
    let largest;

    if (num1 >= num2) {
        largest = num1;
    }
    else if (num2 >= num1) {
        largest = num2;
    }
    else {
        console.log(num1 + 'and' + num2 + 'both are same');
    }
    console.log('larger num is ' + largest);
    document.getElementById('large').innerHTML = largest;


}

function typeofcheck() {
    let x = '';
    document.getElementById('type').innerHTML = x;

    return console.log(typeof x);
}


