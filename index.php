<?php
require('animal.php');
require('ape.php');
require('frog.php');

$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo "<br>";
echo $sheep->legs; // 2
echo "<br>";
echo $sheep->cold_blooded; // false

echo "<br>";

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"

echo "<br>";

$kodok = new Frog("buduk");
$kodok->jump(); // "hop hop"