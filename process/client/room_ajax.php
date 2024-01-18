<?php

require_once '../../config/connexion.php';

$requestparty1 = $connexion->query("SELECT pseudo , users.id FROM partyusers INNER JOIN users WHERE partyusers.users_1 = users.id");
$party1 = $requestparty1->fetch(PDO::FETCH_OBJ);

$requestparty2 = $connexion->query("SELECT pseudo , users.id  FROM partyusers INNER JOIN users WHERE partyusers.users_2 = users.id");
$party2 = $requestparty2->fetch(PDO::FETCH_OBJ);

$requestparty3 = $connexion->query("SELECT pseudo , users.id FROM partyusers INNER JOIN users WHERE partyusers.users_3 = users.id");
$party3 = $requestparty3->fetch(PDO::FETCH_OBJ);

$requestparty4 = $connexion->query("SELECT pseudo , users.id FROM partyusers INNER JOIN users WHERE partyusers.users_4 = users.id");
$party4 = $requestparty4->fetch(PDO::FETCH_OBJ);

$json = [$party1, $party2, $party3, $party4];
echo json_encode($json);



?>