$(document).ready(function () {
    
    //Clear All Fields
    $("#btnReset").on("click", function () {
        $(".form-control").val("");
        var body = $("html, body");
        body.stop().animate({ scrollTop: 0 }, '500', 'swing', function () {
        });
    }); 

    $(".dropdown-menu li a").click(function() {
        var selText = $(this).text();
        $(this).parents('.dropdown').find('.dropdown-toggle').html(selText + ' <span class="caret"></span>');
    });

});

$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='addCompany']").validate({
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            firstname: "required",
            lastname: "required",
            email: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true
            },
            password: {
                required: true,
                minlength: 5
            }
        },
        // Specify validation error messages
        messages: {
            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address"
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            alert('comee');return false;
        }
    });
});
 