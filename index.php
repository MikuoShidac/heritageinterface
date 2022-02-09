<?php
include 'Sport.php';

echo "project heritage et interface: <br>";

$listSport=new Sport("Football", 11);
echo $listSport->getDescription();