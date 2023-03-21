$(document).ready(function () {

    var addButton = $('.add_button');
    var remove_field = $('.add_field');
    var fieldHTML = `<div class="input-group mb-3"><button class="remove_button btn btn-outline-danger"><i class="fa fa-trash-o"></i></button></><input type="text" class="count-input form-control" name="field_data[]"  value=""/ required></div>`;

    $(addButton).click(function () {
        $('.remove_button').parent('div').remove();
        var maxField = parseInt($(".count-input").val());
        console.log(maxField);
        for (let i = 0; i < maxField; i++) {
            $(remove_field).append(fieldHTML);
        }
    });

    $(remove_field).on('click', '.remove_button', function (e) {
        e.preventDefault();
        $(this).parent('div').remove();
    });
});