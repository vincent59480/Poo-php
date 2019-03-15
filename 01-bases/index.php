<?php
require_once "Cat.php";

$bianca= new Cat();
$mina =new Cat();

// On peut affecter une valeur aux propriétés
$bianca->name="Bianca";
$bianca->type="Chat de gouttière";
$bianca->fur="fur";

// on peut affichier la valeur d'une proprièté
echo "mon chat s'appelle " .$bianca->name." et il fait ".$bianca->cry();

$mina->name="Mina";
echo "mon autre chat s'appelle " .$mina->name." et il fait ".$mina->cry(). " aussi";


var_dump($bianca);
var_dump($mina);