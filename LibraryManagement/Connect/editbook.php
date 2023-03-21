<?php
ini_set('display_errors', 1);
include_once 'connect.php';

$uploadDir = '../uploads/';
$allowTypes = array('jpg', 'png', 'jpeg');



$response = array(
  'status' => 0,
  'message' => 'Form submission failed, please try again.'
);

$uploadStatus = 0;
$uploadedFile = '';
if (isset($_FILES["editimage"]["name"])) {
  $fileName = basename($_FILES["editimage"]["name"]);
  $targetFilePath = $uploadDir . $fileName;
  $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
  if (in_array($fileType, $allowTypes)) {
    if (move_uploaded_file($_FILES["editimage"]["tmp_name"], $targetFilePath)) {
      $uploadedFile = $fileName;
      $uploadStatus = 1;
      $response['status'] = 1;
      $response['message'] = 'Form data submitted successfully!';
    } else {
      $uploadStatus = 0;
      $response['message'] = 'Sorry, there was an error uploading your file.';
    }
  } else {
    $uploadStatus = 0;
    $response['message'] = 'Sorry, only ' . implode('/', $allowTypes) . ' files are allowed to upload.';
  }
} else {
  $uploadStatus = 0;
  $response['message'] = 'Sorry, there was an error uploading your file.';
}
if ($uploadStatus == 1) {
  $sql = "UPDATE add_book set image = '" . $uploadedFile . "' WHERE  id=" . $_POST["imgId"];
  $db->query($sql);
}
if (isset($_POST["editval"])) {
  $desc = addslashes($_POST["editval"]);
  $sql2 = "UPDATE add_book set " . $_POST["column"] . " = '" . $desc . "' WHERE  id=" . $_POST["id"];
  $db->query($sql2);
}

echo json_encode($response);
?>