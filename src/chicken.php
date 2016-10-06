<?php

/**
 * Class chicken
 *
 * @package davidjeddy
 */
class Chicken extends classes\Fowl implements interfaces\FarmAnimal
{
    /**
     *
     */
    use traits\Audible;

    /**
     *
     */
    use traits\Movable;

    /**
     * @var
     */
    public $attributes;

    /**
     *
     */
    public static function className()
    {
        return (string)__CLASS__;
    }

    /**
     * @param array|null $paramData
     *
     * @return $this
     */
    public function body(array $paramData = null)
    {
        return $this;
    }

    /**
     *
     */
    public function face()
    {
        echo 'Has a rooster face';

        return $this;
    }

    /**
     *
     */
    public function legs()
    {
        return $this->legs;
    }

    /**
     *
     */
    public function tail()
    {
        return $this;
    }

    /**
     *
     */
    public function color()
    {
        return $this;
    }
}
