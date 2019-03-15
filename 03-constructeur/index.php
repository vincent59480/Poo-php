<?php
require_once "Car.php";
/**
 * Une voiture possede 4 roues, une couleur,une marque,et un modele.
 * une voiture peut rouler et klaxoner
 */

 $car=new Car("renault","Megane","rouge");
$car->setCouleur("bleu");

echo "J'ai une ".$car->drive();
?> <br><?php
echo $car->klaxon();
?> <br><?php
$moto = new Moto("kawa","stinger ZXR 750","verte");
echo $moto->drive();