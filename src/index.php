<?php
require_once './Chicken.php';

// create a chicken
$chicken = new src\Chicken();

// set protected properties of parent class
$chicken->set('type', 'chicken');
$chicken->set('usage', 'food');
$chicken->set('knownAs', 'cocks');

print_r($chicken);
exit(1);

echo $chicken->move([]);


