<?php

namespace traits;

// auto loading of classes
use classes\ErrorChecking;

/**
 * Class Movable
 */
trait Movable
{
    /**
     * @param array|null $paramData
     *
     * @return array
     */
    public function move(array $paramData = null)
    {
        ErrorChecking::checkRequirements(['direction', 'time', 'velocity', 'method'], $paramData);

        echo  'The ' . $this::className() . ' moves ' . $paramData['direction'] . ' for ' . $paramData['time'] . ' as a velocity of '
            . $paramData['velocity'] . ' by ' . $paramData['method'] . ".\n";

        return $paramData;
    }
}
