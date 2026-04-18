<?php

namespace traits;

// auto loading of classes
use classes\ErrorChecking;

/**
 * Class Defecate
 */
trait Defecate
{
    /**
     * @param array|null $paramData
     *
     * @return array
     */
    public function defecate(array $paramData = null)
    {
        ErrorChecking::checkRequirements(['quantity', 'consistency'], $paramData);

        $class = explode('\\', $this::className());
        $class = strtolower(end($class));

        echo  'The ' . $class . ' defecates a ' . $paramData['quantity'] . ' quantity with a ' . $paramData['consistency'] . ' consistency.';

        return $paramData;
    }
}
