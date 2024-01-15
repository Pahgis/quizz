<?php

if (
    !empty($_POST["pseudo"]) &&
    !empty($_POST["email"]) &&
    !empty($_POST["password"]) &&
    !empty($_POST["password_confirm"]) &&
    $_POST["password"] === $_POST["password_confirm"]
) {

    require_once '../../config/connexion.php';
    $hashpwd = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $prepareRequest = $connexion->prepare("INSERT INTO users (pseudo, pwd, mail) VALUE (?,?,?");
    $prepareRequest->execute([
        $_POST["pseudo"],
        $hashpwd,
        $_POST["email"]
    ]);
    header('Location : ../../quizz.php');
}
