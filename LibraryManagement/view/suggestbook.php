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

        <!-- Suggestion Book Admin Side -->
        <?php if ($_SESSION['ROLE'] == 1) { ?>
            <div id="layoutSidenav_content">
                <main>
                
                <div class="container-fluid  px-4">
                            <div class="statusMsg"></div>
                            <!-- Add new Book Form -->
                            <?php require_once("../Connect/connect.php");
                    
                    
                    $sql = "SELECT * from suggest_book";
                    $result = $db->query($sql);
                    if ($result->num_rows >= 0) {
                        // output data of each row
                    ?>
                                <div class="d-flex justify-content-between align-items-center shadow mb-2 text-white bg-warning  rounded mt-3">
                                    <a class="btn btn-light" href="../view/index.php" role="button"><i class="fa fa-arrow-left"></i>&nbspGo Home</a>
                                    <h1 class="mt-4">View Suggestion</h1>
                                   <h1></h1>
                                </div>
                                <div class="card mb-4">
                                <div class="card-body">
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Book name</th>
                                                <th>Author</th>
                                                <th>Discription</th>
                                                <th>Addition</th>
                                                <th>Image</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php
                                            while ($row = $result->fetch_assoc()) {
                                            ?>
                                                <tr>
                                                    <td><?= $row["id"] ?></td>
                                                    <td><?= $row["bookname"] ?></td>
                                                    <td><?= $row["auther"] ?></td>
                                                    <td><?= $row["discription"] ?></td>
                                                    <td><?= $row["addition"] ?></td>
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

        <?php } elseif ($_SESSION['ROLE'] == 0) { ?>
            <!-- Suggestion Book student Side -->
            <div id="layoutSidenav_content">
                <main>
                
                    <div class="container-fluid col-8 px-4">

                        <div class="statusMsg"></div>
                        <div class="d-flex mt-3">
                            <a class="btn btn-light" href="../view/index.php" role="button"><i class="fa fa-arrow-left"></i>&nbspGo Back</a></div>
                       <h1 class="mt-4">Suggest Book</h1>
                       
                        <!-- Add new Book Form -->
                        <form id="suggest_book" method="post">
                            <div class="mb-3">
                                <label for="bookname" class="form-label">Book Name</label>
                                <input type="text" name="bookname" id="bookname" class="form-control" placeholder="Book name" aria-describedby="helpId">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Author name</label>
                                <input type="text" name="authorname"  class="form-control" placeholder="Authore.." aria-describedby="helpId">
                            </div>
                            <div class="mb-3">
                                <label for="addition" class="form-label">Addition</label>
                                <input type="text" name="addition" id="addition" class="form-control" placeholder="Additon 1st, 2nd, etc..." aria-describedby="helpId">
                            </div>
                            <div class="mb-3">
                                <label for="discription" class="form-label">Discription</label>
                                <textarea class="form-control" name="discription" id="discription" rows="3" placeholder="Discription"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="addimage" class="form-label">Add Image</label>
                                <input type="file" class="form-control" name="suggestimage" id="suggestimage" aria-describedby="fileHelpId">
                                <div id="fileHelpId" class="form-text">Support .png .jpeg </div>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i>&NonBreakingSpace; Add Book</button>
                            <button type="reset" class="btn btn-primary">Cancle</button>

                        </form>
                        <!-- end new Book Form -->
                    </div>
                </main>
               
            </div>
        <?php  } elseif (isset($_SESSION['ROLE'])) {
            header("Location:401.php");
        }
        ?>
        

    </div>
    <!-- Footer links-->
    <?php include_once 'footer.php'; ?>