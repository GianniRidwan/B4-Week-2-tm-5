<?php
// maak een bevestig pagina voor het verwijderen van een mededwerker
if (isset($horse)) $horse = $horse;

?>

<h1>Paard verwijderen</h1>
    <p>Weet je zeker dat je <?= $horse['name'] ?> wil verwijderen?</p>
        <div class="row">
            <a href="<?= URL ?>horse/index" class="btn btn-primary">Annuleer</a>
            <a href="<?= URL ?>horse/destroy/<?= $horse['id'] ?>"class="btn btn-danger">Verwijder</a>
        </div>