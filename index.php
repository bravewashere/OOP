<?php 
require  'animal.php';
require 'ape.php';
require 'frog.php';


$sheep = new Animal("shaun");

echo $sheep->name."<br>"; // "shaun"
echo $sheep->legs."<br>"; // 2
echo $sheep->cold_blooded."<br>"; // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
echo "<br>";
// index.php
$sungokong = new Ape("kera sakti");
echo $sungokong->name."<br>"; // "kera sakti"
echo $sungokong->legs."<br>"; // 2
echo $sungokong->cold_blooded; // false
$sungokong->yell(); // "Auooo"

echo "<br>";
$kodok = new Frog("buduk");
echo $kodok->name."<br>"; // "buduk"
echo $kodok->legs."<br>"; // 2
echo $kodok->cold_blooded; // false
$kodok->jump() ; // "hop hop"
 ?>