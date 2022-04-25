<?php
// maak een bevestig pagina voor het verwijderen van een mededwerker
if (isset($employee)) $employee = $employee;

?>

<h1>Medewerker verwijderen</h1>
    <p>Weet je zeker dat je <?= $employee['name'] ?> wil verwijderen?</p>
    <p>ID: #<?= $employee['id'] ?></p>
        <div class="row">
            <a href="<?= URL ?>employee/index" class="btn btn-primary mt-4 col-4 mr-auto">Annuleer</a>
            <a href="<?= URL ?>employee/destroy/<?= $employee['id'] ?>"class="btn btn-danger mt-4 col-4 ml-auto">Verwijder</a>
        </div>