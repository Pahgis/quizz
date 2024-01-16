<?php
  require_once '../../config/connexion.php';
if(!empty($_POST["numberQuestion"])){

  

    $preparedRequest = $connexion->prepare("INSERT INTO party (users_id, id_admin) VALUES (?,?)");
    $preparedRequest->execute([
        $_POST["id"],
        $_POST["id"]
    ]);
    $party = $connexion->lastInsertId();
     header('Location: ../../party.php?admin=1&&party=' . $party);


}


   
?>