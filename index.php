<?php
include 'Comparable.php';
include 'ISport.php';
include 'Sport.php';
include 'SportRelais.php';
include 'SportBallon.php';
include 'Club.php';


echo "project heritage et interface: <br>";

$listclub[1]=new Club(idClub: 1,nomClub: "PSG",nbPoint: 234);
$listclub[2]=new Club(idClub: 2,nomClub: "Pointou-Charante",nbPoint: 542);
$listclub[3]=new Club(idClub: 3,nomClub: "Perpignant",nbPoint: 500);

$listclub[1]->AjouterSports(new Sport(nomSport: "Football",nbJoueurs: 11));

$listclub[2]->AjouterSports(new SportRelais(nomSport: "DiDaDou 100m",nbJoueurs: 1,distance: 100));
$listclub[2]->AjouterSports(new SportRelais(nomSport: "DiDaDou 300m",nbJoueurs: 1,distance: 300));

$listclub[3]->AjouterSports(new SportBallon(nomSport: "Handball",nbJoueurs: 8,largeur: 20,longueur: 10));
$listclub[3]->AjouterSports(new SportBallon(nomSport: "Basket",nbJoueurs: 6,largeur: 20,longueur: 30));
$listclub[3]->AjouterSports(new SportRelais(nomSport: "Tire a l'arc",nbJoueurs: 3,distance: 150));

$listSport[]=new Sport("Football", 11);
$listSport[]=new SportRelais(nomSport: "4x100", distance: 400, nbJoueurs: 1);
$listSport[]=new SportBallon(nomSport: "HandBall",nbJoueurs: 8,longueur: 48,largeur: 50);
$listSport[]=new SportRelais(nomSport: "100", distance: 100, nbJoueurs: 1);
$listSport[]=new SportRelais(nomSport: "200", distance: 200, nbJoueurs: 1);
$listSport[]=new SportBallon(nomSport: "Basket",nbJoueurs: 8,longueur: 20,largeur: 30);
$listSport[]=new Sport("SUPER SMASH BROS MELEEEEEEEEEE", 16);
$listSport[]=new SportRelais(nomSport: "Look for a new queen", distance: 1000000000, nbJoueurs: 9001);

foreach ($listSport as $keyListSport => $valueSport)
{
    echo $valueSport->getDescription()."<br>";
}
foreach ($listclub as $values)
{
    echo $values->getNomClub()."<br>";
}