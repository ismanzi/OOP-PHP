<?php
require_once "frog.php";
require_once "ape.php";

$sheep = new animal ("Shaun");
echo "Name = ".$sheep->get_name();
echo "<br/> Legs = ". $sheep->get_legs();
echo "<br/> Cold Blooded = ". $sheep->get_name();
echo "<br> <br>";

$katak = new frog("Buduk");
$katak->GetFrogName();
$katak->GetFrogLegs();
$katak->GetCold();
$katak->GetJump();
echo "<br> <br>";

$kera = new ape("Sun Go Kong");
$kera->GetApeName();
$kera->GetApeLegs();
$kera->GetApeCold();
$kera->GetApeYell();
?>