<?php

require_once './connect.php';

$response = array(
    'status' => 0,
    'message' => 'Form submission failed, please try again.'
);

print_r($_POST);
foreach ($_POST["name"] as $key => $value) {
    // print_r($value);
    if (!empty($value) && !empty($_POST["fees"][$key] && $_POST['age'][$key] && $_POST['subject'][$key])) {
        $query1 = $conn->prepare("INSERT INTO Student_marks (Studentname, Age, Fees, Subject)
    VALUES (?,?,?,?)");
        $query1->bind_param("ssss", $name, $age, $fees, $subject);
        $name = $value;
        $fees = $_POST['fees'][$key];
        $subject = $_POST['subject'][$key];
        $age = $_POST['age'][$key];
        $query1->execute();
        $response['status'] = 1;
        $response['message'] = 'Form data submitted successfully!';
    } else {
        $response['status'] = 0;
        $response['message'] = 'insert relevent data..!';
    }
}
echo json_encode($response);
