<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FORM VALIDATION :: IDEAL ACADEMY</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div id="validation_inner" class="inner">
        <div class="form">
            <form id="validate_form" action="">
                <p id="validate_form_h">Create New Account</p>
                <input type="email" name="email" id="email" placeholder="Email" />
                <input type="pass" name="password" id="password" placeholder="Password" />
                <button class="submit" id="validate_form_button" type="submit">
                    SIGN UP
                </button>
                <!-- <p class="validate_form_e">
                    Forgot <span><a href="#"> Username/Password?</a></span>
                </p> -->
                <p class="validate_form_e">
                    Already have an account? <span><a href="./login.php"> Sign in</a></span>
                </p>
            </form>
        </div>
    </div>
</body>

</html>