let todotitle = document.getElementById("todotitle");
let todosubject = document.getElementById("todosubject");
const showtitle = document.getElementById("showtitle");
const showsubject = document.getElementById("showsubject");
//submit btn
const submitBtn = document.getElementById("submitbtn");
const todolist = document.getElementById("todolist");

const localstore = [];

//list creat and delete operation 
const todoEntery = (todotitle, todosubject, a) => {
    const addDiv = document.createElement("div");
    addDiv.classList.add("listcontainer");
    todolist.appendChild(addDiv);
    addDiv.innerHTML = `<h2 class="showtitle">${todotitle}</h2><p class="showSubject">${todosubject}</p> `;

    let deleteBtn = document.createElement("button");
    deleteBtn.classList.add("fa", "fa-trash", "delete");
    deleteBtn.setAttribute("id", a);

    deleteBtn.addEventListener("click", () => {
        let keyid = deleteBtn.getAttribute("id");
        //let storageid = localstore[0].key;
        //console.log(keyid);
        for (let i = 0; i < localstore.length; i++) {
            if (localstore[i].key == keyid) {
                //let localkey = localstore[i].key;
                 //console.log("key val", keyid);
                let removedarr = localstore.filter(function (letter) {
                    //console.log("letter key ",letter.key);
                    //console.log("keyid",keyid);
                    console.log(letter.key !== keyid);
                });
                console.log(removedarr);
            }

        }
        // const arrayWithoutD = arrayOfLetters.filter(function (letter) {
        //     return letter !== 'd';
        // });
        // if (keyid == loalstore.indexOf(a)) {
        //     console.log("off");
        // }
    });
    addDiv.appendChild(deleteBtn);
    document.getElementById("todolist").appendChild(addDiv);
};

submitBtn.addEventListener("click", () => {

    if (todotitle.value === "" || todosubject.value === "") {
        alert("Enter Some Title And Value");

    }
    else {
        let a = new Date().getTime();
        localstore.push({
            "key": a,
            "title": todotitle.value,
            "subject": todosubject.value
        });
        localStorage.setItem('todo', JSON.stringify(localstore));
        todoEntery(todotitle.value, todosubject.value, a);
    }


    todotitle.value = "";
    todosubject.value = "";

});
let storage = localStorage.getItem('list');
console.log(storage);
console.log(localstore);