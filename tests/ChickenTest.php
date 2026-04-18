<?php

$loader = require __DIR__ . "/../vendor/autoload.php";
$loader->addPsr4('', __DIR__.'/../src');

use PHPUnit\Framework\TestCase;

class ChickenTest extends TestCase
{
    protected $chicken = null;

    public function setUp()
    {
        $this->chicken = new \classes\Chicken();
    }
    public function testSetStringAttribute()
    {
        $this->chicken->set('testAtt', 'asdf');
        $this->assertEquals('asdf', $this->chicken->testAtt);
    }

    public function testSetIntegerAttribute()
    {
        $this->chicken->set('testAtt', 2);
        $this->assertEquals(2, $this->chicken->testAtt);
    }

    public function testSetArrayAttribute()
    {
        $this->chicken->set('testAtt', ['qwer', 'asdf']);
        $this->assertEquals(['qwer', 'asdf'], $this->chicken->testAtt);
    }

    public function testSetAssociativeArrayAttribute()
    {
        $this->chicken->set('testAtt', ['qwer' => 1, 'asdf' =>2 , 'zxcv' => 3]);
        $this->assertEquals(['qwer' => 1, 'asdf' =>2 , 'zxcv' => 3], $this->chicken->testAtt);
    }
}
