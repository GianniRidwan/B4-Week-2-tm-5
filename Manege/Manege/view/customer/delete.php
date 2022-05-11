<?php
// maak een bevestig pagina voor het verwijderen van een klant
if (isset($customer)) $customer = $customer;

?>

<h1>Klant verwijderen</h1>
    <p>Weet je zeker dat je <?= $customer['name'] ?> wil verwijderen?</p>
        <div class="row">
            <a href="<?= URL ?>customer/index" class="btn btn-primary">Annuleer</a>
            <a href="<?= URL ?>customer/destroy/<?= $customer['id'] ?>"class="btn btn-danger">Verwijder</a>
        </div>