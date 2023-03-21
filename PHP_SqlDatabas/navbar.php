<?php session_start();?>
<!-- nave bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="Site navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">TopCode</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                </li>
                <?php if (isset($_SESSION['name'])&&isset($_SESSION['id'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="./myGuest.php">MyGuests</a>
                    </li>
                <?php } else { } ?>
            </ul>
            <?php if (isset($_SESSION['name'])&&isset($_SESSION['id'])) { ?>
            <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle"
                role="button"><?php echo $_SESSION['name']; ?></a>
            <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
                tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Do you want too Log out ???...
                        </div>
                        <div class="modal-footer">
                            <a href="./connection/logout.php" class="btn btn-primary" data-bs-toggle="modal">Yes...!</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } else {?>
            <form class="d-flex">
                <a href="./login.php" class="btn btn-outline-success me-2" type="submit">Login</a>
                <a href="./register.php" class="btn btn-outline-success" type="submit">Register</a>
            </form>
            <?php } ?>
        </div>
    </div>
</nav>
<!-- navbar end -->