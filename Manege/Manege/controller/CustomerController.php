<?php
require(ROOT . "model/CustomerModel.php");


function index()
{
    //1. Haal alle klant op uit de database (via de model) en sla deze op in een variable
    $customer = getAllCustomer();
    //2. Geef een view weer en geef de variable met klant hieraan mee
    render('customer/index', ['customer' => $customer]);
}

function create()
{
    //1. Geef een view weer waarin een formulier staat voor het aanmaken van een klant
    render('customer/create');
}

function store()
{
    //1. Maak een nieuwe klant aan met de data uit het formulier en sla deze op in de database
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $success = createCustomer($_POST);
    } else {
        echo "No data received.";
    }
    //2. Bouw een url op en redirect hierheen
    if ($success) {
        header("Location: " . URL . "customer/index");
    } else {
        echo "Invalid data received.";
    }
}

function edit($id)
{
    //1. Haal een klant op met een specifiek id en sla deze op in een variable
    $customer = getCustomer($id);
    //2. Geef een view weer voor het updaten en geef de variable met klant hieraan mee
    render('customer/update', ['customer' => $customer]);
}

function update()
{
    //1. Update een bestaande klant met de data uit het formulier en sla deze op in de database
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $success = updateCustomer($_POST);
    }

    //2. Bouw een url en redirect hierheen
    if ($success) {
        header("Location: " . URL . "customer/index");
    } else {
        echo "Error";
    }
}

function delete($id)
{
    //1. Haal een klant op met een specifiek id en sla deze op in een variable
    $customer = getCustomer($id);
    //2. Geef een view weer voor het verwijderen en geef de variable met de klant hieraan mee
    render('customer/delete', ['customer' => $customer]);
}

function destroy($id)
{
    //1. Delete een klant uit de database
    if (!isset($id)) exit("Error doing that.");

    $success = deleteCustomer($id);

    //2. Bouw een url en redirect hierheen
    if ($success) {
        header("Location: " . URL . "customer/index");
    } else {
        echo "Error.";
    }
}