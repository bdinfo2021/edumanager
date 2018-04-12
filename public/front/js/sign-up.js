/**
 * Created by sanaulla on 3/7/18.
 */
$(document).ready(function() {

    /* ======= jQuery form validator ======= */
    /* Ref: http://jqueryvalidation.org/documentation/ */
    $("form[name='registration']").validate({
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            first_name: "required",
            last_name: "required",
            email_address: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true
            },
            mobile_number: {
                required: true,
                number: true,
                minlength: 7
            },
            address: "required"
        },
        // Specify validation error messages
        messages: {
            first_name: "Please enter your first name",
            last_name: "Please enter your last name",
            email_address: {
                required: "Please provide a email address",
                email: "Your Email Address is not Valid"
            },
            mobile_number: {
                required: "Please enter your Mobile number",
                number: "Please enter a valid Mobile number.",
                minlength: "Your mobile number must be at least 7 characters long"
            },
            address: "Please enter your address"
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });

    $("form[name='shipping']").validate({
        errorClass: 'error is-invalid',
        validClass: 'success',
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            first_name: "required",
            last_name: "required",
            email_address: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true
            },
            billing_address: "required",
            country : 'required',
            deposit_slip : {
                required: true,
                accept: "image/*"
            }
        },
        // Specify validation error messages
        messages: {
            first_name: "Please enter your first name",
            last_name: "Please enter your last name",
            email_address: {
                required: "Please provide a email address",
                email: "Your Email Address is not Valid"
            },
            shipping_address: "Please enter your Shipping Address",
            country: "Please select a Country",
            deposit_slip:{
                required: 'Please Upload your Deposit Slip',
                accept: 'Supported Format - JPEG | GIF | PNG | TIFF | Raw image files.'
            }
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });


});
