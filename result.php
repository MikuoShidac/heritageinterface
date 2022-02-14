<?php
include 'Comparable.php';
include 'ISport.php';
include 'Sport.php';
include 'SportRelais.php';
include 'SportBallon.php';
include 'Club.php';
include 'data.php';



if(isset($_GET['id']) || isset($_POST["id"]) ) {
    if(isset($_GET["id"])){
        $idClub=$_GET["id"];
    } else {
        $idClub=$_POST["id"];
    }

    echo '<h2>Liste des sport de ' . $listclub[$idClub]->getNomClub() . '</h2>';
    $sp1 = $listclub[$idClub]->getLesSports();
    foreach ($sp1 as $keySp1 => $valueSp1) {
        echo $valueSp1->getDescription();
    }
}
echo "<br> <a href='index.php'>RETOUR</a>";
echo "<br><br> si vous souhaitez choisir un autre club <br>";
echo '<h3>Voici la liste des clubs: </h3> <a href="index.php"></a>';
foreach($listclub as $keyclub =>$valueClub)
{
    echo "<a href=result.php?id={$keyclub}>{$keyclub} - {$valueClub->getNomClub()} {$valueClub->getNbPoint()}</a><br>";
}