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
                    
                    
                    $sql = "SELECT *,pick_book.id from pick_book left JOIN add_book  ON pick_book.book_id = add_book.id";
                    $result = $db->query($sql);
                    if ($result->num_rows >= 0) {
                        // output data of each row
                    ?>
                        <div class="container-fluid  px-4">
                            <div class="statusMsg"></div>
                            <!-- Add new Book Form -->
                            
                                <div class="d-flex justify-content-between align-items-center shadow mb-2 text-white bg-warning  rounded mt-3">
                                    <a class="btn btn-light" href="../view/index.php" role="button"><i class="fa fa-arrow-left"></i>&nbspGo Home</a>
                                    <h1 class="mt-4">Busy Book</h1>
                                    <h6 class="d-flex shadow text-dark align-items-center p-2 bg-body rounded">Total Busy Book-&nbsp<span class="btn btn-info"><?= $result->num_rows ?></span></h6>
                                </div>
                                <div class="card mb-4">
                                <div class="card-body">
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Book name</th>
                                                <th>Book ID</th>
                                                <th>Return time</th>
                                                <th>Book Image</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php
                                            while ($row = $result->fetch_assoc()) {
                                            ?>
                                                <tr>
                                                    <td><?= $row["id"] ?></td>
                                                    <td><?= $row["bookname"] ?></td>
                                                    <td><?= $row["book_id"] ?></td>
                                                    <td><?= $row["return_time"] ?></td>
                                                    <td><img src="../uploads/<?= $row['image'] ?>" data-bs-toggle="tooltip" data-bs-placement="left" title="<?=$row['discription']?>" style="width: 8rem;" alt="..."></td>
                                                </tr>
                                        <?php }
                                            echo $count;
                                        } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end new Book Form -->
                        </div>
                </main>
                
            </div>
    </div>
    <!-- Footer links-->
    <?php include_once 'footer.php'; ?>
<?php } elseif ($_SESSION['ROLE'] == 0) {
            header("Location:401.php");
        }
?>