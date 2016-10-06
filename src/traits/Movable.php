<?php

namespace src\traits;

// manual loading of classes
require_once './classes/ErrorChecking.php';

// auto loading of classes
use src\classes\ErrorChecking;

/**
 * Class Movable
 */
trait Movable {

    /**
     * @param array|null $paramData
     *
     * @return array
     */
    public function move(array $paramData = null)
    {
        ErrorChecking::checkRequirements(['direction', 'time', 'velocity', 'method'], $paramData);

        return $paramData;
    }
}