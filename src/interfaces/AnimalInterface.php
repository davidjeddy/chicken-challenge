<?php

namespace interfaces;

/**
 * Interface farmAnimal
 *
 * @package davidjeddy
 */
interface AnimalInterface
{
    /**
     * @param $param
     * @param $value
     * @param $options
     *
     * @return mixed
     */
    public function set($param, $value, $options);

    /**
     * @param $param
     * @param $options
     *
     * @return mixed
     */
    public function get($param);

    /**
     * @return mixed
     */
    public static function className();
}
