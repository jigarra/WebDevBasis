
$(document).ready(function () {

    $(function () {
        $("#registerForm").validate({
            // Define validation rules
            rules: {
                fstname: {
                    required: true
                },
                lname: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    number: true
                },
                password1: "required",
                password2: {
                    equalTo: "#password1"
                }
            },
            // Specify validation error messages
            messages: {
                fstname: {
                    required: "Please provide a valid name.",
                },
                lname: "Please provide a valid name.",
                email: {
                    required: "Please enter your email",
                    minlength: "Please enter a valid email address"
                },
                phone: {
                    required: "<br>Please provide a phone number",
                    minlength: "Phone number must be min 10 characters long",
                    maxlength: "Phone number must not be more than 10 characters long"
                },
                password1: "Please enter password",
                password2: "Please enter your  password"
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });

    $(function () {
        // $( "input:blank" ).css( "background-color", "#bbbbff" );
        $("form[name='form1']").validate({
            // Define validation rules
            rules: {
                fname: {
                    required: true
                },
                lname: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    number: true
                },
                password: {
                    required: true
                },
                address: {
                    required: true
                },
                country: {
                    required: true
                },
                state: {
                    required: true
                },
                city: {
                    required: true
                },
                choosefile: {
                    required: true,
                    extension: "jpeg|png"
                },
                zipcode: {
                    required: true,
                    number: true
                },
            },
            // Specify validation error messages
            messages: {
                fname: {
                    required: "Please provide a valid name.",
                },
                email: {
                    required: "Please enter your email",
                    minlength: "Please enter a valid email address"
                },
                phone: {
                    required: "Please provide a phone number",
                    minlength: "Phone number must be min 10 characters long",
                    maxlength: "Phone number must not be more than 10 characters long"
                },
                password1: "Please enter password",
                choosefile: {
                    required: "Select File..",
                    extension: "only accept this formate jpeg|png"
                }
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
        $("input:blank").css("background-color", "#bbbbff");
    });

    $(function () {
        // $( "input:blank" ).css( "background-color", "#bbbbff" );
        $("#form1").validate({
            // Define validation rules
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true
                },
            
            },
            // Specify validation error messages
            messages: {
                email: {
                    required: "Please enter your email",
                    minlength: "Please enter a valid email address"
                },
                password1: "Please enter password",
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
        $("input:blank").css("background-color", "#bbbbff");
    });
});
