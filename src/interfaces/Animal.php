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
     * @return mixed
     */
    function set();

    /**
     * @return mixed
     */
    function get();

    /**
     * @return mixed
     */
    function harvest();

    /**
     * @return mixed
     */
    function waste();

    /**
     * @return mixed
     */
    function breed();

    /**
     * @return mixed
     */
    function terminate();
}
