<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div id="shomsg"></div>
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Student</li>
            </ol>

            <!-- Books in Card View -->
            <?php
            require_once("../Connect/connect.php");
           

            $sql = "SELECT *,add_book.id from add_book left JOIN pick_book  ON add_book.id = pick_book.book_id";

            $result = $db->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="card border-0 mb-2 shadow p-3 mb-5 bg-body rounded">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../uploads/<?= $row['image'] ?>" class="img-thumbnail rounded-start w-50" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title border-1"><?= $row['bookname'] ?> </h5>
                                    <div>
                                        <h6>Addition: <span class="card-title"><?= $row['addition'] ?></h6>
                                    </div>
                                    <div>
                                        <h6>Auther: <span class="card-title"><?= $row['auther'] ?></h6>
                                    </div>
                                    <samp class="card-text text-primary"><?= $row['discription'] ?></samp>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <?php if (isset($row['book_id'])) { ?>
                                    <button  class="btn btn-warning float-end">End of the day <?=$row['return_time']?></button>
                                <?php } else { ?>
                                    <form method="post" id="pickbook-<?= $row['id'] ?>">
                                    <button type="submit" onclick="take_book(<?= $row['id'] ?>)"; class="btn btn-primary float-end"><i class="fa fa-book"></i></button>
                                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                        <div class="mb-3 float-end editbutton">
                                            <select class="form-select float-end editbutton" name="days" required>
                                                <option disabled selected>How many day's</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                <option value="4">Four</option>
                                                <option value="5">Five</option>
                                                <option value="6">Six</option>
                                                <option value="7">Seven</option>
                                            </select>
                                        </div>
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
            <?php  }
            } ?>

            <!-- Books in Card View -->
        </div>
    </main>
    
</div>
</div>