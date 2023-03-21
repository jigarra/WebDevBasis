$(document).ready(function () {

    $("button").on("click",function () {
        $(".text-2 , .text-3").addClass("bgcolortext1");
    });
    $("#show-p").click(function () {
        $("div").toggle("slow");
    });
    $("#show-p").mouseenter(function () {
        $("body").css("background-color", "beige");
    });
    $("#show-p").mouseleave(function () {
        $("body").css("background-color", "white");
    });
    $("#fname").focus(function () {

        $("small").css("display", "inline").fadeOut(1000);
        $("#fname").addClass("focusinput").removeClass("focusout");
    });
    $("#fname").focusout(function () {
        $("#fname").addClass("focusout");
    });
    $("#todo").focus(function () {
        $("#todo").val("I do..");
    });
    $("#showebtn").click(function () {
        var valstr = $("#textbox").val();
        $("#showebtn").html(valstr);
    });
    $("body").find(".text-4").css("border", "1px solid red");

    $("#addlist").click(function () {

        $("ol").append("<li>add text using append</li>");
    });
    $("#addlist").click(function () {
        $("ol").prepend("<li>i am Prepend</li>")
    })
    $("#changefont").click(function () {
        $("p").each(function () {
            $(this).toggleClass("fontchange");
        });
    });
});


$(document).ready(function () {
    $(window).scroll(function () {
        $("small").css("display", "inline");
        $("iframe").css("background-color", "skyblue");
        $("body").css("background-color", " rgb(243, 255, 187)")
        // $(".mainbody").css("display","none");
    });
});


