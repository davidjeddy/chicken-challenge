<?php

namespace classes;

/**
 * Class chicken
 *
 * @package davidjeddy
 */
class Chicken extends \classes\Fowl
{
    /**
     * @var
     */
    public $attributes = [];

    /**
     * Chicken constructor.
     *
     * Here we will pick random numbers to generate the attributes of the chicken.
     */
    public function __construct()
    {
        // speak
        $this->sound([
            'db'   => \mt_rand(15, 85),
            'type' => self::randomArrayValue(['cluck', 'tuck-tuck', 'screeeech']),
        ]);

        // move
        $this->move([
            'direction' => self::randomArrayValue(['north', 'east', 'south', 'west']),
            'time'      => \mt_rand(1, 10),
            'velocity'  => \mt_rand(0.5, 5),
            'method'    => self::randomArrayValue(['walking', 'fluttering', 'running']),
        ]);

        // eat
        $this->eat([
            'quantity' => self::randomArrayValue(['small', 'medium', 'large']),
            'type'     => self::randomArrayValue(['seeds', 'table scraps', 'dirt']),
            'veracity' => self::randomArrayValue(['great', 'little', 'indifferent']),
        ]);

        // defecate
        $this->defecate([
            'quantity' => self::randomArrayValue(['small', 'medium', 'large']),
            'consistency' => self::randomArrayValue(['solid', 'pebble like', 'liquid']),
        ]);
    }

    /**
     * @param $paramData
     *
     * @return mixed
     */
    private static function randomArrayValue($paramData)
    {
        return $paramData[array_rand($paramData)];
    }
}
