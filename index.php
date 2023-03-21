<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- fafa cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Student Data</title>
</head>

<body>

    <main class="m-1">
        <!-- navbar start -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand " href="#">STMT College</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="./showdata.php">Show Data</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="statusMsg"></div>
        <div class="datbody card mt-3 m-1" id="input-field">
            <div class="trow d-flex align-items-center col-10">
                <header class="col-2">
                    <h5>Enter Data</h5>
                </header>
                <div class="col-2 mb-3 me-3">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" minlength="2" id="Name" placeholder="Enter Name" required>
                    <p class="error"></p>
                </div>
                <div class="col-2 mb-3 me-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" class="form-control" min="6" max="75" name="age" id="age" placeholder="Enter Your age.." required>
                     <p class="error"></p>
                </div>
                <div class="col-2 mb-3 me-3">
                    <label for="fee" class="form-label">Fee</label>
                    <input type="number" class="form-control" min="1000" max="100000" name="fee" id="fee" placeholder="Enter Fees" required>
                     <p class="error"></p>
                </div>
                <div class="col-2 mb-3 me-3">
                    <label for="subject" class="form-label">Subject</label>
                    <select class="form-control subject" name="subject" id="subject" required>
                        <option value="0">Select one</option>
                        <option value="Java">Java</option>
                        <option value="Python">Python</option>
                        <option value="Java script">Java script</option>
                    </select>
                    <p class="error"></p>
                </div>
                
                <button onClick="createNew();" id="addfield" class="btn btn-outline-secondary mt-3 rounded-circle"><i class="fa fa-plus"></i></button>
            </div>
        </div>
        <button onClick="submitdata();" id="savedata" class="btn btn-outline-secondary mt-3 rounded-circle"><i class="fa fa-upload"></i></button>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./second.js"></script>
</body>

</html>
<?php require_once './connection/connect.php'; ?>