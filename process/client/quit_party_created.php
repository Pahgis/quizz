<?php

    if(!empty($_POST["id_party"])){

        require_once '../../config/connexion.php';
        $preparedRequest = $connexion->prepare("DELETE FROM party WHERE id=" . $_POST["id_party"]);
        $preparedRequest->execute();
        header('Location: ../../quizz.php');

    }


?>