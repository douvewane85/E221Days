<?php 

include 'Cercle.php';
include 'Carre.php';
//Autoloading
//Creation Objet
//Pas Bon
//$fig=new Figure();
$fig=new Cercle();
//Hydrater 
//$fig->dimension=10;
$fig->setDimension(10);
$fig->perimetre();


$fig=new Carre();
//$fig=new Rectangle();
//$fig