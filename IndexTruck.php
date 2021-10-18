<?php
require_once 'Truck.php';

$truck = new Truck('red', 5, 'fuel', 80, 'wood');
echo $truck->forward();
var_dump($truck);


echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
