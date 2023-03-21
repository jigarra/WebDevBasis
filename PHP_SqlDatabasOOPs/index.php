<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>TopCode</title>

        <style>
        .error {
            color: red;
        }
        </style>
    </head>

    <body>
        <?php require './connection/connection.php'; ?>
        
        <?php include 'navbar.php'; ?>

        <!-- form statr -->

        <?php include 'form.php'; ?>

        <nav class="navbar sticky-bottom mt-3 navbar-light bg-dark" aria-label="Site footer">
            <div class="container-fluid">
                <a class="navbar-brand mx-auto" href="#">TopCode @services</a>
                <a class="navbar" href="#">topcode.c@gmail.com</a>
            </div>
        </nav>
        <!-- footer -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>

</html>