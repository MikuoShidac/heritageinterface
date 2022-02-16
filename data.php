<?php


$club[1]=new Club(1,"PSG",234);
$club[2]=new Club(2,"Pointou-Charante",542);
$club[3]=new Club(3,"Perpignant",500);
$club[4]=new Club(4,"Jalganox",628);

//Sport du PSG
$sb=new Sport("Football",11);
$club[1]->AjouterSports($sb);

//Sport de Pointou-Charante
$sport1=new Sport("Javelot",1);
$sport2=new Sport("Judo",1);
$sportBallon1=new SportBallon("FootBall",11,68,105);
$sportBallon2=new SportBallon("HandBall",7,35,65);
$sportRelais1=new SportRelais("4x500",400,4);
$club[2]->AjouterSports($sport1);
$club[2]->AjouterSports($sport2);
$club[2]->AjouterSports($sportBallon1);
$club[2]->AjouterSports($sportBallon2);
$club[2]->AjouterSports($sportRelais1);

//Sport de Perpignant
$sport3=new Sport("Cyclisme",1);
$sportBallon3=new SportBallon("FootBall",11,68,105);
$sportBallon4=new SportBallon("Rugby",15,65,115);
$sportRelais2=new SportRelais("100m",100,1);
$club[3]->AjouterSports($sport3);
$club[3]->AjouterSports($sportBallon3);
$club[3]->AjouterSports($sportBallon4);
$club[3]->AjouterSports($sportRelais2);

//Sport de Jalganox
$sportRelais3=new SportRelais("La fuite",1000,1);
$club[4]->AjouterSports($sportRelais3);