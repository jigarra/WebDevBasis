//take input as amount
let budgetAmount = document.getElementById("budget-amount");
let expanceAmount = document.getElementById("expance-amount");

//buttons 
const budgetAmtBtn = document.getElementById("budget-amt-submit");
const expanceAmtBtn = document.getElementById("expance-amt-submit");

//title
const title = document.getElementById("title");
//list
const list = document.getElementById("list");
//giv out put on card view
const balance = document.getElementById("my-balance");
const myExpance = document.getElementById("my-expance");
const myBudget = document.getElementById("my-budget");


let tempAmount = 0;


budgetAmtBtn.addEventListener("click", () => {
    tempAmount = Math.round(budgetAmount.value);

    if (tempAmount == "" || tempAmount < 0) {
        alert("Enter Amount");
        return false;
    }
    else {

        myBudget.innerHTML = tempAmount;

        balance.innerText =tempAmount - myExpance.innerText;

        budgetAmount.value = "";

    }
});


const modifyElement = (element, edit = false) => {
    let parentDiv = element.parentElement;
    let currentBalance = balance.innerText;
    let currentExpense = myExpance.innerText;
    let parentAmount = parentDiv.querySelector(".amount").innerText;
    if (edit) {
        let parentText = parentDiv.querySelector(".title").innerText;
        title.value = parentText;
        expanceAmount.value = parentAmount;
    }
    balance.innerText = parseInt(currentBalance) + parseInt(parentAmount);
    myExpance.innerText = parseInt(currentExpense) - parseInt(parentAmount);
    parentDiv.remove();
};

const listCreator = (expancetitle, expanceValue) => {
    const addDiv = document.createElement("div");
    addDiv.classList.add("sublist");
    list.appendChild(addDiv);

    addDiv.innerHTML = `<p class="title">${expancetitle}</p><p class="amount">${expanceValue}</p>`;

    let editButton = document.createElement("button");
    editButton.classList.add("fa-solid", "fa-pen-to-square", "edit");
    editButton.style.fontSize = "1.2em";
    editButton.addEventListener("click", () => {
        modifyElement(editButton, true);
    });

    let deleteButton = document.createElement("button");
    deleteButton.classList.add("fa-solid", "fa-trash-can", "delete");
    deleteButton.style.fontSize = "1.2em";
    deleteButton.addEventListener("click", () => {
        modifyElement(deleteButton);
    });
    addDiv.appendChild(editButton);
    addDiv.appendChild(deleteButton);
    document.getElementById("list").appendChild(addDiv);
};


expanceAmtBtn.addEventListener("click", () => {

    if (!expanceAmount.value || !title.value || expanceAmount.value < 0) {
        alert("Input fild must be filled ....!");
        return false;
    }
    else {
        //count expance
        let expanceValue = parseInt(expanceAmount.value);
        //new expance+old expance
        let sum = parseInt(myExpance.innerText) + expanceValue;
        myExpance.innerText = sum;
        //totalbalance-allexpance
        const totalBalance = tempAmount - sum;
        //show final amount
        balance.innerText = totalBalance;

        //show list view 
        listCreator(title.value, expanceAmount.value);

        //clearinputfield

    }

});



