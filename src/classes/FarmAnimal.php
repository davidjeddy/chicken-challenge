<?php

namespace classes;

class FarmAnimal implements \interfaces\Animal
{
    use \traits\Defecate;
    use \traits\Eat;
    use \traits\Move;
    use \traits\Speek;

    /**
     * @param      $property
     * @param null $value
     * @param      $options
     *
     * @return bool
     */
    public function set($property, $value = null, $options)
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
     * @param $options
     *
     * @return string
     */
    public function get($property)
    {
        return $this->{$property};
    }

    /**
     * @return mixed
     */
    function className(){ return $this; }

    /**
     * @return mixed
     */
    function birth(){ return $this; }

    /**
     * @return mixed
     */
    function maturation(){ return $this; }

    /**
     * @return mixed
     */
    function death(){ return $this; }
}