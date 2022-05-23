<?php

function getAllHorse()
{
    // Met het try statement kunnen we code proberen uit te voeren. Wanneer deze
    // mislukt kunnen we de foutmelding afvangen en eventueel de gebruiker een
    // nette foutmelding laten zien. In het catch statement wordt de fout afgevangen
    try {
        // Open de verbinding met de database
        $conn = openDatabaseConnection();

        // Zet de query klaar door middel van de prepare method
        $stmt = $conn->prepare("SELECT * FROM horse");

        // Voer de query uit
        $stmt->execute();

        // Haal alle resultaten op en maak deze op in een array
        // In dit geval is het mogelijk dat we meedere medewerkers ophalen, daarom gebruiken we
        // hier de fetchAll functie.
        $result = $stmt->fetchAll();

    } // Vang de foutmelding af
    catch (PDOException $e) {
        // Zet de foutmelding op het scherm
        echo "Connection failed: " . $e->getMessage();
    }

    // Maak de database verbinding leeg. Dit zorgt ervoor dat het geheugen
    // van de server opgeschoond blijft
    $conn = null;

    // Geef het resultaat terug aan de controller
    return $result;
}

function getHorse($id)
{
    try {
        // Open de verbinding met de database
        $conn = openDatabaseConnection();

        // Zet de query klaar door midel van de prepare method. Voeg hierbij een
        // WHERE clause toe (WHERE id = :id. Deze vullen we later in de code
        $stmt = $conn->prepare("SELECT * FROM horse WHERE id = :id");
        // Met bindParam kunnen we een parameter binden. Dit vult de waarde op de plaats in
        // We vervangen :id in de query voor het id wat de functie binnen is gekomen.
        $stmt->bindParam(":id", $id);

        // Voer de query uit
        $stmt->execute();

        // Haal alle resultaten op en maak deze op in een array
        // In dit geval weten we zeker dat we maar 1 medewerker op halen (de where clause), 
        //daarom gebruiken we hier de fetch functie.
        $result = $stmt->fetch();

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    // Maak de database verbinding leeg. Dit zorgt ervoor dat het geheugen
    // van de server opgeschoond blijft
    $conn = null;

    // Geef het resultaat terug aan de controller
    return $result;
}

function createHorse($data)
{
    $success = false;
    foreach ($data as $woop) {
        if (empty($woop)) return false;
    }

    // Maak hier de code om een medewerker toe te voegen
    try {
        $pdo = openDatabaseConnection();

        $horsename = sanitize($data['horsename']);
        $age = sanitize($data['age']);
        $breed = sanitize($data['breed']);
        $height = sanitize($data['height']);

        $stmt = $pdo->prepare("INSERT INTO horse (horsename, age, breed, height) VALUES (:horsename, :age, :breed, :height)");
        $stmt->bindParam(":horsename", $horsename);
        $stmt->bindParam(":age", $age);
        $stmt->bindParam(":breed", $breed);
        $stmt->bindParam(":height", $height);

        $stmt->execute();

        if ($stmt) $success = true;

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $pdo = null;

    return $success;

}


function updateHorse($data)
{
    // Maak hier de code om een medewerker te bewerken
    $success = false;
    try {
        $pdo = openDatabaseConnection();

        $id = sanitize($data['id']);
        $horsename = sanitize($data['horsename']);
        $age = sanitize($data['age']);
        $breed = sanitize($data['breed']);
        $height = sanitize($data['height']);

        $stmt = $pdo->prepare("UPDATE horse SET horsename=:horsename, age=:age, breed=:breed, height=:height WHERE id=:id");
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":horsename", $horsename);
        $stmt->bindParam(":age", $age);
        $stmt->bindParam(":breed", $breed);
        $stmt->bindParam(":height", $height);

        $stmt->execute();

        if ($stmt) $success = true;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $pdo = null;

    return $success;
}

function deleteHorse($id)
{
    // Maak hier de code om een medewerker te verwijderen
    $success = false;
    try {
        $pdo = openDatabaseConnection();
        $id = sanitize($id);

        $stmt = $pdo->prepare("DELETE FROM horse WHERE id=?");
        $stmt->execute([$id]);

        if ($stmt) $success = true;

    } catch (PDOException $e) {
        echo "Connection failed. " . $e->getMessage();
    }

    $pdo = null;

    return $success;
}

function sanitize($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}