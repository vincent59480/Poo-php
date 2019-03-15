<?php
require_once "rectangle.php";
require_once "square.php";
require_once "circle.php";

$rectangle = new rectangle(10,5);
$circle= new circle(5);
$square = new square(5); // Un carré étend la classe rectangle
// $circle = new Circle(5); // L'argument est le rayon du cercle

echo $rectangle->area() . '<br />'; // Affiche 50
echo $rectangle->perimetre() . '<br />'; // Affiche 30

echo $square->area() . '<br />'; // Affiche 25
echo $square->perimetre() . '<br />'; // Affiche 20

echo $circle->area() . '<br />'; // Affiche 78.54
echo $circle->perimetre() . '<br />'; // Affiche 31.42

// $form = new Form();
// $form
//     ->add($rectangle)
//     ->add($square)
//     ->add($circle)
// ;

// echo $form->area() . '<br />'; // Affiche 153.54
// echo $form->perimeter() . '<br />'; // Affiche 81.42