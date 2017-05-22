<?php
require_once '_db.php';

$json = file_get_contents('php://input');
$params = json_decode($json);

$stmt = $db->prepare("SELECT * FROM events WHERE NOT ((end <= :start) OR (start >= :end))");
$stmt->bindParam(':start', $params->start);
$stmt->bindParam(':end', $params->end);
$stmt->execute();
$result = $stmt->fetchAll();

class Event {}
$events = array();

date_default_timezone_set("UTC");
$now = new DateTime("now");
$today = $now->setTime(0, 0, 0);

foreach($result as $row) {
    $e = new Event();
    $e->id = $row['id'];
    $e->text = $row['text'];
    $e->start = $row['start'];
    $e->end = $row['end'];
    $events[] = $e;
}

header('Content-Type: application/json');
echo json_encode($events);

?>
