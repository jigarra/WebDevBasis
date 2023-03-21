$(document).ready(function () {
  //search data
  $("#myInput").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });
});
//create input field
function createNew() {
  var data = `
  <div class="trow d-flex align-items-center col-10" id="new-input-field">
  <header class="col-2">
  <h5>Enter Data</h5>
</header>
    <div class="col-2 mb-3 me-3">
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="Name" placeholder="Enter Name" required>
                        <p class="error"></p>
                    </div>
                    <div class="col-2 mb-3 me-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" name="age" id="age" placeholder="Enter Your age.." required>
                        <p class="error"></p>
                    </div>
                    <div class="col-2 mb-3 me-3">
                        <label for="fee" class="form-label">Fee</label>
                        <input type="number" class="form-control" name="fee" id="fee" placeholder="Enter Fees" required>
                        <p class="error"></p>
                    </div>
                    <div class="col-2 mb-3 me-3">
                        <label for="subject" class="form-label">Subject</label>
                        <select class="form-control subject" name="subject" id="subject" required>
                            <option value="">Select one</option>
                            <option value="Java">Java</option>
                            <option value="Python">Python</option>
                            <option value="Java script">Java script</option>
                        </select>
                        <p class="error"></p>
                    </div>
                   
    
    <button onClick="cancelAdd();" id="deletefield" class="btn btn-outline-secondary mt-3 rounded-circle"><i class="fa fa-trash"></i></button>
    
    </div>`;
  $("#input-field").append(data);
}
//remove Row
function cancelAdd() {
  $("#addfield").show();
  $("#new-input-field").remove();
}

$(function () {
  // $("input:blank").val();
});

//Insert student all data
function submitdata() {
  var classCount = $(".form-control").length;
  var errorcount = 0;

  $(".trow").each(function () {
    var errname = $(this).find("input[name=name]");
    var errage = $(this).find("input[name=age]");
    var errfees = $(this).find("input[name=fee]");
    var errsubject = $(this).find(".subject");
    $(errname).css("border-color", "red");
    $(errage).css("border-color", "red");
    $(errfees).css("border-color", "red");
    $(errsubject).css("border-color", "red");

    if ($.trim($(errname).val()) == 0) {
      $(errname).css("border-color", "red");
      errorcount = "error";
    } else {
      $(errname).css("border-color", "green");
      errorcount++;
    }

    if ($.trim($(errage).val()) == 0) {
      $(errage).css("border-color", "red");
      errorcount = "error";
    } else {
      $(errage).css("border-color", "green");
      errorcount++;
    }

    if ($.trim($(errfees).val()) == 0) {
      $(errfees).css("border-color", "red");
      errorcount = "error";
    } else {
      $(errfees).css("border-color", "green");
      errorcount++;
    }
    if ($(errsubject).val() == 0) {
      $(errsubject).css("border-color", "red");
      errorcount = "error";
    } else {
      $(errsubject).css("border-color", "green");
      errorcount++;
    }
    console.log(classCount);
    console.log(errorcount);
    if (errorcount == classCount) {
      // console.log(classCount);
      var dataarr = [];
      $(".trow").each(function () {
        var da = {
          name: $(this).find("#Name").val(),
          age: $(this).find("#age").val(),
          fees: $(this).find("#fee").val(),
          subject: $(this).find("#subject").val(),
        };
        if (Object.values(da.name).length > 2) {
          dataarr.push(da);
          console.log(Object.values(da).length);
        } else {
          console.log(Object.values(da).length);
        }
      });

      console.log(dataarr);
      $.ajax({
        type: "POST",
        url: "./connection/jsonsubmit.php",
        data: { mydata: dataarr },
        dataType: "json",
        beforeSend: function () {
          $("#submit").attr("disabled", "disabled");
        },
        success: function (response) {
          $(".statusMsg").html("");
          if (response.status == 1) {
            $(".statusMsg").html(
              '<p class="alert alert-success">' + response.message + "</p>"
            );
            window.location.href = "showdata.php";
          } else {
            $(".statusMsg").html(
              '<p class="alert alert-danger">' + response.message + "</p>"
            );
          }
          $("#submit").removeAttr("disabled");
        },
      });
      console.log("badhu = chhe ");
    } else {
      console.log("srkhu karo");
    }
  });
}
//Delete record
function deleteRecord(id) {
  console.log(id);
  if (confirm("Are you sure you want to delete this row?")) {
    $.ajax({
      url: "./connection/delete.php",
      type: "POST",
      data: "id=" + id,
      success: function () {
        $("#table-row-" + id).remove();
      },
    });
  }
}
let count = 0;
//Convert to input field
$(".editValues").click(function () {
  count += 1;
  console.log(count);
  if (count === 2) {
    // come code
    console.log(count);
    $(".saveSingle").hide();
  }
  // $(".editValues").attr("disabled", "true");
  $(this)
    .parents("tr")
    .each(function () {
      var id = $(this).find("p.id");
      id.after("<p class='editid'/>");
      var idtxt = $(this).find("p.id").next();
      idtxt.text(id.html());
      id.hide();

      var name = $(this).find("p.editablename");
      name.after("<input class='nameEdited' type='next' name='name'/>");
      var nametxt = $(this).find("p.editablename").next();
      nametxt.val(name.html());
      name.hide();

      var age = $(this).find("p.editableAge");
      age.after("<input class='ageEdited' type='number' max='85' min='10' name='age'/>");
      var agetxt = $(this).find("p.editableAge").next();
      agetxt.val(age.html());
      age.hide();

      var fees = $(this).find("p.editableFees");
      fees.after("<input class='feesEdited' type='number' name='fees'/>");
      var feestxt = $(this).find("p.editableFees").next();
      feestxt.val(fees.html());
      fees.hide();

      var subject = $(this).find("p.editableOption");
      subject.after(` <select class="form-control subjectEdited" name="subject[]" id="subject">
      <option value="">Select one</option>
      <option value="Java">Java</option>
      <option value="Python">Python</option>
      <option value="Java script">Java script</option>
  </select>`);
      var subjecttxt = $(this).find("p.editableOption").next();
      subjecttxt.val(subject.html());
      subject.hide();
      var editbtn = $(this).find(".editValues");
      editbtn.hide();
    });
  $(this).parents("tr").attr("class", "editabletr");
});
//Save Edited Data single edit
// function saveEditedData(id) {
//   const name = $(".nameEdited");
//   const age = $(".ageEdited");
//   const fees = $(".feesEdited");
//   const subject = $(".subjectEdited");
//   var formdata = new FormData();
//   formdata.append("name", name.val());
//   formdata.append("age", age.val());
//   formdata.append("fees", fees.val());
//   formdata.append("subject", subject.val());
//   formdata.append("id", id);
//   $.ajax({
//     type: "POST",
//     url: "./connection/editData.php",
//     data: formdata,
//     dataType: "json",
//     processData: false,
//     contentType: false,
//     success: function (response) {
//       $(".statusMsg").html("");
//       if (response.status == 1) {
//         $(".statusMsg").html(
//           '<p class="alert alert-success">' + response.message + "</p>"
//         );
//         $(".statusMsg").fadeOut(2000);
//         removeInput();
//       } else {
//         $(".statusMsg").html(
//           '<p class="alert alert-danger">' + response.message + "</p>"
//         );
//         $(".statusMsg").fadeOut(2000);
//       }
//     },
//   });
// }
//Updae All Data
function updateAll() {
  //value assign for desable save button
  count = 0;
  var alldatarr = [];
  $(".editabletr").each(function () {
    var updateval = {
      id: $(this).find(".editid").text(),
      name: $(this).find(".nameEdited").val(),
      age: $(this).find(".ageEdited").val(),
      fees: $(this).find(".feesEdited").val(),
      subject: $(this).find(".subjectEdited").val(),
    };
    alldatarr.push(updateval);
  });
  console.log(alldatarr);

  $.ajax({
    type: "POST",
    url: "./connection/editData.php",
    data: { updateData: alldatarr },
    dataType: "json",
    success: function (response) {
      $(".statusMsg").html("");
      if (response.status == 1) {
        $(".statusMsg").html(
          '<p class="alert alert-success">' + response.message + "</p>"
        );
        removeInput();
      } else {
        $(".statusMsg").html(
          `<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error</strong> ${response.message}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>`
        );
      }
    },
  });
}
// conver inputfield to TD
function removeInput() {
  $(".editabletr").each(function () {
    var name = $(this).find(".nameEdited");
    $(this).find(".editablename").text(name.val()).removeAttr("style");
    name.remove();

    var age = $(this).find(".ageEdited");
    $(this).find(".editableAge").text(age.val()).removeAttr("style");
    age.remove();

    var fees = $(this).find(".feesEdited");
    $(this).find(".editableFees").text(fees.val()).removeAttr("style");
    fees.remove();

    var subject = $(this).find(".subjectEdited");
    $(this).find(".editableOption").text(subject.val()).removeAttr("style");
    subject.remove();

    $(this).find(".id").removeAttr("style");
  });
  $(".editValues").removeAttr("style");
  $(".editabletr").attr("class", "datatable");
  $(".saveSingle").removeAttr("style");
  $(".editid").remove();
}
