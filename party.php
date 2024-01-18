<?php include './partials/header.php';

require_once './config/connexion.php';
if (isset($_GET["party"])) {
    $prepareRequest = $connexion->prepare("SELECT * FROM party WHERE id=" . $_GET["party"]);
    $prepareRequest->execute();
    $party = $prepareRequest->fetch(PDO::FETCH_ASSOC);
} else {
    $party["id_admin"] = "";
}





?>
<div class="ready">
    <div class="container">
        <div class="d-flex flex-row justify-content-around justify-content-lg-between">

            <?php
            if ($party["id_admin"] == $_SESSION["id"]) { ?>
                <h1>Partie : </h1>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#quit">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </button>
        </div>
        <div class="modal fade" id="quit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">Quitter et supprimer la partie ?</div>
                    <form action="./process/client/quit_party_created.php" method="post">
                        <input type="hidden" name="id_party" value="<?= $_GET["party"] ?>">
                        
                        <div class="d-flex flex-row justify-content-evenly">
                            <button class="btn btn-primary" type="submit">Oui</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Non</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <?php }
    ?>
    <div class="container">
        <div class="d-flex flex-row justify-content-around justify-content-lg-between">

            <?php
            if ($party["id_admin"] != $_SESSION["id"]) { ?>
                <h1>Partie : </h1>
        </div>
        <form action="./process/client/party_logout.php" method="post">
            <input type="hidden" name="party" value="<?= $_GET["party"] ?>">
            <input type="hidden" name="party2" value="<?= $_GET["party"] ?>">
            <input type="hidden" name="id_user" value="<?= $_SESSION["id"] ?>">
            <div class="d-flex flex-row justify-content-evenly">
                <button class="btn btn-primary" type="submit">Quit</button>
            </div>
        </form>
    <?php }
    ?>


    <div class="container">
        <h3>Liste joueurs : </h3>
        <div class="liste">

        </div>
    </div>
    </div>
    <?php
    if ($party["id_admin"] == $_SESSION["id"]) { ?>
        <form action="" method="POST">
            <input type="hidden" name="party2" value="<?= $_GET["party"] ?>">
            <button class="btn btn-success start" type="button">Let's go</button>
        </form>

    <?php } ?>
    </div>
</div>
</div>
<div class="timer">

</div>
<input type="hidden" name="id_user" value="<?= $_SESSION["id"] ?>">
<div class="quest">

</div>
<script src="./assets/js/party/party_log.js"></script>
<?php include './partials/footer.php' ?>