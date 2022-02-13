<?php
include 'Comparable.php';
include 'ISport.php';
include 'Sport.php';
include 'SportRelais.php';
include 'SportBallon.php';
include 'Club.php';


//echo "project heritage et interface: <br>";

$listclub[1]=new Club(1,"PSG",234);
$listclub[2]=new Club(2,"Pointou-Charante",542);
$listclub[3]=new Club(3,"Perpignant",500);

//Sport du PSG
$sb=new Sport("Football",11);
$listclub[1]->AjouterSports($sb);

//Sport de Pointou-Charante
$sport1=new Sport("Javelot",1);
$sport2=new Sport("Judo",1);
$sportBallon1=new SportBallon("FootBall",11,68,105);
$sportBallon2=new SportBallon("HandBall",7,35,65);
$sportRelais1=new SportRelais("4x500",400,4);
$listclub[2]->AjouterSports($sport1);
$listclub[2]->AjouterSports($sport2);
$listclub[2]->AjouterSports($sportBallon1);
$listclub[2]->AjouterSports($sportBallon2);
$listclub[2]->AjouterSports($sportRelais1);

//Sport de Perpignant
$sport3=new Sport("Cyclisme",1);
$sportBallon3=new SportBallon("FootBall",11,68,105);
$sportBallon4=new SportBallon("Rugby",15,65,115);
$sportRelais2=new SportRelais("100m",100,1);
$listclub[3]->AjouterSports($sport3);
$listclub[3]->AjouterSports($sportBallon3);
$listclub[3]->AjouterSports($sportBallon4);
$listclub[3]->AjouterSports($sportRelais2);
/**
$listSport[]=new Sport("Football", 11);
$listSport[]=new SportRelais("4x100",400, 1);
$listSport[]=new SportBallon("HandBall",8,48,50);
$listSport[]=new SportRelais("100",100,1);
$listSport[]=new SportRelais("200",200,1);
$listSport[]=new SportBallon("Basket",8,20,30);
$listSport[]=new Sport("SUPER SMASH BROS MELEEEEEEEEEE", 16);
$listSport[]=new SportRelais("Look for a new queen",1000000000,9001);

foreach ($listSport as $keyListSport => $valueSport)
{
    echo $valueSport->getDescription()."<br>";
}
foreach ($listclub as $values)
{
    echo $values->getNomClub()."<br>";
} */

echo '<h1>Liste des clubs: </h1> <a href="localhost:8080"></a><br>';
echo '<a href="PSG"> 1-PSG </a><br>';
echo '<a href="Pointou-Charante"> 2-Pointou-Charante </a><br>';
echo '<a href="Perpignant"> 3-Perpignant </a><br>';