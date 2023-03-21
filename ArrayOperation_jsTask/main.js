//num input
const inputNumber = document.getElementById("inputNumber");
//str input
let inputsecArr = document.getElementById("inputStr");
//num btn 
const addBtn = document.getElementById("addInArrBtn");
//str btn 
let addInsecArrBtn = document.getElementById("addInsecArrBtn");

const showBtn = document.getElementById("showBtn");
const showDuplicatArr = document.getElementById("DuplicatArr");
const duplicatArrremove = document.getElementById("DuplicatArrremove");
const shuffle = document.getElementById("shuffle");
const concateArr = document.getElementById("concateArr");

const storeNumber = [];

const storeString = [];

addBtn.addEventListener("click", () => {
    if (inputNumber.value === "") {
        alert("Enter Value in Arra Null value Can not valid");
    }
    //storeNumber.push(JSON.stringify(inputNumber.value));
    storeNumber.push(inputNumber.value);

    console.table(storeNumber);
    inputNumber.value = "";
});

addInsecArrBtn.addEventListener("click", () => {
    if (inputsecArr.value === "") {
        alert("Enter Value in Arra Null value Can not valid");
    }
    //storeNumber.push(JSON.stringify(inputNumber.value));
    storeString.push(inputsecArr.value);

    console.table(storeString);
    inputsecArr.value = "";
});

function showstrarr(){
    let secarrshow = storeString.entries();
    for (const x of secarrshow) {
        document.getElementById("strShow").innerHTML += x +'<br>';
    }  
}


concateArr.addEventListener("click", () => {
    let concatarr = storeString.concat(storeNumber);

    for (let i = 0; i < concatarr.length; i++) {

        const para = document.createElement("p");
        para.innerHTML = `<p>Element ${[i]} = ${concatarr[i]}</p>`;
        document.getElementById("concatedarr").appendChild(para);
    }
});

showBtn.addEventListener("click", () => {

    for (let i = 0; i < storeNumber.length; i++) {

        const para = document.createElement("p");
        para.innerHTML = `<p>Element ${[i]} = ${storeNumber[i]}</p>`;
        document.getElementById("numberShow").appendChild(para);
    }
});

showDuplicatArr.addEventListener("click", () => {
    let index = 0, newArr = [];
    const length = storeNumber.length; // to get length of array
    function findDuplicates(arr) {
        for (let i = 0; i < length - 1; i++) {
            for (let j = i + 1; j < length; j++) {
                if (arr[i] === arr[j]) {
                    newArr[index] = arr[i];
                    index++;
                }
            }
        }
        document.getElementById('DuplicatArr').innerHTML = 'Duplicate values are: <b>' + newArr + '</b>';
    }
    findDuplicates(storeNumber);
});

duplicatArrremove.addEventListener("click", () => {

    function Duplicatesremove(arr) {
        let newArr = [];
        for (let i = 0; i < arr.length; i++) {
            if (newArr.indexOf(arr[i]) === -1) {
                console.log("arr", arr);
                newArr.push(arr[i]);
                console.log("newarr", newArr);
            }
            console.log(newArr);
        }
        document.getElementById('DuplicatArrremove').innerHTML = 'New array values are: <b>' + newArr + '</b>';
    }
    Duplicatesremove(storeNumber);
});

shuffle.addEventListener("click", () => {

    function shuffleArray(array) {
        return array.sort(() => Math.random() - 0.5);
    }
    document.getElementById('shuffle').innerHTML = 'Click me i will Suffle every time: <b>' + shuffleArray(storeNumber) + '</b>';
});





