<?php
session_start();
// Include database connection file
include_once('config.php');
if (!isset($_SESSION['ID'])) {
    header("Location:login.php");
}
?>
<?php include_once 'head.php'; ?>

<body class="sb-nav-fixed">
    <!-- topnavbar -->
    <?php include_once 'topnavbar.php'; ?>
    <div id="layoutSidenav">
        <!-- sidebar -->
        <?php include_once 'sidebar.php'; ?>

        <!-- Dashboard -->
        <?php if ($_SESSION['ROLE'] == 1) { ?>

            <div id="layoutSidenav_content">
                <main>
                    <?php require_once("../Connect/connect.php");
                    $myid = $_SESSION['ID'];
                    $sql = "SELECT * from register_mst WHERE id = '$myid' ";
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="container-fluid  px-4">
                        <div class="statusMsg"></div>
                        <h1 class="mt-4">Profile</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
                        </ol>
                        <!-- Admin profile-->
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../uploads/<?=$row['image']?>" class="img-fluid rounded-start  w-50" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                    <p class="card-text"> <?=$row['id']?></p>
                                        <h5 class="card-title"> <?=$row['name']?></h5>
                                        <p class="card-text"> <?=$row['email']?></p>
                                        <p class="card-text"><?=$row['institute']?></p>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Admin profile -->
                    </div>
                </main>
                <?php }?>
                
            </div>
        <?php } elseif ($_SESSION['ROLE'] == 0) { ?>


            <div id="layoutSidenav_content">
                <main>
                    <?php require_once("../Connect/connect.php");
                    $myid = $_SESSION['ID'];
                    $sql = "SELECT * from register_mst WHERE id = '$myid' ";
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="container-fluid  px-4">
                        <div class="statusMsg"></div>
                        <h1 class="mt-4">Profile</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
                        </ol>
                        <!-- Admin profile-->
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../uploads/<?=$row['image']?>" class="img-fluid rounded-start w-50" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                    <p class="card-text"> <?=$row['id']?></p>
                                        <h5 class="card-title"> <?=$row['name']?></h5>
                                        <p class="card-text"> <?=$row['email']?></p>
                                        <p class="card-text"><?=$row['institute']?></p>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Student Profile -->
                    </div>
                </main>
                <?php }?>
                
            </div>
        <?php  }
        ?>
    </div>
    <!-- Footer links-->
    <?php include_once 'footer.php'; ?>