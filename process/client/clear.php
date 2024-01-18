<?php 

$data = json_decode(file_get_contents('php://input'), true);


require_once '../../config/connexion.php';


$prepareRequest = $connexion->prepare('UPDATE party SET ready=? WHERE id=?');
$prepareRequest->execute([
    $data["etat"],
    $data["party"]
]);








?>