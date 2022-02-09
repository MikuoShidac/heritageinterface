<?php
include 'Sport.php';
include 'SportRelais.php';

echo "project heritage et interface: <br>";

$listSport=new Sport("Football", 11);
echo $listSport->getDescription();

$listSportRelais=new SportRelais(nomSport: "4x100", distance: 400, nbJoueurs: 1);
echo $listSportRelais->getDescription();