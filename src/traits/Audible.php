<?php

namespace src\traits;

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