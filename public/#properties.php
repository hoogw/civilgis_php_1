<?php
header('Content-Type: application/json');
$response['success'] = false;
$db = new PDO('mysql:host=localhost;dbname=huge', 'root', 'aaaa1111');
$stmt = $db->prepare("SELECT * FROM properties");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
if(!empty($result)) {
	$response['success'] = true;
	$response['data'] = $result;
}
echo json_encode($response);
?>