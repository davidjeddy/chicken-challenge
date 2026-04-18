<?php

use PhpSchool\CliMenu\CliMenu;
use PhpSchool\CliMenu\CliMenuBuilder;

require_once(__DIR__ . '/../vendor/autoload.php');
require_once __DIR__ . '/autoload.php';

$chickenData = new \classes\Chicken();

$itemCallable = function (CliMenu $menu) use ($chickenData) {
    echo $menu->getSelectedItem()->getText();
    $chickenData->set('qwer', 'asdf');
};

$menu = (new CliMenuBuilder)
    ->setTitle('Basic CLI Menu')
    ->addItem('First Item', $itemCallable)
    ->addItem('Second Item', $itemCallable)
    ->addItem('Third Item', $itemCallable)
    ->addLineBreak('-')
    ->build();

$menu->open();

var_dump($chickenData->qwer);