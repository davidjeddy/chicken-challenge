<?php

namespace classes;

class FarmAnimal implements \interfaces\AnimalInterface
{
    use \traits\Defecate;
    use \traits\Eat;
    use \traits\Move;
    use \traits\Speak;

    /**
     * @param      $property
     * @param null $value
     * @param null $options
     *
     * @return $this
     */
    public function set($property, $value = null, $options = null)
    {
        if (is_array($property) && $value === null) {
            foreach ($property as $key => $value) {
                $this->set($key, $value);
            }
        } else {
            $this->{$property} = $value;
        }

        return $this;
    }

    /**
     * @param $property
     * @param $options
     *
     * @return string
     */
    public function get($property)
    {
        if (!empty($this->{$property})) {
            return $this->{$property};
        }

        return false;
    }

    /**
     * @return mixed
     */
    public static function className()
    {
        return get_called_class();
    }
}
