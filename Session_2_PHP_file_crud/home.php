<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <title>File crud</title>
    </head>

    <body>
        <?php require "navbar.php" ?>
        <?php require "operation.php" ?>
        <div class="container-fluid col-6 mt-5">
            <form action="" id="createform" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="" name="filename" placeholder="xyz.txt"
                        aria-label="Recipient's username" required>
                </div>
                <p><?=$error?></p>
                <div class="form-floating">
                    <textarea class="form-control" id="fileinput" name="filedata" style="height: 100px"
                        required></textarea>
                    <label for="fileinput">Input Here..</label>
                </div>
                <button type="submit" class="btn btn-info mt-3">Create file</button>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>

</html>