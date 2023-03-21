<!DOCTYPE html>
<html>

<head>


    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- fafa cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand " href="#">STMT College</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./showdata.php">Show Data</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <input class="form-control me-2" id="myInput" type="text" placeholder="Search" aria-label="Search">
                </div>
            </div>
        </div>
    </nav>
    <div class="statusMsg"></div>
    <?php
    require_once("./connection/connect.php");

    $sql = "SELECT *from Student_marks";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    ?>
        <div class="card p-3 d-flex align-items-end">
            <div class="btn btn-primary" for="updatecall"> UpdateAll &nbsp;
                <button onclick="updateAll();" id="updatecall" class="btn btn-outline-warning rounded-circle bd-highlight"><i class="fa fa-save"></i></button>
            </div>
        </div>
        <table class="table table-striped table-hover mt-2" aria-describedby="student data">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Age</th>
                    <th>Fees</th>
                    <th>Subject</th>
                    <th>Edit/save</th>
                </tr>
            </thead>
            <tbody id="myTable">
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr class="datatable" id="table-row-<?= $row['id'] ?>">
                        <td>
                            <p class="id"><?= $row['id'] ?></p>
                        </td>
                        <td>
                            <p class="editablename"><?= $row['Studentname'] ?></p>
                        </td>
                        <td>
                            <p class="editableAge"><?= $row['Age'] ?></p>
                        </td>
                        <td>
                            <p class="editableFees"><?= $row['Fees'] ?></p>
                        </td>
                        <td>
                            <p class="editableOption"><?= $row['Subject'] ?></p>
                        </td>
                        <td><button onclick="deleteRecord(<?= $row['id'] ?>);" class="btn btn-outline-danger mt-3 rounded-circle"><i class="fa fa-trash"></i></button>
                            <button class="btn btn-outline-info mt-3 rounded-circle editValues"><i class="fa fa-edit"></i></button>
                            <button onclick="updateAll();" class="btn btn-outline-warning mt-3 rounded-circle saveSingle"><i class="fa fa-save"></i></button>
                        </td>
                    </tr>
            <?php  }
            } ?>
            </tbody>
        </table>
</body>
<script src="./second.js"></script>

</html>