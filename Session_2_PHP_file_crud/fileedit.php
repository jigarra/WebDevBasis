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
            <form action="./fileedit.php" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="<?=$title?>" name="editname" placeholder="xyz.txt"
                        aria-label="Recipient's username" readonly>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" id="floatingInput" style="height: 100px"
                        required  readonly><?=$text?></textarea>
                    <label for="floatingInput">File Data</label>
                </div>

                <div class="form-floating mt-3">
                    <textarea class="form-control" id="fileinput" name="editdata" style="height: 100px"
                        required></textarea>
                    <label for="fileinput">Input Here..</label>
                </div>
                <button type="submit" name="append" value="append" class="btn btn-info mt-3">Append Data</button>
                <button type="submit" name="overide" value="overide" class="btn btn-danger mt-3">Override Data</button>
            </form>
        </div>

        <div class="container-fluid col-6 mt-5">
            <table class="table" aria-describedby="fileData">
                <thead>
                    <tr>
                        <th scope="col">File's ID</th>
                        <th scope="col">File's Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($filelist as $key => $namelist) { ?>
                    <tr>
                        <td><?php print_r($key); ?> </td>
                        <td><?php print_r($namelist); ?> </td>
                        <td><a href="fileedit.php?edit=<?php print_r($namelist); ?>" type="button"
                                class="btn btn-primary">Edit</a></td>
                        <td><a href="home.php?name=<?php print_r($namelist); ?>" type="button"
                                class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>

</html>