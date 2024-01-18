<?php include './partials/header.php' ?>
<div class="container">
    <div class="d-flex flex-row justify-content-around justify-content-lg-between">
       
        <h1>Liste partie</h1>
        <button class="btn" onclick="getUsers();"><i class="fa-solid fa-arrows-rotate"></i></button>
    </div>
</div>
<div class="row">
    <div class="col-4"></div>
    <div class="d-flex flex-column"></div>
</div>
<form action="./process/client/party_log.php" method="POST">
<input type="hidden" name="id_user" value="<?=$_GET["id"] ?>">
<div class="party"></div>
</form>

<script src="./assets/js/connectedlist/partylist.js"></script>
<?php include './partials/footer.php' ?>