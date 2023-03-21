<?php session_start(); ?>
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" aria-label="Site menu">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <?php if ($_SESSION['ROLE'] == 1) { ?>
                    <a class="nav-link" href="index.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link collapsed" href="./busybook.php">
                        <i class="fas fa-book"></i>&nbsp Busy Book
                    </a>
                    <div class="sb-sidenav-menu-heading">Operation</div>
                    <a class="nav-link collapsed" href="./addBook.php">
                        <i class="fas fa-plus"></i>&nbsp Add New Book
                    </a>
                    
                    <a class="nav-link collapsed" href="./suggestbook.php">
                        <i class="fas fa-book-open"></i>&nbsp;
                        View Suggest
                    </a>
                    
                    <div class="sb-sidenav-menu-heading">My Settings</div>
                    <a class="nav-link" href="./myprofile.php"><i class="fas fa-user"></i>&nbspMy Profile Setting</a>
                <?php } else { ?>
                    <a class="nav-link" href="index.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">My things</div>
                    <a class="nav-link collapsed" href="./suggestbook.php">
                        <i class="fas fa-book-open"></i>&nbsp;
                        Suggest New Book
                    </a>
                    <a class="nav-link" href="./myprofile.php"><i class="fas fa-user"></i>&nbspMy Profile Setting</a>
                <?php } ?>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?php if ($_SESSION['ROLE'] == 0) {
                echo '<p>User</p>';
            } elseif ($_SESSION['ROLE'] == 1) {
                echo '<p>Admin</p>';
            } else {
                echo '<p>You are not allowed</p>';
            } ?>
        </div>
    </nav>
</div>