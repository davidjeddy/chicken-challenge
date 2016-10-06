<?php

namespace src\traits;

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