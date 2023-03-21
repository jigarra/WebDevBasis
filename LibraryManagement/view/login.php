<?php
session_start();
if (isset($_SESSION['ID']) && $_SESSION['ROLE'] == 1) {
    header("Location:index.php");
} ?>
<?php include_once 'head.php'; ?>
<body class="bg-secondary">
    <div id="layoutAuthentication">
        <!-- show error msg -->
        <div class="statusMsg"></div>
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form id="login_form" method="post">
                                        <div class="mb-3">
                                            <label for="inputEmail">Email address</label>
                                            <input class="form-control" name="email" type="email" placeholder="name@example.com" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputPassword">Password</label>
                                            <input class="form-control" name="password" type="password" placeholder="Password" />

                                        </div>
                                        
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" id="login" class="btn btn-primary" href="index.php">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <?php include_once 'footer.php'; ?>