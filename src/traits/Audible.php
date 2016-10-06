<?php

namespace traits;

use classes\ErrorChecking;

/**
 * Class Audiable
 */
trait Audible
{
    /**
     * @param null $paramData
     *
     * @return null
     */
    public function sound($paramData = null)
    {
        ErrorChecking::checkRequirements(['db', 'type'], $paramData);

        echo  'The ' . $this::className() . ' makes a ' . $paramData['type'] . ' sounds at ' . $paramData['db']
            . ' decibels'  . ".\n";

        return $paramData;
    }
}
