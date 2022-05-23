<?php
// maak een bevestig pagina voor het verwijderen van een paard
if (isset($horse)) $horse = $horse;

?>

<h1>Paard verwijderen</h1>
    <p>Weet je zeker dat je <?= $horse['horsename'] ?> wil verwijderen?</p>
        <div class="row">
            <a href="<?= URL ?>horse/index" class="btn btn-primary">Annuleer</a>
            <a href="<?= URL ?>horse/destroy/<?= $horse['id'] ?>"class="btn btn-danger">Verwijder</a>
        </div>