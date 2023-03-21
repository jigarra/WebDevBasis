<?php
session_start();    
if ($_SESSION['ID']) {
    header("Location: ../view/index.php");
} else {?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="./css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
        </script>
        <style>
        label.error {
            color: red;
            display: inline-block;
        }
        </style>
    </head>
    <body class="bg-secondary ">
        <div id="layoutAuthentication">
        <div class="statusMsg"></div>
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                    </div>
                                    <div class="card-body">
                                    <!-- register Form -->
                                        <form id="register_form" name="register_form"  method="post" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="mb-3 mb-md-0">
                                                        <label for="inputFirstName">First name</label>
                                                        <input class="form-control" name="firstname" type="text"
                                                            placeholder="Enter your first name" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <label for="inputLastName">Last name</label>
                                                        <input class="form-control" name="LastName" type="text"
                                                            placeholder="Enter your last name" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputEmail">Email address</label>
                                                <input class="form-control" name="email" type="email"
                                                    placeholder="name@example.com" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="schoolid">School/College name</label>
                                                <input type="text" class="form-control" name="institutename" id="schoolid"
                                                    placeholder="School/College name">

                                            </div>
                                            <div class="mb-3">
                                                <label for="formFile">Upload profile</label>
                                                <input class="form-control" name="profile" type="file" id="profilephoto">
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="mb-3 mb-md-0">
                                                        <label for="inputPassword">Password</label>
                                                        <input class="form-control" name="password1"  id="password1" type="password"
                                                            placeholder="Create a password" />

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3 mb-md-0">
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                        <input class="form-control" name="password2" id="password2"
                                                            type="password" placeholder="Confirm password" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label" for="flexCheckChecked">Admin</label>
                                                <input class="form-check-input" type="checkbox" value="1" name="isAdmin"
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type="submit" name="submit" id="submit"
                                                        class="btn btn-primary btn-block">Create Account</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <?php include_once 'footer.php'; ?>
        <?php } ?>