<?php
session_start();

$response = array(
    'status' => 0,
    'message' => 'Form submission failed, please try again.'
);
if ($_SESSION['ID']) {
    header("Location:../view/index.php");
}

// Include database connectivity
include_once('../Connect/connect.php');

if (isset($_POST['email']) && isset($_POST['password'])) {
    $errorMsg = "";
    $username = $db->real_escape_string($_POST['email']);
    $password = $db->real_escape_string(md5($_POST['password']));
    if (!empty($username) && !empty($password)) {
        // echo "success data get";exit;
        $query  = "SELECT * FROM register_mst WHERE email = '$username' AND password = '$password'";
        $result = $db->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['ID'] = $row['id'];
            $_SESSION['ROLE'] = $row['role'];
            $_SESSION['NAME'] = $row['name'];
            
            $response['status'] = 1;
            $response['message'] = 'Form data submitted successfully!';
            $response['redirect'] = 'http://localhost/testData/jigar_training-librarysystem/LibraryManagement/view/index.php';
        } else {
            $response['status'] = 0;
            $response['message'] = "No user found on this username";
        }
    } else {
        $response['status'] = 0;
        $response['message'] =  "Username and Password is required";
    }
}
echo json_encode($response);
?>
