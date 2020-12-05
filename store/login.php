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
            <form onsubmit="return validate()" novalidate id="validate_form" action="./index.php" method="post">
                <p id="validate_form_h">ACCOUNT LOGIN</p>
                <input required class="email" type="email" name="email" id="email" placeholder="Email" />

                <!-- error -->

                <span class=" error-hide email-error"></span>

                <input required class="pass" type="password" name="password" id="password" placeholder="Password" />


                <!-- error -->

                <span class=" error-hide pass-error"></span>

                <button class="submit" id="validate_form_button" type="submit">
                    SIGN IN
                </button>
                <p class="validate_form_e">
                    Forgot <span><a href="#"> Username/Password?</a></span>
                </p>
                <p class="validate_form_e">
                    Create an account? <span><a href="./signin.php"> Sign up</a></span>
                </p>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <script src="js/validate.js"></script>
</body>

</html>