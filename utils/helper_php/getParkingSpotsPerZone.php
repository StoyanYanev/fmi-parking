<?php 
include_once('../../controllers/parking.php');
$parking = new Parking();
$parking->retrieveAvailableSpotsPerZone("A");
