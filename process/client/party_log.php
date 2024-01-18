<?php

$iduser = $_POST["id_user"];
$party = $_POST["party"];
    require_once '../../config/connexion.php';
    $preparedRequest = $connexion->query("SELECT  users_2, users_3, users_4 FROM partyusers WHERE id_party=$party");
    $user = $preparedRequest->fetch(PDO::FETCH_ASSOC);
    
 

    if($user["users_2"] == ""){
        $preparedRequestuser = $connexion->prepare("UPDATE partyusers SET users_2=? WHERE id_party=?");
        $preparedRequestuser->execute([
            $_POST["id_user"],
            $_POST["party"]
        ]);
        
    }elseif($user["users_3"] == ""){
        $preparedRequestuser = $connexion->prepare("UPDATE partyusers SET users_3=? WHERE id_party=?");
        $preparedRequestuser->execute([
            $_POST["id_user"],
            $_POST["party"]
        ]);
    }elseif($user["users_4"] == ""){
        $preparedRequestuser = $connexion->prepare("UPDATE partyusers SET users_4=? WHERE id_party=?");
        $preparedRequestuser->execute([
            $_POST["id_user"],
            $_POST["party"]
        ]);
    }
    header('Location: ../../party.php?party=' . $_POST["party"]);
?>