<?php

$data = json_decode(file_get_contents('php://input'), true);
print_r($data);

require_once '../../config/connexion.php';

$preparedRequest = $connexion->prepare('INSERT INTO score (id_users,score,id_party) VALUES (?,?,?)');
$preparedRequest->execute([
    $data["id"],
    $data["score"],
    $data["party_id"]
])

?>