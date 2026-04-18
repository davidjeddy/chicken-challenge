<?php

namespace interfaces;

/**
 * Interface farmAnimal
 *
 * @package davidjeddy
 */
interface Animal
{
    /**
     * @param $param
     * @param $value
     * @param $options
     *
     * @return mixed
     */
    function set($param, $value, $options);

    /**
     * @param $param
     * @param $options
     *
     * @return mixed
     */
    function get($param);

    /**
     * @return mixed
     */
    static function className();

    /**
     * @return mixed
     */
    function birth();

    /**
     * @return mixed
     */
    function maturation();

    /**
     * @return mixed
     */
    function death();
}
