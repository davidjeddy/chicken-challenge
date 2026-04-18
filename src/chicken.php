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
     * @var array
     */
    protected $attributes = [];

    /**
     *
     */
    public function body(array $paramData = null)
    {

    }

    /**
     *
     */
    public function face()
    {

    }

    /**
     *
     */
    public function legs()
    {

    }

    /**
     *
     */
    public function sound()
    {

    }

    /**
     *
     */
    public function tail()
    {

    }

    /**
     *
     */
    public function color()
    {

    }
}