<?php

ini_set('display_errors', '1');
// File upload folder
$uploadDir = '../uploads/';
$allowTypes = array('jpg', 'png', 'jpeg');

// Default response 
$response = array(
    'status' => 0,
    'message' => 'Form submission failed, please try again.'
);

if (isset($_POST['bookname'])) {

    $bookname = $_POST['bookname'];
    $authorname = $_POST['authorname'];
    $addition = $_POST['addition'];
    $discription = $_POST['discription'];

    if (!empty($bookname)) {
        $response['message'] = 'Please fill the all mandetory field...!';
        $uploadStatus = 1;
        $uploadedFile = '';
        if (!empty($_FILES["suggestimage"]["name"])) {
            
            $fileName = basename($_FILES["suggestimage"]["name"]);
            $targetFilePath = $uploadDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            if (in_array($fileType, $allowTypes)) {

                if (move_uploaded_file($_FILES["suggestimage"]["tmp_name"], $targetFilePath)) {
                    $uploadedFile = $fileName;
                } else {
                    $uploadStatus = 0;
                    $response['message'] = 'Sorry, there was an error uploading your file.';
                }
            } else {
                $uploadStatus = 0;
                $response['message'] = 'Sorry, only ' . implode('/', $allowTypes) . ' files are allowed to upload.';
            }
        }
        if ($uploadStatus == 1) {

            include_once 'connect.php';

            // Insert form data in the database 
            $uploadbook = "SELECT * from add_book WHERE bookname = '$bookname'";
            $result = $db->query($uploadbook);
            if ($result->num_rows >= 1) {
                $response['status'] = 0;
                $response['message'] = 'Woops..! already we have this book dear..!';
            } else {
                $sqlQ = "INSERT INTO suggest_book (bookname, auther, discription, image, addition) VALUES (?,?,?,?,?)";
                $stmt = $db->prepare($sqlQ);
                $stmt->bind_param("sssss", $bookname, $authorname, $discription, $fileName, $addition);
                $insert = $stmt->execute();
                if ($insert) {
                    $response['status'] = 1;
                    $response['message'] = 'Form data submitted successfully!';
                }
            }
        }
    } else {
        $response['message'] = 'Please fill all the mandatory fields (name and email).';
    }
}
echo json_encode($response);
 ?>