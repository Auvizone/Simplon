<?php


error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);


$host = 'db5000272979';
$user = 'dbu45287';
$password = 'root';
$dbname = 'dbs266440';

// set bdd //

try
{
    // Connect MYSQL
    $bdd = new PDO('mysql:host=db5000272979.hosting-data.io;dbname=dbs266440;charset=utf8', 'dbu45287', 'root');
}

/*
$host = 'localhost';
$user = 'root';
$password = 'test';
$dbname = 'Citations';

// set bdd //

try
{
    // Connect MYSQL
    $bdd = new PDO('mysql:host=localhost;dbname=Citations;charset=utf8', 'root', 'test');
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
