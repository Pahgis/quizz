<?php 

    require_once '../../config/connexion.php';
    $request = $connexion->query('SELECT * FROM questions WHERE id=1');
    $question = $request->fetch(PDO::FETCH_ASSOC);
    echo json_encode($question);

?>