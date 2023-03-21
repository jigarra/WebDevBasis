<?php
ini_set('display_errors', '1');
// File upload folder
$uploadDir = '../uploads/';

// Allowed file types
$allowTypes = array('jpg', 'png', 'jpeg');

// Default response 
$response = array(
    'status' => 0,
    'message' => 'Form submission failed, please try again.'
);

// If form is submitted 
if (isset($_POST['firstname']) && isset($_POST['LastName']) && isset($_POST['password1'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['LastName'];
    $email = $_POST['email'];
    $institute = $_POST['institutename'];
    $password = md5($_POST['password1']);
    $role = $_POST['isAdmin'] ?? '0';
    // Check whether submitted data is not empty 
    if (!empty($firstname) && !empty($email) && !empty($password)) {

        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $response['message'] = 'Please enter a valid email.';
        } else {
            $uploadStatus = 1;
            $uploadedFile = '';
            if (!empty($_FILES["profile"]["name"])) {
                
                $fileName = basename($_FILES["profile"]["name"]);
                $targetFilePath = $uploadDir . $fileName;
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                if (in_array($fileType, $allowTypes)) {

                    if (move_uploaded_file($_FILES["profile"]["tmp_name"], $targetFilePath)) {
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
                $emailcheck = "SELECT * from register_mst WHERE email = '$email'";
                $result = $db->query($emailcheck);
                if ($result->num_rows == 1) {
                    $response['status'] = 0;
                    $response['message'] = 'Woops..! The account is Already exist..!';
                } else {
                    $sqlQ = "INSERT INTO register_mst (name, email, password, image, institute, role) VALUES (?,?,?,?,?,?)";
                    $stmt = $db->prepare($sqlQ);
                    $stmt->bind_param("ssssss", $firstname, $email, $password, $fileName, $institute, $role);
                    $insert = $stmt->execute();
                }
                if (!empty($insert)) {
                    $response['status'] = 1;
                    $response['message'] = 'Form data submitted successfully!';
                }
            }
        }
    } else {
        $response['message'] = 'Please fill all the mandatory fields (name and email).';
    }
}
// Return response 
echo json_encode($response);
?>
