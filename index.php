<?php 
echo "<meta charset='utf-8'/>";

require "classes/Client.php";
require "classes/Compte.php";
// EXERCICE BANQUE

// Creation compte, Client
// Depots, Retraits, Transfert (entre compte)

// Creer les classes necessaires pour decrire le fonctionnement d'une banque


$client1 = new Client('m', 'Alex', 'Hitchens');
$compte1 = new Compte($client1, 1200);

$client2 = new Client('f', 'Malika', 'Menard');
$compte2 = new Compte($client2, 100);

$client1->changerLeNom('William');

$compte1->depot(200)->depot(300);

if($compte1->retrait(200) != false){
	echo "<p>Retrait accepter</p>";
	echo "<hr />";
} else {
	echo "<p>Vous ne pouvez effectuer cette opértion !!</p>";
	echo "<hr />";
}

// var_dump($compte1);
// var_dump($compte2);
$compte1->transfert($compte2, 1000);
$compte1->transfert($compte2, 1000);
$compte1->transfert($compte2, -400);