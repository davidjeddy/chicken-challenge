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
     * @param      $property
     * @param null $value
     *
     * @return bool
     */
    public function set($property, $value = null)
    {
        if (is_array($property) && $value === null) {
            foreach ($property as $key => $value) {
                $this->set($key, $value);
            }
        } else {
            $this->{$property} = $value;
        }

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
