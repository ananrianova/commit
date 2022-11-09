<?php
require_once 'car_1.php';

$x = new Car;
$x->marka = 'Subaru';
$x ->color = 'blue';

echo $x->marka.' '.$x->color .'<br>';
$x->go();
$x->turn();
$x->stop();
?>