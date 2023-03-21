<?php
ini_set('display_errors', '1');
$response = array(
    'status' => 0,
    'message' => 'choose how many days do you want to book..?'
);


if (isset($_POST['days'])) {
    $today = date('Y-m-d');
    $enddate = date('Y-m-d', strtotime(' + ' . $_POST['days'] . 'days'));
    $book_id = $_POST['id'];
    include_once 'connect.php';
    $sqlQ = "INSERT INTO pick_book (to_day, return_time, book_id) VALUES (?,?,?)";
    $stmt = $db->prepare($sqlQ);
    $stmt->bind_param("sss", $today, $enddate, $book_id);
    $insert = $stmt->execute();
    $response['status'] = 1;
    $response['message'] = 'successfully pick a book';
}
echo json_encode($response);
?>
