<?php

namespace davidjeddy\classes;

/**
 * Class fowl
 *
 * @package davidjeddy\classes
 */
class fowl
{
    /**
     * @param array|null $paramData
     *
     * @return array
     */
    public function move(array $paramData = null)
    {
        $this->checkRequirements(['direction', 'time', 'velocity', 'method'], $paramData);



        return $paramData;
    }

    /**
     * @param null $paramData
     *
     * @return null
     */
    public function sound($paramData = null)
    {
        $this->checkRequirements(['db', 'type'], $paramData);

        return $paramData;
    }

    /**
     * @param array $requiredKeys
     * @param array $paramData
     *
     * @return bool
     * @throws \Exception
     */
    private function checkRequirements(array $requiredKeys, array $paramData)
    {
        foreach ($requiredKeys as $value) {
            if (!array_key_exists('direction', $paramData)) {
                throw new \Exception('Method required ' . $value . ' be provided in the parameter array.');
            }
        }

        return true;
    }
}
