<?php include './partials/header.php' ?>

<div class="container">
<div class="d-flex flex-row justify-content-around justify-content-lg-between">
    <h1>Partie : </h1>
    <?php
    if (isset($_GET["admin"])) { ?>
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
    <button class="test">test</button>
</div>
<div class="question"></div>
<script src="./assets/js/connectedlist/test.js"></script>
<?php include './partials/footer.php' ?>