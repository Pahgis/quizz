<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>

</head>

<body>
    <header>
        <?php if ($_SESSION) { ?>
            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <a class="navbar-brand" href="#">Quizz</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./quizz.php">Créer une partie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./listeparty.php?id=<?=$_SESSION["id"] ?>">Liste parties</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Classement</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../process/login/logout.php">Deconnexion</a>
                        </li>
                    </ul>
                </div>
            </nav>
        <?php } ?>


    </header>