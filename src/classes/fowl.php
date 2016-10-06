<?php

namespace src\classes;

/**
 * Class fowl
 *
 * @package davidjeddy\classes
 */
class Fowl
{
    /**
     * @var
     */
    protected $type;

    /**
     *
     */
    protected $usage;

    /**
     *
     */
    protected $knownAs;

    /**
     * @param string $property
     * @param string $value
     */
    public function set($property, $value)
    {
        $this->{$property} = $value;
    }
}
