<?php
require_once '_db.php';

class Result {}

$stmt = $db->prepare("UPDATE events SET text = :text WHERE id = :id");
$stmt->bindParam(':id', $_POST["id"]);
$stmt->bindParam(':text', $_POST["name"]);
$stmt->execute();

$response = new Result();
$response->result = 'OK';
$response->message = 'Update successful';

header('Content-Type: application/json');
echo json_encode($response);

?>
