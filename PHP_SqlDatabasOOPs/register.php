<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./css/form_style.css" rel="stylesheet">
        <title>Register</title>
    </head>
    <style>
    .error {
        color: red;
    }
    </style>

    <body>
        <div class="main">
            <div class="logo">
                <img class="logo-img"
                    src="https://www.biztechcs.com/wp-content/themes/biztech/dist/images/logo_3a738c77.svg" alt="logo">
                <h1 class="logo-title">WHAT DOES IT COME FROM?</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti accusantium voluptatem maxime
                    veritatis
                    corporis? Nam, perferendis. Sequi officiis amet autem voluptatum, rerum fuga laborum aliquid
                    laboriosam!
                    Voluptate saepe ipsam labore.</p>
                <a href="#">KNOW MORE</a>
            </div>
            <div class="form-data">
                <div class="login-btn">
                    <a href="./login.php" class="back-login">Back To Login</a>
                </div>
                <div class="form-title">
                    <h1>Register Your Self </h1>
                </div>
                <form name="registerForm" id="registerForm" method="post" action="./connection/register.php"
                    enctype="multipart/form-data">
                    <div class="form">
                        <div class="name">
                            <div class="flname">
                                <label class="form-lable">First name *</label>
                                <br>
                                <input class="form-name" type="text" value="" name="fstname" id="fstname"
                                    placeholder="Your name">
                                <span id="validfname"></span>
                            </div>
                            <div class="flname">
                                <label class="form-lable">Last name</label>
                                <br>
                                <input class="form-name" type="text" name="lname" id="lname" placeholder="Your name">
                                <p id="validlname"></p>
                            </div>
                        </div>
                        <div class="form-fild">
                            <label class="form-lable">Email *</label><br>
                            <input class="form-input form-name" type="email" name="email" value=""
                                placeholder="Your Email">
                            <?phpif( ! empty($_SESSION['login_error_msg']))
{
    unset($_SESSION['login_error_msg'];
}?>
                            <p id="validEmial"></p>

                        </div>

                        <div class="phone-no">
                            <div class="form-fild phone">
                                <label class="form-lable phone">Phone no *</label><br>
                                <input class="form-fild-phone" type="tel" name="phone" maxlength="10" minlength="10"
                                    placeholder="Enter Your Phone number"><br>
                                <small id="validPhone"></small>
                            </div>
                        </div>
                        <div class="form-fild">
                            <label class="form-lable">Password *</label><br>
                            <input class="form-input form-name" type="password" name="password1" ID="password1"
                                placeholder="Enter Your Password">
                            <small id="validPassword"></small>
                        </div>

                        <div class="form-fild">
                            <label class="form-lable">Confirm password *</label><br>
                            <input class="form-input form-name" type="password" name="password2"
                                placeholder="Enter Your Password">
                        </div>

                        <div class="submit">
                            <button id="submitBtn" name="submit">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- main div start -->
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
        <script src="./js/main.js"></script>
    </body>

</html>