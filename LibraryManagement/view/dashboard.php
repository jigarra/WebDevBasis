<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div id="showmsg"></div>
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>

            <!-- Books in Card View -->
            <?php
            require_once("../Connect/connect.php");

            $sql = "SELECT * from add_book";

            $result = $db->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="card border-0 mb-2 shadow p-3 mb-5 bg-body rounded" id="bookcard-<?php echo $row["id"]; ?>">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../uploads/<?= $row['image'] ?>" class="img-thumbnail rounded-start w-50" alt="...">
                                <div class="col-8">
                                    <form method="post" name="imgedit" id="editImg-<?=$row['id']?>">
                                        <label for="formFile" class="form-label text-secondary">Want to change image..?</label>
                                        <input class="form-control" id="addimagenew" type="file" name="editimage">
                                        <input class="form-control" type="hidden" name="imgId" value="<?=$row['id']?>" required>
                                        <button  onclick="editform(<?=$row['id']?>)"; class="btn btn-primary mt-2"><i class="fa fa-upload"></i></button>
                                    </form>
                                    </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 id="bookname" onblur="saveToDatabase(this,'bookname','<?php echo $row['id']; ?>');" onClick="editRow(this)" ; class="card-title"><?= $row['bookname'] ?></h5>
                                    <div>
                                        <h6>Addition: <span id="addition" onblur="saveToDatabase(this,'addition','<?php echo $row['id']; ?>');" onClick="editRow(this)" ; class="card-title"><?= $row['addition'] ?></h6>
                                    </div>
                                    <div>
                                        <h6>Auther: <span id="addition" onblur="saveToDatabase(this,'auther','<?php echo $row['id']; ?>');" onClick="editRow(this)" ; class="card-title"><?= $row['auther'] ?></h6>
                                    </div>
                                    <samp id="discription" onblur="saveToDatabase(this,'discription','<?php echo $row['id']; ?>');" onClick="editRow(this)" ; class="card-text text-primary"><?= $row['discription'] ?></samp>
                                </div>
                            </div>
                            <?php if (isset($_SESSION['ROLE']) && isset($_SESSION['ID'])) { ?>
                                <div class="col-md-12">
                                    <button type="button" id="" class="btn btn-primary me-2 float-end editbutton">Edit</button>
                                    <button type="button" id="" onclick="deleteRecord(<?php echo $row['id']; ?>);" class="btn btn-danger me-2 float-end">Delete</button>
                                </div>
                            <?php } else { ?>
                                <a href="../view/login.php" class="btn  bg-primary">Login</a>
                            <?php  } ?>

                        </div>
                    </div>
            <?php  }
            } ?>

            <!-- Books in Card View end -->
        </div>
    </main>
    
</div>
</div>