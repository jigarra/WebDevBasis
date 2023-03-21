<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Test</title>
    </head>

    <body>
        <div class="col-6 mt-5  container-fluid shadow p-3 mb-1 bg-body rounded p-4">
            <form method="post" id="inputform">
                <label for="inputfield" class="form-label">Enter Number and Get Input field</label>
                <div class="default-input input-group mb-3">

                    <input type="number" id="inputfield" value="" class="count-input form-control"
                        aria-label="Text input with segmented dropdown button" Required>
                    <a type="button" class="add_button btn btn-outline-warning">Add Box..</a>
                </div>
                <div class="add_field">
                </div>
                <button type="submit" class="btn container-fluid btn-primary mt-2">Submit</button>
            </form>
        </div>
        <div class="show_file_content"></div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="./main.js"></script>
    </body>

</html>
<?php include 'datamanage.php' ?>