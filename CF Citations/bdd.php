<?php


error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);


$host = '';
$user = '';
$password = '';
$dbname = '';

// set bdd //

try
{
    // Connect MYSQL
    $bdd = new PDO('mysql:host=.hosting-data.io;dbname=;charset=utf8', '', '');
}

/*
$host = '';
$user = '';
$password = '';
$dbname = '';

// set bdd //

try
{
    // Connect MYSQL
    $bdd = new PDO('mysql:host=;dbname=;charset=utf8', '', '');
}

*/

catch(Exception $e)
{
    // Stop si erreur
        die('Erreur : '.$e->getMessage());
}
// Savoir ou est l'erreur
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// Rand pour random cita

$reponse = $bdd->query("SELECT * FROM Citations ORDER BY RAND() LIMIT 1");




//cita //



while ($row = $reponse->fetch()){


    echo $row['Citations'];?>
    <br>
    <?php
    echo $row['Auteur'];

}



// fermer connexion //

unset($reponse);

unset($bdd);
