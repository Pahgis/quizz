<?php

require_once '../../config/connexion.php';

$preparedRequestparty = $connexion->prepare("SELECT * FROM party");
    $preparedRequestparty->execute();
    $party = $preparedRequestparty->fetchAll(PDO::FETCH_ASSOC);
    $data = json_encode($party);
    echo $data;

?>