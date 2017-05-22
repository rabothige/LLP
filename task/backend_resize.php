<?php
require_once '_db.php';

$insert = "UPDATE events SET start = :start, end = :end WHERE id = :id";

$stmt = $db->prepare($insert);

$stmt->bindParam(':start', $start);
$stmt->bindParam(':end', $end);
$stmt->bindParam(':id', $id);

$received = json_decode(file_get_contents('php://input'));
//echo $received;

$id = $received->e->id;
$start = $received->newStart;
$end = $received->newEnd;
$stmt->execute();

class Result {}

$response = new Result();
$response->result = 'OK';
$response->message = 'Update successful';

echo json_encode($response);

?>
