<?php

require_once 'Flat.php';
require_once 'House.php';
require_once 'Garden.php';
require_once 'Parking.php';

$garden = new Garden(20, true);
$parking = new Parking(6, 2);
$house = new House('102 rue des noyers', 350000.00, 120, 2);
echo $house->getSurface().'<br>'; // Affiche 120, car il n'y a pas d'annexe
$house->setAnnex($garden);
echo $house->getSurface().'<br>'; // Affiche 140 car le jardin est compris dans l'annexe
$flat = new Flat('45 rue de la république', 150000, 30, 3, $parking);
echo $flat->getSurface().'<br>'; // Affiche 30 car le parking n'est pas compris dans le calcul