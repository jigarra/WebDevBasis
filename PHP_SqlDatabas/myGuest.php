<?php
require './connection/connection.php';

$result = mysqli_query($conn, "SELECT * FROM MyGuests");
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Data Tables</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
            integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
            integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
        </script>

        <script src="http://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    </head>

    <body>
        <div class="container-fluid col-10 shadow p-3 mb-5 bg-body rounded p-3">
        <a href="./index.php" class="btn btn-primary mb-3">Back</a>
            <table class="table table-fluid" id="myTable">
                <thead>
                    <tr>
                        <th class="th-sm">ID</th>
                        <th class="th-sm">Name</th>
                        <th class="th-sm">Email</th>
                        <th class="th-sm">Address</th>
                        <th class="th-sm">Country</th>
                        <th class="th-sm">State</th>
                        <th class="th-sm">City</th>
                        <th class="th-sm">Zip</th>
                        <th class="th-sm">Image</th>
                        <?php if (isset($_SESSION['name'])&&isset($_SESSION['id'])) { ?>
                        <th class="th-sm">Delete</th>
                        <th class="th-sm">Edit</th>
                        <?php } else { } ?>
                    </tr>
                </thead>
                <tbody>

                    <?php if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {?>
                    <tr>
                        <td><?=$row['id']?></td>
                        <td><?=$row['firstname']." " .$row['lastname']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['Address']?></td>
                        <td><?=$row['Country']?></td>
                        <td><?=$row['State']?></td>
                        <td><?=$row['City']?></td>
                        <td><?=$row['zip']?></td>
                        <td><img src="./image/<?=$row['image']?>" class="rounded img-thumbnail w-25" alt="IMAGE"></td>
                        <?php if (isset($_SESSION['name'])&&isset($_SESSION['id'])) { ?>
                        <td><a href="./connection/delete.php?id=<?=$row['id']?>" type="button"
                                class="btn btn-danger">Delete</a></td>
                        <td><a href="./editFrom.php?id=<?=$row['id']?>" class="btn btn-primary">Edit</a></td>
                        <?php } else { } ?>
                    </tr>
                    <?php }
                    } else {
                    echo "0 results";
                    }
                    mysqli_close($conn); ?>
                </tbody>
            </table>
            <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
            </script>
        </div>
    </body>

</html>