<?php
require(ROOT . "model/HorseModel.php");


function index()
{
    //1. Haal alle paarden op uit de database (via de model) en sla deze op in een variable
    $horse = getAllHorse();
    //2. Geef een view weer en geef de variable met paarden hieraan mee
    render('horse/index', ['horse' => $horse]);
}

function create()
{
    //1. Geef een view weer waarin een formulier staat voor het aanmaken van een paard
    render('horse/create');
}

function store()
{
    //1. Maak een nieuw paard aan met de data uit het formulier en sla deze op in de database
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $success = createHorse($_POST);
    } else {
        echo "No data received.";
    }
    //2. Bouw een url op en redirect hierheen
    if ($success) {
        header("Location: " . URL . "horse/index");
    } else {
        echo "Invalid data received.";
    }
}

function edit($id)
{
    //1. Haal een paard op met een specifiek id en sla deze op in een variable
    $horse = getHorse($id);
    //2. Geef een view weer voor het updaten en geef de variable met paard hieraan mee
    render('horse/update', ['horse' => $horse]);
}

function update()
{
    //1. Update een bestaand paard met de data uit het formulier en sla deze op in de database
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $success = updateHorse($_POST);
    }

    //2. Bouw een url en redirect hierheen
    if ($success) {
        header("Location: " . URL . "horse/index");
    } else {
        echo "Error";
    }
}

function delete($id)
{
    //1. Haal een paard op met een specifiek id en sla deze op in een variable
    $horse = getHorse($id);
    //2. Geef een view weer voor het verwijderen en geef de variable met paard hieraan mee
    render('horse/delete', ['horse' => $horse]);
}

function destroy($id)
{
    //1. Delete een paard uit de database
    if (!isset($id)) exit("Error doing that.");

    $success = deleteHorse($id);

    //2. Bouw een url en redirect hierheen
    if ($success) {
        header("Location: " . URL . "horse/index");
    } else {
        echo "Error.";
    }
}