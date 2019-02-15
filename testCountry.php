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

//Nom = Italie
//Surface = 0
//Population = 0

// Atribut une valeur à l'attribut d'instance Nom
//Non l’ensemble des attributs d’instance de cet objet n'ont pas les valeurs désirées
//Oui, on aurait du appeller un constructeur avec trois paramètres

//Q4

$espagne = new Country ();

$belgique = new Country ("Belgique",224199.2);

$espagne -> print();

$belgique -> print();

//Les attributs de l'objet espagne sont initialisé a 0 pour les float et les int et les string sont initialisé en Unknown
//alors que pour la Belgique les paramètres sont bien initialisé sauf pour la population qui est a 0

//Q5

$copiefrance = new country();


$copiefrance -> print();
$france -> print();

//on observe que si on a aucun parametre dans l'objet copie france on a 0 et UnKnown alors que dans l'objet france on est le bon paramètre
//Il faudrait donc initialisé des paramètre a copiefrance

//Q6


$copiefrance -> setName($france -> getName());
$copiefrance -> setsurface($france -> getSurface());
$copiefrance -> setpopulation($france -> getPopulation());

$copiefrance -> print();

//Q7

function copie(Country $country): Country {
    $copie =new Country ();

    $copie -> setName($country -> getName());
    $copie -> setsurface($country -> getSurface());
    $copie -> setpopulation($country -> getPopulation());

    return $copie;
}

copie($belgique)-> print();
//$a -> print();
