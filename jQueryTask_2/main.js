$(document).ready(function () {
    $("#selectall").click(function () {
        $(".form-check-input").prop('checked', $(this).prop('checked'));
        
    });
    $(".form-check-input").on("change", (function () {

        if (!$(this).prop("checked")) {
            $("#selectall").prop('checked', false);

        }
        else if ($(".form-check-input:checked").length == $('.form-check-input').length) {
            $("#selectall").prop('checked', true);
        }
    }));

    $("#check-btn").click(function () {
        var tech = [];
        $.each($("input[name='checkboxtype']:checked"), function () {
            tech.push($(this).val());
        });
        $("#boxval").html('');
        for (const i in tech) {
            $("#boxval").append(`<p>${tech[i]}</p>`);
        } 
    });

    $(".arraydisplay").click(function () {
        var array1 = [1, 2, 3];
        $(".arraydisplay").text(array1);
        $("#arraytype").append($.isArray(array1));
    });
});

$(document).on("click", ".ajexbtn", (function () {
    $.ajax({
        url: "ajex.txt", success: function (result) {
            $("#ajaxdata").html(result);
            alert(result);
        }
    });
}));

$(document).on("click", ".ajaxhtml", (function () {
    $.ajax({
        url: "index.html", success: function (e) {
            $("#ajaxhtml").html(e);
        }
    });
}));

$(document).on("mouseenter", ".card-text", (function () {
    $(".card-body").css({ "background-color": "black", "color": "white" });
}));

$(document).on("mouseout", ".card-text", (function () {
    $(".card-body").removeAttr("style");
}));

$(document).on("click", "#listclick", (function () {

    //var l = $("ul").text();
    $("li").each(function () {
        console.log($(this).text());
        $("#li-output").append(`<p>${$(this).text()}</p>`);
    });
}));