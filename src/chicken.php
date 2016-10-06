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
     * Chicken constructor.
     *
     * @param $paramData
     */
    public function __construct($paramData)
    {
        if (is_array($paramData)) {
            foreach ($paramData as $key => $value) {
                $this->set($key, $value);
            }
        }
    }

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
