<?php

namespace traits;

// auto loading of classes
use classes\ErrorChecking;

/**
 * Class Speak
 */
trait Speak
{
    /**
     * @param null $paramData
     *
     * @return null
     */
    public function sound($paramData = null)
    {
        ErrorChecking::checkRequirements(['db', 'type'], $paramData);

        $class = explode('\\', $this::className());
        $class = strtolower(end($class));

        echo  'The ' . $class . ' makes a ' . $paramData['type'] . ' sounds at ' . $paramData['db']  . ' decibels'  . ".\n";

        return $paramData;
    }
}
