<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./css/form_style.css" rel="stylesheet">
        
        <title>Login</title>
        <style>
        .error {
            color: red;
        }
        </style>
    </head>

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
                    <a href="./register.php" class="back-login">Back To Register</a>
                </div>
                <div class="form-title">
                    <h1>Login</h1>
                </div>
                <form id="form1" method="post" action="./connection/login.php">
                    <div class="form">
                        <div class="name">
                        </div>
                        <div class="form-fild">
                            <label class="form-lable">Email *</label><br>
                            <input class="form-input form-name" type="email"
                                name="email" placeholder="Your Email">
                            <p id="validEmial">
                                <?php if (isset($_GET['error'])) { ?>

                            <p class="error"><?php echo $_GET['error']; ?></p>

                            <?php } ?>
                            </p>
                        </div>

                        <div class="form-fild">
                            <label class="form-lable">Password *</label><br>
                            <input class="form-input form-name" type="password" name="password" oninput="loginform()"
                                placeholder="Enter Your Password">
                            <small id="validPassword"></small>
                        </div>
                        <div class="submit">
                            <button type="submit">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
        <script src="./js/main.js"></script>
        <!-- main div start -->
        </div>


    </body>

</html>