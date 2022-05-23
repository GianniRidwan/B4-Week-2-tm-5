<?php
// maak een bevestig pagina voor het verwijderen van een reservation
if (isset($reservation)) $reservation = $reservation;

?>

<h1>Reservering verwijderen</h1>
    <p>Weet je zeker dat je de reservering wil verwijderen?</p>
        <div class="row">
            <a href="<?= URL ?>reservation/index" class="btn btn-primary">Annuleer</a>
            <a href="<?= URL ?>reservation/destroy/<?= $reservation['id'] ?>"class="btn btn-danger">Verwijder</a>
        </div>