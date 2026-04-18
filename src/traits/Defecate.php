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
        ErrorChecking::checkRequirements(['quantity', 'type', 'consistency'], $paramData);

        $class = explode('\\', $this::className());
        $class = strtolower(end($class));

        echo  'The ' . $class . ' eats ' . $paramData['quantity'] . ' kilos of  ' . $paramData['type'] . ' with ' . $paramData['consistency'] . ' consistency.';

        return $paramData;
    }
}
