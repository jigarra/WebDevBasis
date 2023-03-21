<?php
//print_r($_POST['mydata']);

require_once './connect.php';

$response = array(
    'status' => 0,
    'message' => 'Form submission failed, please try again.'
);



if (isset($_POST['mydata'])) {


    foreach ($_POST['mydata'] as $key => $value) {
        $query1 = $conn->prepare("INSERT INTO Student_marks (Studentname, Age, Fees, Subject)
        VALUES (?,?,?,?)");
        $query1->bind_param("ssss", $name, $age, $fees, $subject);
        $name = $value['name'];
        $fees = $value['fees'];
        $subject = $value['subject'];
        $age = $value['age'];
        $query1->execute();
        $response['status'] = 1;
        $response['message'] = 'Form data submitted successfully!';
    }
} else {
    $response['status'] = 0;
    $response['message'] = 'Enter Data Each field!';
}

echo json_encode($response);
