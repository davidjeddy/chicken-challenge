<?php
require_once __DIR__ . '/autoloader.php';

// create a chicken
$chicken = new Chicken();

// set protected properties of parent class
$chicken->set('type', 'chicken');
$chicken->set('usage', 'food');
$chicken->set('knownAs', 'cocks');

print_r($chicken);
exit(0);
