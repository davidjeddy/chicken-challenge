<?php

namespace traits;

// auto loading of classes
use classes\ErrorChecking;

/**
 * Class Move
 */
trait Move
{
    /**
     * @param array|null $paramData
     *
     * @return array
     */
    public function move(array $paramData = null)
    {
        ErrorChecking::checkRequirements(['direction', 'time', 'velocity', 'method'], $paramData);

        $class = explode('\\', $this::className());
        $class = strtolower(end($class));

        echo  'The ' . $class . ' moves ' . $paramData['direction'] . ' for ' . $paramData['time'] . ' second at a velocity of ' . $paramData['velocity'] . ' m/s by ' . $paramData['method'] . ".\n";

        return $paramData;
    }
}
