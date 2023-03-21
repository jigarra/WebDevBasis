<?php
ini_set("display_errors",1);

$data = $_REQUEST['field_data'] ?? [];
$fp = fopen('php://output', 'w')or die('Cannot open the file');
$fp = fopen('demo.csv', 'w')or die('Cannot open the file');
foreach ($data as $line) {
    $val = explode(",", $line);
    fputcsv($fp, $val, ";");
}
fclose($fp);

//header('Content-Type: text/csv; charset=utf-8');
//header('Content-Disposition: attachment; filename=demo1.csv');

exit;
?>