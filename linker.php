<?php 
$data = json_decode(file_get_contents('php://input'), true);

$links = array("links"=>$data["links"]);

echo json_encode($links);

?>