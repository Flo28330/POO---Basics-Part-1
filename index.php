<?php
require 'Cars.php';
require 'Bicycle.php';


$bike = new Bicycle("yellow",2);
$bike->currentSpeed = 10;
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();




$flandersGeo = new Cars("bleue", 4,'essence');
$flandersGeo->currentSpeed = 70;
$flandersGeo->color = "bleue";
$flandersGeo->nbSeat = 4;
$flandersGeo->energy ="essence";
echo '<br><br><br>';
echo '<br> La voiture de Flander est '.$flandersGeo->color.' à ' .$flandersGeo->nbSeat. ' places et roule à l\''.$flandersGeo->energy.'.<br>';
echo $flandersGeo->start();
echo $flandersGeo->forward();
echo '<br> Vitesse du véhicule est de ' . $flandersGeo->currentSpeed . ' km/h' . '<br>';
echo $flandersGeo->brake();
echo '<br> Vitesse de la voiture : ' . $flandersGeo->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();


$misterPlow = new Cars("rouge", 2,'diesel');
$misterPlow->currentSpeed = 50;
$misterPlow->color = 'rouge';
$misterPlow->nbSeat=2;
$misterPlow->energy='diesel';
echo '<br><br><br>';
echo '<br> la dépanneuse de M. Plow est de ' .$misterPlow->color.' détient ' .$misterPlow->nbSeat. ' sièges et roule au '.$misterPlow->energy.'<br>';
echo $misterPlow->start();
echo $misterPlow->forward();
echo '<br> Vitesse de la dépaneuse de M. Plow : ' . $misterPlow->currentSpeed . ' km/h' . '<br>';
echo $misterPlow->brake();
echo '<br> Vitesse de la dépanneuse : ' . $misterPlow->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();

