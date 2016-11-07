<?php

namespace classes;

class FarmAnimal implements \interfaces\Animal
{
    /**
     *
     */
    use \traits\Audible;

    /**
     *
     */
    use \traits\Movable;

    /**
     * @return mixed
     */
    public function set(){ return $this; }

    /**
     * @return mixed
     */
    public function get(){ return $this; }

    /**
     * @return mixed
     */
    public function harvest(){ return $this; }

    /**
     * @return mixed
     */
    public function waste(){ return $this; }

    /**
     * @return mixed
     */
    public function breed(){ return $this; }

    /**
     * @return mixed
     */
    public function terminate(){ return $this; }

    // static methods
    /**
     * @return string
     */
    public static function className(){ return (string)__CLASS__; }
}