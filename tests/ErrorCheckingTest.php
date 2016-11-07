<?php

$loader = require __DIR__ . "/../vendor/autoload.php";
$loader->addPsr4('', __DIR__.'/../src');

use PHPUnit\Framework\TestCase;

class ErrorCheckingTest extends TestCase
{
    public function testKeyIsPResent()
    {
        $result = \classes\ErrorChecking::checkRequirements(
            ['qwer'],
            ['qwer' => 1]
        );

        $this->assertEquals(true, $result);
    }

// TODO how to do exception asserting?
//    public function testKeyIsNotPresent()
//    {
//        \classes\ErrorChecking::checkRequirements(
//            ['qwer'],
//            ['asdf' => 1]
//        );
//
//        $this->expectException('Method required qwer be provided in the parameter array.');
//    }
}
