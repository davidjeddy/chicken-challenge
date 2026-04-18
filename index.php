<?php

$loader = require __DIR__ . "/vendor/autoload.php";
$loader->addPsr4('', __DIR__.'/src');

use PhpSchool\CliMenu\CliMenu;
use PhpSchool\CliMenu\CliMenuBuilder;

$art = <<<ART
      ,~.
   ,-'__ `-,
  {,-'  `. }              ,')
 ,( a )   `-.__         ,',')~,
<=.) (         `-.__,==' ' ' '}
  (   )                      /)
   `-'\   ,                    )
       |  \        `~.        /
       \   `._        \      /
        \     `._____,'    ,'
         `-.             ,'
            `-._     _,-'
                77jj'
               //_||
            __//--'/`
          ,--'/`  '
ART;

$itemCallable = function (CliMenu $menu) {
    new \classes\Chicken([
        'knownAd' => $menu->getSelectedItem()->getText()
    ]);
};
$menu = (new CliMenuBuilder)
    ->addAsciiArt($art)
    ->setTitle('Pick-A-Chicken')
    ->addLineBreak("=")
    ->addItem('Plymouth Rock', $itemCallable)
    ->addItem('Orpington', $itemCallable)
    ->addItem('Leghorn', $itemCallable)
    ->addLineBreak('=')
    ->setWidth(80)
    ->setMargin(5)
    ->setSelectedMarker('✏')
    ->setExitButtonText('Bye bye chicken!')
    ->build();
$menu->open();
