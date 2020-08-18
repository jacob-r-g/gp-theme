// Silent Signup
// Guided by https://dev-qa.com/824749/how-to-make-posting-to-the-website-getresponse
$(document).ready(function() {
    $('form').on('submit', function(event) {
        if ($(this).hasClass("getresponse")) {
            // check if email input has content
            if ($("#emailinput").val()) {
                var form_url = $(this).attr('action')
                var form_data = $(this).serialize(); // serializes the form's elements.
                $.ajax({
                    type: "GET",
                    url: form_url,
                    data: form_data,
                    dataType: "jsonp",
                    xhrFields: {
                        withCredentials: true,
                    },
                    // Always seems to return errors...but when a good email is entered it is added to the list
                    // So success/error callbacks seem useless. Can investigate more later.
                    // success: function(result) {
                    // // Take away loading icon
                    // console.log("Result: ", result)
                    // },
                    // error: function(result) {
                    // console.log("ERROR: Result: ", result)
                    // }
                });
                // $("#getresponse-submit").css("class", "disabled")
                // $("#getresponse-submit").val("Thank You!")
                $("#getresponse-form").css("display", "none");
                $("#getresponse-form-label").css("display", "none");
                $("#getresponse-submit-thankyou").css("display", "block");
            }
            event.preventDefault(); // block the traditional submission of the form.

        }
    })
})