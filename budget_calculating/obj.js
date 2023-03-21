const budget = document.getElementById("budget-amount");
const expance = document.getElementById("expance-amount");
const expanceTitle = document.getElementById("title");

//button
const expancebtn = document.getElementById("expance-amt-submit");

var expacearr = [];

expancebtn.addEventListener("click", () => {

  let expancelist = {
    title: expanceTitle.value,
    amount: expance.value
  };

  expacearr.push(expancelist);

  console.log(expacearr);

  for (let i = 0; i < expacearr.length; i++) {
    localStorage.setItem("list", JSON.stringify(expacearr));
  }
  expance.value = "";
  expanceTitle.value = "";

});

let mysatorage = JSON.parse(localStorage.getItem("list"));
console.log(mysatorage);

/////////////////
// Set the date we're counting down to
budget.addEventListener("input", () => {

  var newtime = new Date().getMinutes() + 60;
  console.log("newtime", newtime);
  var countDownDate = new Date().getMinutes(newtime);
  console.log("countdown", countDownDate);

  var x = setInterval(function () {

    var now = new Date().getMinutes();
    console.log("now time", now);

    var distance = countDownDate - now;
    console.log("distance", distance);

    var second = Math.floor((distance % (1000 * 60)) / 1000);
    console.log(second);
    document.getElementById("demo").innerText = "countDownDate " + countDownDate + "  \second" + second;


  }, 1000);
});