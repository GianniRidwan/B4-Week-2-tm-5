<?php
require(ROOT . "model/ReservationModel.php");


function index()
{
    //1. Haal alle medewerkers op uit de database (via de model) en sla deze op in een variable
    $reservation = getAllReservation();
    //2. Geef een view weer en geef de variable met medewerkers hieraan mee
    render('reservation/index', ['reservation' => $reservation]);
}

function create()
{
    //1. Geef een view weer waarin een formulier staat voor het aanmaken van een medewerker
    render('reservation/create');
}

function store()
{
    //1. Maak een nieuwe medewerker aan met de data uit het formulier en sla deze op in de database
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $success = createReservation($_POST);
    } else {
        echo "No data received.";
    }
    //2. Bouw een url op en redirect hierheen
    if ($success) {
        header("Location: " . URL . "reservation/index");
    } else {
        echo "Invalid data received.";
    }
}

function edit($id)
{
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    $reservation = getReservation($id);
    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee
    render('reservation/update', ['reservation' => $reservation]);
}

function update()
{
    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $success = updateReservation($_POST);
    }

    //2. Bouw een url en redirect hierheen
    if ($success) {
        header("Location: " . URL . "reservation/index");
    } else {
        echo "Error";
    }
}

function delete($id)
{
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    $reservation = getReservation($id);
    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee
    render('reservation/delete', ['reservation' => $reservation]);
}

function destroy($id)
{
    //1. Delete een medewerker uit de database
    if (!isset($id)) exit("Error doing that.");

    $success = deleteReservation($id);

    //2. Bouw een url en redirect hierheen
    if ($success) {
        header("Location: " . URL . "reservation/index");
    } else {
        echo "Error.";
    }
}