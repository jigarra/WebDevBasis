function MirrorStr() {
    let str = document.getElementById("str").value;
    let ArrStrSplit = str.split("");
    let RevStr = ArrStrSplit.reverse();
    let ArrJoinStr = RevStr.join("");

    console.log(str + ArrJoinStr);
    document.getElementById("mirrorstr").innerHTML = str + ArrJoinStr;
}

function AlphabetOrder() {
    let alphabet = document.getElementById("alpha").value;
    let arrstraplit = alphabet.split("").sort().join("");
    console.log(arrstraplit);
    document.getElementById("alphastr").innerHTML = arrstraplit;
}

function UpperLetter() {
    let lowerStr = document.getElementById("lower").value;
    let arrstr = lowerStr.split(' ');
    let ArrSplit = [];

    for (let i = 0; i < arrstr.length; i++) {
        ArrSplit.push(arrstr[i].charAt(0).toUpperCase() + arrstr[i].slice(1));
    }
    let ans = ArrSplit.join(" ");
    console.log(ans);
    document.getElementById("upper").innerHTML = ans;

}

function Large_Word() {
    let Str = document.getElementById("largword").value;
    let Arrsplit = Str.split(" ");
    let ans = Arrsplit.reduce(function (a, b) {
        if (b.length > a.length) {
            return b;
        }
        else {
            return a;
        }
    }, "");
    console.log(Arrsplit);
    console.log(ans);
}

function Large_number_sort() {
    const arrnum1 = parseInt(document.getElementById("arrinput1").value);
    const arrnum2 = parseInt(document.getElementById("arrinput2").value);
    const arrnum3 = parseInt(document.getElementById("arrinput3").value);
    
    if(arrnum1<arrnum2 && arrnum1<arrnum3)
    {
        if(arrnum2<arrnum3)
        {
            console.log(arrnum1 , arrnum2 , arrnum3 );
        }
        else
        {
            console.log(arrnum1 , arrnum3 , arrnum2 );
        }
    }
    else if(arrnum2<arrnum1 && arrnum2<arrnum3)
    {
        if(arrnum1<arrnum3)
        {
            console.log(arrnum2 , arrnum1 , arrnum3 );
        }
        else
        {
            console.log(arrnum2 , arrnum3 , arrnum1 );
        }
    }
    else if(arrnum3<arrnum1 && arrnum3<arrnum2)
    {
        if(arrnum1<arrnum2)
        {
            console.log(arrnum3 , arrnum2 , arrnum1);
        }
        else
        {
            console.log(arrnum3 , arrnum2 , arrnum1 );
        }
    }
    

    let sortarr = [arrnum1, arrnum2, arrnum3];
    let ansarr = sortarr.sort((a, b) => b - a).reverse();
    return alert(ansarr);
}



function CheckOddEven() {
    let num = parseInt(document.getElementById("number").value);

    for (let i = 0; i <= num; i++) {
        if (i === 0) {
            console.log(i+  " Is zero");
        }
        else if (i % 2 === 0) {
            console.log(i + " Is Even");
        }
        else {
            console.log(i + " Is Odd");
        }
    }
}

