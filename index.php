<?php 

require_once ('animal.php');
require_once ('frog.php');
require_once ('ape.php');


//Shaun The Sheeep
$animal = new animal("shaun");
echo "Nama Hewan : $animal->name <br>";
echo "Jumlah kaki : $animal->legs <br>";
echo "Termasuk Hewan Berdarah Dingin : $animal->cold_blooded <br><br>";

//Kodok Keropi
$kodok = new kodok("buduk");
echo "Nama Hewan : $kodok->name <br>";
echo "Jumlah kaki : $kodok->legs <br>";
echo "Termasuk Hewan Berdarah Dingin : $kodok->cold_blooded <br>";
echo $kodok -> jump();
echo "<br><br>";


//Kera Sakti
$sungokong = new sungokong("Kera Sakti");
echo "Nama Hewan : $sungokong->name <br>";
echo "Jumlah kaki : $sungokong->legs <br>";
echo "Termasuk Hewan Berdarah Dingin : $sungokong->cold_blooded <br>";
echo $sungokong -> yell();

?>