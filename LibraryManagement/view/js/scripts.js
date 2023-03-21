$(document).ready(function () {
  $(function () {
    $("#register_form").validate({
      // Define validation rules
      rules: {
        firstname: {
          required: true,
          minlength: 2,
          normalizer: function (value) {
            return $.trim(value);
          },
        },
        LastName: {
          required: true,
          minlength: 2,
          normalizer: function (value) {
            return $.trim(value);
          },
        },
        email: {
          required: true,
          email: true,
        },
        profile: {
          required: true,
        },
        password1: "required",
        password2: {
          required: true,
          equalTo: "#password1",
        },
      },
      // Specify validation error messages
      messages: {
        firstname: {
          required: "Please provide a valid name.",
          minlength: "Please provide a valid name.",
        },
        LastName: {
          required: "Please provide a valid name.",
          minlength: "Please provide a valid name.",
        },
        email: {
          required: "Please enter your email",
          minlength: "Please enter a valid email address",
        },
        profile: {
          required: "Profile photo required",
        },
        password1: "Please enter password",
        password2: {
          required: "Profile photo required",
          equalTo: "Password Dose Not mathc",
        },
      },
      submitHandler: function () {
        ajexcall();
        // form.submit();
      },
    });
  });

  //register user Function
  function ajexcall() {
    const form = document.getElementById("register_form");
    $.ajax({
      type: "POST",
      url: "../Connect/database.php",
      data: new FormData(form),
      dataType: "json",
      contentType: false,
      cache: false,
      processData: false,
      beforeSend: function () {
        $("#submit").attr("disabled", "disabled");
      },
      success: function (response) {
        $(".statusMsg").html("");
        if (response.status == 1) {
          form.reset();
          $(".statusMsg").html(
            '<p class="alert alert-success">' + response.message + "</p>"
          );
          window.location.href = "../view/login.php";
        } else {
          $(".statusMsg").html(
            '<p class="alert alert-danger">' + response.message + "</p>"
          );
        }

        $("#submit").removeAttr("disabled");
      },
    });

    //check extention of image
    $("#profilephoto").change(function () {
      var file = this.files[0];
      var fileType = file.type;
      var match = ["image/jpeg", "image/png", "image/jpg"];
      if (
        !(fileType == match[0] || fileType == match[1] || fileType == match[2])
      ) {
        alert("Sorry, only JPG, JPEG, & PNG files are allowed to upload.");
        $("#profilephoto").val("");
        return false;
      }
    });
  }
});

//Login form Validaation and Ajex call
$(document).ready(function () {
  $(function () {
    $("#login_form").validate({
      // Define validation rules
      rules: {
        email: {
          required: true,
          email: true,
        },
        password: "required",
      },
      // Specify validation error messages
      messages: {
        email: {
          required: "Please enter your email",
          minlength: "Please enter a valid email address",
        },
        password: "Please enter password",
      },
      submitHandler: function () {
        logincall();
      },
    });

    //search bar
    $("#search1").on("keyup", function () {
      var value = $(this).val().toLowerCase();
      console.log(value);
      $(".card").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      });
    });
  });

  function logincall() {
    const form = document.getElementById("login_form");
    $.ajax({
      type: "POST",
      url: "../Connect/login.php",
      data: new FormData(form),
      dataType: "json",
      contentType: false,
      cache: false,
      processData: false,
      beforeSend: function () {
        $("#submit").attr("disabled", "disabled");
      },
      success: function (response) {
        $(".statusMsg").html("");
        if (response.status == 1) {
          if (response.redirect) {
            window.location.href = response.redirect;
          }
          form.reset();
          $(".statusMsg").html(
            '<p class="alert alert-success">' + response.message + "</p>"
          );
        } else {
          $(".statusMsg").html(
            '<p class="alert alert-danger">' + response.message + "</p>"
          );
        }

        $("#login").removeAttr("disabled");
      },
    });
  }
  //new Bookadd Validation
  $(function () {
    $("#add_book").validate({
      // Define validation rules
      rules: {
        bookname: {
          required: true,
          normalizer: function (value) {
            return $.trim(value);
          },
        },
        authorname: {
          required: true,
          normalizer: function (value) {
            return $.trim(value);
          },
        },
        
        discription: {
          required: true,
          normalizer: function (value) {
            return $.trim(value);
          },
        },
        addimage: {
          required: true,
        },
      },
      // Specify validation error messages
      messages: {
        bookname: {
          required: "Book name is required",
        },
        authorname: {
          required: "please add Author name",
        },
        discription: {
          required: "Write a Book discription",
        },
        addimage: {
          required: "choose image..",
        },
      },
      submitHandler: function () {
        addbook();
      },
    });
  });
  function addbook() {
    const form = document.getElementById("add_book");
    $.ajax({
      type: "POST",
      url: "../Connect/bookoperation.php",
      data: new FormData(form),
      dataType: "json",
      contentType: false,
      cache: false,
      processData: false,
      success: function (response) {
        $(".statusMsg").html("");
        if (response.status == 1) {
          window.scrollTo(0, 0);
          form.reset();
          
          $(".statusMsg").html(
            '<p class="alert alert-success">' + response.message + "</p>"
          );
        } else {
          window.scrollTo(0, 0);
          $(".statusMsg").html(
            '<p class="alert alert-danger">' + response.message + "</p>"
          );
        }
      },
    });
  }

  //Suggest book
  $(function () {
    $("#suggest_book").validate({
      // Define validation rules
      rules: {
        bookname: {
          required: true,
          normalizer: function (value) {
            return $.trim(value);
          },
        },
      },
      // Specify validation error messages
      messages: {
        bookname: {
          required: "Book name is required",
        },
      },
      submitHandler: function () {
        sugggestbook();
      },
    });
  });
  function sugggestbook() {
    const form = document.getElementById("suggest_book");
    $.ajax({
      type: "POST",
      url: "../Connect/suggestbook.php",
      data: new FormData(form),
      dataType: "json",
      contentType: false,
      cache: false,
      processData: false,
      success: function (response) {
        $(".statusMsg").html("");
        if (response.status == 1) {
          window.scrollTo(0, 0);
          form.reset();
          $(".statusMsg").html(
            '<p class="alert alert-success">' + response.message + "</p>"
          );
        } else {
          window.scrollTo(0, 0);
          $(".statusMsg").html(
            '<p class="alert alert-danger">' + response.message + "</p>"
          );
        }
      },
    });
  }

  $("#addimage, #addimagenew ,#suggestimage").change(function () {
    var file = this.files[0];
    var fileType = file.type;
    var match = ["image/jpeg", "image/png", "image/jpg"];
    if (
      !(fileType == match[0] || fileType == match[1] || fileType == match[2])
    ) {
      window.scrollTo(0, 0);
      alert("Sorry, only JPG, JPEG, & PNG files are allowed to upload.");
      $("#addimage, #addimagenew ,#suggestimage").val("");
      return false;
    }
    //bookimage function end
  });

  $(".editbutton").click(function () {
    $("#discription, #addition, #bookname").attr("contenteditable", "true");
  });
});

//image update function
function editform(id) {
  $("#editImg-" + id).submit(function (e) {
    e.preventDefault();
    var formdata = new FormData(this);
    $.ajax({
      type: "POST",
      url: "../Connect/editbook.php",
      data: formdata,
      dataType: "json",
      contentType: false,
      processData: false,
      success: function (response) {
        $("#showmsg").html("");
        if (response.status == 1) {
          window.scrollTo(0, 0);
          $("#showmsg").html(
            '<p class="alert alert-success">' + response.message + "</p>"
          );
          location.reload(true);
        } else {
          console.log(response);
          window.scrollTo(0, 0);
          $("#showmsg").html(
            '<p class="alert alert-danger">' + response.message + "</p>"
          );
        }
      },
    });
  });
}

//content update function
function editRow(editableObj) {
  $(editableObj).css("background", "#FFF");
}

function saveToDatabase(editableObj, column, id) {
  $(editableObj).css("background", "#FFF");
  $.ajax({
    url: "../Connect/editbook.php",
    type: "POST",
    data:
      "column=" + column + "&editval=" + $(editableObj).text() + "&id=" + id,
  });
  $("#discription, #addition, #bookname").removeAttr("contenteditable", "true");
}

//delete book in database function
function deleteRecord(id) {
  if (confirm("Are you sure you want to delete this row?")) {
    $.ajax({
      url: "../Connect/deletebook.php",
      type: "POST",
      data: "id=" + id,
      success: function () {
        $("#bookcard-" + id).remove();
      },
    });
  }
}

//take a book from student
function take_book(id) {
  console.log("id", id);
  $("#pickbook-" + id).on("submit", function (e) {
    e.preventDefault();
    var form = $("#pickbook-" + id);
    console.log("submit form");
    var takebook = new FormData(this);
    $.ajax({
      type: "POST",
      url: "../Connect/takebook.php",
      data: takebook,
      dataType: "json",
      async: false,
      contentType: false,
      processData: false,
      success: function (response) {
        $("#shomsg").html("");
        if (response.status == 1) {
          form[0].reset();
          window.scrollTo(0, 0);
          $("#shomsg").html(
            `<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success...!</strong>${response.message}
            <button type="button" onclick="(location.reload(true))"; class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>`
          );
          location.reload(true);
        } else {
          form[0].reset();
          window.scrollTo(0, 0);
          $("#shomsg").html(
            `<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>error...!</strong>${response.message}
            <button type="button" onclick="(location.reload(true))"; class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>`
          );
        }
      },
    });
  });
}

window.addEventListener("DOMContentLoaded", (event) => {
  // Toggle the side navigation
  const sidebarToggle = document.body.querySelector("#sidebarToggle");
  if (sidebarToggle) {
    // Uncomment Below to persist sidebar toggle between refreshes
    // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
    //     document.body.classList.toggle('sb-sidenav-toggled');
    // }
    sidebarToggle.addEventListener("click", (event) => {
      event.preventDefault();
      document.body.classList.toggle("sb-sidenav-toggled");
      localStorage.setItem(
        "sb|sidebar-toggle",
        document.body.classList.contains("sb-sidenav-toggled")
      );
    });
  }
});
