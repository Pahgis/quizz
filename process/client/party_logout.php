<?php


$party = $_POST["party"];
    require_once '../../config/connexion.php';
    $preparedRequest = $connexion->query("SELECT  users_2, users_3, users_4 FROM partyusers WHERE id_party=$party");
    $user = $preparedRequest->fetch(PDO::FETCH_ASSOC);
    
 

    if($user["users_2"] == $_POST["id_user"]){
        $preparedRequestuser = $connexion->prepare("UPDATE partyusers SET users_2=? WHERE id_party=?");
        $preparedRequestuser->execute([
            null,
            $_POST["party"]
        ]);
        
    }elseif($user["users_3"] == $_POST["id_user"]){
        $preparedRequestuser = $connexion->prepare("UPDATE partyusers SET users_3=? WHERE id_party=?");
        $preparedRequestuser->execute([
            null,
            $_POST["party"]
        ]);
    }elseif($user["users_4"] == $_POST["id_user"]){
        $preparedRequestuser = $connexion->prepare("UPDATE partyusers SET users_4=? WHERE id_party=?");
        $preparedRequestuser->execute([
            null,
            $_POST["party"]
        ]);
    }
    header('Location: ../../listeparty.php?id=' . $_POST["id_user"]);
?>