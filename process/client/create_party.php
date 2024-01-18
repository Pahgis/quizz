<?php
  require_once '../../config/connexion.php';
if(!empty($_POST["numberQuestion"])){

  

    $preparedRequest = $connexion->prepare("INSERT INTO party (users_id, id_admin) VALUES (?,?)");
    $preparedRequest->execute([
        $_POST["id"],
        $_POST["id"]
    ]);
    $party = $connexion->lastInsertId();

    $requestparty = $connexion->prepare("INSERT INTO partyusers (id_party, users_1) VALUES (?,?)");
    $requestparty->execute([
      $party,
      $_POST["id"]
    ]);
     header('Location: ../../party.php?party=' . $party);


}


   
?>