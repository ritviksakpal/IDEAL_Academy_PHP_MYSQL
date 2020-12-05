//validate code
//return true if form is valid
//return false if form is not valid


function validate() {
    let flag = false;

    let email_field = $('.email').val();
    let pass_field = $('.pass').val();

    //validate email
    if (email_field == "" || email_field == undefined) {
        $('.email-error').html('*email is required').addClass('error-confirm');
    } else {
        $('.email').addClass('email-pass-border');
        flag = true;
    }


    //validate password
    if (pass_field == "" || pass_field == undefined) {
        $('.pass-error').html('*password is required').addClass('error-confirm');
    } else {
        $('.pass').addClass('email-pass-border');
        flag = true;
    }

    //validation... flag = true || flag = false
    return flag;
}