<?php
require_once "personnage.php";
require_once "hunter.php";
require_once "warrior.php";
require_once "wizzard.php";
require_once "game.php";

$game=new game();
// Construction des personnnages
$aragorn=new warrior("Araborgn");
$legolas=new hunter("Legoplas");
$grandPaf =new wizzard("GrandPaf");
// $game ->addPlayer($aragorn)
//         ->addPlayer($legolas)
//         ->addPlayer($grandPaf); 


$aragorn->attack($legolas);
$legolas->rangeAttack($grandPaf);
$aragorn->attack($aragorn);
var_dump($aragorn);
var_dump($legolas);
var_dump($grandPaf);