<?php

require_once __DIR__ . '/autoload.php';

$movementType = ['walking', 'fluttering', 'hopping'];
$soundType = ['cluck', 'cakaa', 'peek'];

// create a chicken
$chicken = new Chicken([
    'attributes' => [
        'color' => 'yellow',
        'legs'  => 'thin legged',
        'face'  => 'with a pointy and ugly face'
    ]
]);

// set protected properties of parent class
$chicken->set('type', 'chicken');
$chicken->set('usage', 'food');
$chicken->set('knownAs', 'cocks');

$chicken->move([
    'direction' => 'forward',
    'time' =>  \mt_rand(1, 10) . ' seconds',
    'velocity' => \mt_rand(1, 10) / 10 . ' m/s',
    'method' => $movementType[\mt_rand(0, 2)]
]);

$chicken->sound([
    'type' => $soundType[\mt_rand(0, 2)],
    'db' => \mt_rand(40, 90),
]);

echo 'This chicken can be described as ' . $chicken->get($chicken->attributes) . '.';

echo "\n\n";
