<?php
declare(strict_types = 1);

//Q1
require "country.class.php";

//Q2
$france = new Country ("France", 641185.0 , 66600000);
$france -> print();

// L'appel de print affiche le nom des paramètres et leur valeur puis le destructeur détruit france
// Nom : str 
// surface : float 
// Population : int
//Le constructeur sert à attribuer des valeurs aux attributs d'instances de $france.

//Q3

$italie = new Country ("Italie");

$italie -> print();
