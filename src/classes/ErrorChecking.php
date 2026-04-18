<?php

namespace src\classes;

/**
 * Class ErrorChecking
 *
 * @package davidjeddy\classes
 */
class ErrorChecking
{
    /**
     * @param array $requiredKeys
     * @param array $paramData
     *
     * @return bool
     * @throws \Exception
     */
    public static function checkRequirements(array $requiredKeys, array $paramData)
    {
        foreach ($requiredKeys as $value) {
            if (!array_key_exists('direction', $paramData)) {
                throw new \Exception('Method required ' . $value . ' be provided in the parameter array.');
            }
        }

        return true;
    }
}
