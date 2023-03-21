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
                
                    <div class="container-fluid col-8 px-4">

                        <div class="statusMsg"></div>
                        <div class="d-flex mt-3">
                            <a class="btn btn-light" href="../view/index.php" role="button"><i class="fa fa-arrow-left"></i>&nbspGo Back</a></div>
                       <h1 class="mt-4">Add Book</h1>
                       
                        <!-- Add new Book Form -->
                        <form id="add_book" method="post">
                            <div class="mb-3">
                                <label for="bookname" class="form-label">Book Name</label>
                                <input type="text" name="bookname" id="bookname" class="form-control" placeholder="Book name" aria-describedby="helpId">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Author name</label>
                                <input type="text" name="authorname" id="" class="form-control" placeholder="Authore.." aria-describedby="helpId">
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
                                <input type="file" class="form-control" name="addimage" id="addimage" aria-describedby="fileHelpId">
                                <div id="fileHelpId" class="form-text">Support .png .jpeg </div>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i>&NonBreakingSpace; Add Book</button>
                            <button type="reset" class="btn btn-primary">Cancle</button>

                        </form>
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