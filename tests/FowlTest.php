<?php

$loader = require __DIR__ . "/../vendor/autoload.php";
$loader->addPsr4('', __DIR__.'/../src');

use PHPUnit\Framework\TestCase;

class FowlTest extends TestCase
{
    protected $fowl = null;

    public function setUp()
    {
        $this->fowl = new \classes\Fowl();
    }

    public function testKnownAsIsEmpty()
    {
        $this->assertEmpty('', $this->fowl->get('knownAs'));
    }
}
