<?php


require_once './connect.php';
$response = array(
    'status' => 0,
    'message' => 'Form submission failed, please try again.'
);

if (isset($_POST['updateData'])) {
    foreach ($_POST['updateData'] as $key => $value) {
        if (isset($value['id']) && isset($value['name']) && isset($value['age']) && isset($value['fees'])) {
            $id = $value['id'];
            $name = $value['name'];
            $age = $value['age'];
            $fees = $value['fees'];
            $subject = $value['subject'];
            $sql = "UPDATE Student_marks SET Studentname = '" . $name . "', Age =" . $age . ",Fees =" . $fees . ",Subject = '" . $subject . "' WHERE id = " . $id . "";

            if ($conn->query($sql) === TRUE) {
                $response['status'] = 1;
                $response['message'] = 'data changed successfully..!';
            }
        } else {
            $response['status'] = 0;
            $response['message'] = 'Changeable data Not found...!';
        }
    }
} else {
    $response['status'] = 0;
    $response['message'] = 'No data Changed...!';
}


echo json_encode($response);
