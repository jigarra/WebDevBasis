<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Edit Form</title>
        <style>
        .error {
            color: red;
        }
        </style>
    </head>

    <body>
        <?php require './connection/connection.php';

        if (isset($_GET['id'])) {
            $update = new DB_con();
            $user_id = $_GET['id'];
            $result = $update->fetchonerecord($user_id);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
               $id = $row['id'];
               $firstname = $row['firstname'];
               $lastname = $row['lastname'];
               $email = $row['email'];
               $password =$row['password'];
               $Address = $row['Address'];
               $Country = $row['Country'];
               $State = $row['State'];
               $City = $row['City'];
               $zip = $row['zip'];
               $image = $row['image'];

        }
        }
        }
        ?>
        <?php echo $image;?>
        <div class="container-fluid col-7 shadow p-3 mb-5 bg-body rounded p-2 mt-1">

            <form name="form1" action="./connection/edit.php" method="post" class="row me-md-3"
                enctype="multipart/form-data">
                <h1 class="container-fluid col-3 mt-1">Edit Data</h1>
                <div class="row g-3">
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="id" placeholder="First name" value="<?=$id?>"
                            aria-label="First name" readonly>
                    </div>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="fname" placeholder="First name"
                            value="<?=$firstname?>" aria-label="First name">
                    </div>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="lname" placeholder="Last name"
                            value="<?=$lastname?>" aria-label="Last name">
                    </div>
                </div>
                <div class="col-12 mt-2">
                    <input type="email" name="email" class="form-control" value="<?=$email?>"
                        placeholder="abc@gmail.com">
                </div>
                <div class="col-12 mt-2">
                    <input type="password" name="password" class="form-control" value="<?=$password?>"
                        placeholder="Enter Passsword" id="inputPassword4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="inputAddress" value="<?=$Address?>"
                        placeholder="1234 Main St">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Country</label>
                    <select id="inputState" name="country" value="<?=$Country?>" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" name="state" value="<?=$State?>" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">City</label>
                    <select id="inputState" name="city" value="<?=$City?>" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="input-group col-12 mt-2">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    <input type="file" class="form-control col-12" name="choosefile" value="<?=$image?>"
                        id="inputGroupFile02">
                </div>
                <div class="input-group">
                    <img src="./image/<?=$image?>" class="rounded img-thumbnail w-25" alt="IMAGE">
                </div>
                <div class="col-md-4">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" name="zipcode" class="form-control" value="<?=$zip?>" id="inputZip" maxlength="6"
                        minlength="6">
                </div>
                <div class="col-12 mt-2">
                    <button type="submit" name="edit" value="edit" class="btn btn-primary">Signin</button>
                </div>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js">
        </script>
        <!-- form end -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="./js/main.js"></script>
        <!-- edit modal end -->
    </body>

</html>