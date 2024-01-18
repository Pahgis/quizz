<?php

require_once '../../config/connexion.php';

$prepareRequestParty = $connexion->prepare('SELECT * FROM party WHERE ready=1');
$prepareRequestParty->execute();

$party = $prepareRequestParty->fetch(PDO::FETCH_OBJ);
echo json_encode($party);

?>