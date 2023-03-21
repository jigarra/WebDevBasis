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
  <div class="d-flex align-items-center col-10" id="new-input-field">
    <div class="col-2">
        <h5>Enter Data</h5>
    </div>
    <div class="col-2 mb-3 me-3">
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name[]" id="Name" placeholder="Enter Name">
                    </div>
                    <div class="col-2 mb-3 me-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" name="age[]" id="age" placeholder="Enter Your age..">
                    </div>
                    <div class="col-2 mb-3 me-3">
                        <label for="fee" class="form-label">Fee</label>
                        <input type="text" class="form-control" name="fee[]" id="fee" placeholder="Enter Fees">
                    </div>
                    <div class="col-2 mb-3 me-3">
                        <label for="subject" class="form-label">Subject</label>
                        <select class="form-select" name="subject[]" id="subject">
                            <option selected>Select one</option>
                            <option value="Java">Java</option>
                            <option value="Python">Python</option>
                            <option value="Java script">Java script</option>
                        </select>
                    </div>
                    <div class="col-2 mb-3 me-3">
                        <label for="profile" class="form-label">profile photo</label>
                        <input type="file" class="form-control" name="profile[]" id="profile" placeholder="profile">
                    </div>
    <div class="col-2 mb-3 me-3">
    <button onClick="cancelAdd();" id="deletefield" class="btn btn-outline-secondary mt-3 rounded-circle"><i class="fa fa-trash"></i></button>
    </div>
    </div>`;
  $("#input-field").append(data);
}

//remove Row
function cancelAdd() {
  $("#addfield").show();
  $("#new-input-field").remove();
}

//Insert student all data
function submitdata() {
  var dataarr = [];
  $(".trow").each(function () {
    var da = {
      name: $(this).find("#Name").val(),
      age: $(this).find("#age").val(),
      fees: $(this).find("#fee").val(),
      subject: $(this).find("#subject").val(),
    };
    dataarr.push(da);
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

//Convert to input field
$(".editValues").click(function () {
  $(".editValues").attr("disabled", "true");
  $(this)
    .parents("tr")
    .find("td.editablename")
    .each(function () {
      var html = $(this).html();
      var input = $('<input class="nameEdited" type="text"  name="name"/>');
      input.val(html);
      $(this).html(input);
    });
  $(this)
    .parents("tr")
    .find("td.editableAge")
    .each(function () {
      var html = $(this).html();
      var input = $('<input class="ageEdited" type="text"  name="age"/>');
      input.val(html);
      $(this).html(input);
    });
  $(this)
    .parents("tr")
    .find("td.editableFees")
    .each(function () {
      var html = $(this).html();
      var input = $(`<input class="feesEdited" type="number"  name="fees"/>`);
      input.val(html);
      $(this).html(input);
    });
  $(this)
    .parents("tr")
    .find("td.editableOption")
    .each(function () {
      var html = $(this).html();
      var input =
        $(`<select class="form-select subjectEdited" name="subject" id="subject">
                        <option value="">Select one</option>
                        <option value="Java">Java</option>
                        <option value="Python">Python</option>
                        <option value="Java script">Java script</option>
                    </select>`);
      input.val(html);
      $(this).html(input);
    });
});

//Save Edited Data in to database

function saveEditedData(id) {
  const name = $(".nameEdited");
  const age = $(".ageEdited");
  const fees = $(".feesEdited");
  const subject = $(".subjectEdited");
  var formdata = new FormData();
  formdata.append("name", name.val());
  formdata.append("age", age.val());
  formdata.append("fees", fees.val());
  formdata.append("subject", subject.val());
  formdata.append("id", id);
  $.ajax({
    type: "POST",
    url: "./connection/editData.php",
    data: formdata,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function (response) {
      $(".editValues").removeAttr("disabled", "true");

      $(".statusMsg").html("");
      if (response.status == 1) {
        $(".statusMsg").html(
          '<p class="alert alert-success">' + response.message + "</p>"
        );
        $(".statusMsg").fadeOut(3000);
        removeInput();
      } else {
        $(".statusMsg").html(
          '<p class="alert alert-danger">' + response.message + "</p>"
        );
        $(".statusMsg").fadeOut(3000);
      }
      $("#submit").removeAttr("disabled");
    },
  });
}

// conver inputfield to TD

function removeInput() {
  $("input[name=name]").closest("td").text($("input[name=name]").val());
  $("input[name=age]").closest("td").text($("input[name=age]").val());
  $("input[name=fees]").closest("td").text($("input[name=fees]").val());
  $(".subjectEdited").closest("td").text($(".subjectEdited").val());
}
