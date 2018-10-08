<?php

namespace Supervisor\Configuration;

/**
 * Util class for configuration.
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class Util
{
    /**
     * Checks whether a given value is a valid byte value.
     *
     * @param string|int $value
     *
     * @return bool
     */
    public static function isByte($value)
    {
        return is_numeric($value) or (is_string($value) and preg_match('/[0-9]+kb|mb|gb/i', $value));
    }
}
