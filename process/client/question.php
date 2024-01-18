<?php 

    require_once '../../config/connexion.php';


   for ($i=0; $i < 30 ; $i++) { 
    $rand = rand(1,30);
    $request = $connexion->query('SELECT * FROM mytable WHERE id=' .$rand);
    $question[] = $request->fetch(PDO::FETCH_ASSOC);
   }



 echo json_encode($question);

?>