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
        <?php if ($_SESSION['ROLE'] == 1) {
            include_once 'dashboard.php';

        }   elseif ($_SESSION['ROLE'] == 0){
            include_once 'dashboardStudent.php';
        }
        ?>
    
    </div>
    <!-- Footer links-->
    <?php include_once 'footer.php'; ?>