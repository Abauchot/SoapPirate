<?php
function trouverTresor($pirateName) {
    // Définition de la liste des pirates
    $nomPirateList = ["Jack Sparrow", "Barbe Noire", "Long John Silver", "Barbe Rouge", "Capitaine Crochet"];

    // Vérification de l'existence du pirate
    if(in_array($pirateName, $nomPirateList)) {
        // Génération aléatoire des coordonnées
        $latitude = mt_rand(-9000, 90000) / 100.0;
        $longitude = mt_rand(-18000, 18000) / 100.0;
        // Retour des coordonnées si le pirate existe
        return [
            "latitude" => $latitude,
            "longitude" => $longitude,
        ];
    } 
    // Retour d'une erreur si le pirate n'existe pas
    else {
        return ["erreur" => "Le nom du pirate n'est pas valide."];
    }
}

// Création du serveur SOAP
$server = new SoapServer("piratetreasure.wsdl");

// Ajout de la fonction au serveur SOAP
$server->addFunction("trouverTresor");

// Gestion de la requête SOAP
$server->handle();
?>
