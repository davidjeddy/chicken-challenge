<?php

namespace src;

require_once './classes/Fowl.php';
require_once './interfaces/FarmAnimal.php';
require_once './traits/Audible.php';
require_once './traits/Movable.php';

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
     *
     */
    public function body()
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