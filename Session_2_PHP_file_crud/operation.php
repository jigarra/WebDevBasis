<?php

//ini_set("display_errors", 1);


$filename = $_POST['filename'];
$filedata = $_POST['filedata'];

if (file_exists("./files/".$filename.".txt")) {
    $error = "fILE EXIT";
} else {
    echo "<script>alert('great name')</script>";
    //$error = "great name";
    header("Location: ./fileedit.php");
$filecreate = fopen("./files/".$filename.".txt", "w") or die("Unable to Open");
fwrite($filecreate, $filedata);
fclose($filecreate);
}
 $filelist = glob("./files/*.txt");

function deleteFile($getname) {
    unlink($getname);
    header("Location: ./fileedit.php");
}

if (isset($_GET['name'])) {
    $getname = $_GET['name'];
    deleteFile($getname);
}

if (isset($_GET['edit'])) {
    $title = $_GET['edit'];
    $file = fopen($_GET['edit'], "r");
    $size = filesize($_GET['edit']);
    $text = fread($file, $size);
}

$editname = $_POST['editname'];
$editdata = $_POST['editdata'];


if (isset($_POST['append'])) {
    $file = fopen($editname, "a+");
    fwrite($file, $editdata);
}

if (isset($_POST['overide'])) {
    $file = fopen($editname, "w");
    fwrite($file, $editdata);
}