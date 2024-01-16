<?php include './partials/header.php' ?>

<div class="container">
    <h1>Créer une partie : </h1>
    <div class="row">
        <div class="col">
            <form action="./process/client/create_party.php" method="post">
                <input type="hidden" name="id" value="<?=$_SESSION['id'] ?>">
                <button type="button" class="btn btn-primary" data-bs-target="#category" data-bs-toggle="collapse" aria-expanded="false" aria-controls="#category">Category</button>
            <div id="category" class="collapse">
                <div>
                    <input type="checkbox" id="film" name="film" />
                    <label for="film">film</label>
                </div>
                <div>
                    <input type="checkbox" id="music" name="music" />
                    <label for="music">Horns</label>
                </div>
                <div>
                    <input type="checkbox" id="videogame" name="videogame" />
                    <label for="videogame">Video game</label>
                </div>
                <div>
                    <input type="checkbox" id="sport" name="sport" />
                    <label for="sport">Sport</label>
                </div>
            </div>
            <select class="form-select" name="numberQuestion" id="numberQuestion">
                <option selected>Nombre de question : </option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="25">15</option>
                <option value="30">30</option>
            </select>
            <button class="btn btn-danger" type="submit" >Let's go !</button>
            </form>
            
        </div>
    </div>
</div>











<?php include './partials/footer.php' ?>