$(document).ready(function () {
    $("#animate-btn").click(function () {
        let height = $("#height-val");
        let width = $("#width-val");
        $(".card").height(parseInt(height.val()));
        $(".card").width(parseInt(width.val()));
    });

    //form validation 
    $("#error-name").hide();
    $("#error-email").hide();

    let name = $("input[name=fname]");
    function validname() {
        if (name.val() < 1) {
            $("#error-name").show();
            return false;
        }

    }
    let email = $("#email");
    let regex = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
    let validcheck = regex.test(email.val());
    function validemail() {
        if (!validcheck) {
            $("#error-email").show();
            return false;
        }
    }

    $("#submit-btn").click(function () {
        //name validation

        $("#error-email").hide();
        $("#error-name").hide();
        //console.log(validname() !== false && validemail() !== false);
       
        if (validname() !== false || validemail() !== false) {
            $("#tbody").append(`<tr><td>11</td><td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td><td>${name.val()}</td><td>${email.val()}</td></tr>`);
            name.val("");
            email.val("");
        }

        // $("#tbody").append(`<tr><td>11</td><td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td><td>${name.val()}</td><td>${email.val()}</td></tr>`);
        // name.val("");
        // email.val("");
    });
});


// $("#tbody").append(`<tr><td>11</td><td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td><td>${name.val()}</td><td>${email.val()}</td></tr>`);
// name.val("");
// email.val("");

const valFst = $("#val-fst").val();
const valSec = $("#val-sec").val();
//console.log(valFst.length);
//$(".btn-ope").attr("disabled", true);

if ((parseInt(valFst.length)) && (parseInt(valSec.length)) !== 0) {
    //console.log("is true");

    $(".input-sum").on("input", (function () {
        $(".btn-ope").attr("disabled", false);
        $("#btn-add").click(function () {
            //console.log((parseInt(valFst.val())) + (parseInt(valSec.val())));
            $("#ans").html((parseInt(valFst)) + (parseInt(valSec)));
        });
        $("#btn-sub").click(function () {
            //console.log(valFst.val() - valSec.val());
            $("#ans").html((parseInt(valFst)) - (parseInt(valSec)));

        });
        $("#btn-multi").click(function () {
            //console.log(valFst * valSec);
            $("#ans").html((parseInt(valFst)) * (parseInt(valSec)));

        });
        $("#btn-divi").click(function () {
            //console.log(valFst / valSec);
            $("#ans").html((parseInt(valFst)) / (parseInt(valSec)));

        });


    }));
}


$("input[name='error']").keyup(function () {
    let error = parseInt($("input[name='error']").val()) > 10;
    $(".input-error").removeClass("error");
    if (error == true) {
        $(".input-error").addClass("error");
    }
});

