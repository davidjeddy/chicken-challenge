<?php

namespace classes;

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
     * @param $property
     * @param $value
     *
     * @return bool
     */
    public function set($property, $value)
    {
        $this->{$property} = $value;

        return true;
    }

    /**
     * @param $property
     *
     * @return mixed
     */
    public function get($property)
    {
        if (is_array($property)) {
            return implode(', ', $property);
        }

        return $this->{$property};
    }
}
