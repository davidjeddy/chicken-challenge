<?php

namespace src\traits;

// manual loading of classes
require_once './classes/ErrorChecking.php';

// auto loading of classes
use src\classes\ErrorChecking;

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

        return $paramData;
    }
}