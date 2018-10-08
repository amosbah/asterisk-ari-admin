<?php

namespace Indigo\Ini;

use Indigo\Ini\Exception\ParserException;

/**
 * Parses an INI string.
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class Parser
{
    /**
     * Parses an INI string.
     *
     * @param string $ini
     *
     * @return array
     */
    public function parse($ini)
    {
        if (!is_string($ini)) {
            throw new ParserException('Cannot parse non-string INI data');
        }

        $ini = @parse_ini_string($ini, true, INI_SCANNER_RAW);

        if (false === $ini) {
            $e = error_get_last();
            throw new ParserException('Error during parsing INI: '.$e['message']);
        }

        return $this->normalize($ini);
    }

    /**
     * Normalizes INI and other values.
     *
     * @param mixed $value
     *
     * @return bool|int|null|string|array
     */
    private function normalize($value)
    {
        // Normalize array values
        if (is_array($value)) {
            foreach ($value as &$subValue) {
                $subValue = $this->normalize($subValue);
            }

            return $value;
        }

        // Don't normalize non-string value
        if (!is_string($value)) {
            return $value;
        }

        // Normalize true boolean value
        if ($this->compareValues($value, ['true', 'on', 'yes'])) {
            return true;
        }

        // Normalize false boolean value
        if ($this->compareValues($value, ['false', 'off', 'no', 'none'])) {
            return false;
        }

        // Normalize null value
        if ($this->compareValues($value, ['null'])) {
            return;
        }

        // Normalize numeric value
        if (is_numeric($value)) {
            $numericValue = $value + 0;

            if ((is_int($numericValue) && (int) $value === $numericValue)
                || (is_float($numericValue) && (float) $value === $numericValue)
            ) {
                $value = $numericValue;
            }
        }

        return $value;
    }

    /**
     * Case insensitively compares values.
     *
     * @param string $value
     * @param array  $comparisons
     *
     * @return bool
     */
    private function compareValues($value, array $comparisons)
    {
        foreach ($comparisons as $comparison) {
            if (0 === strcasecmp($value, $comparison)) {
                return true;
            }
        }

        return false;
    }
}
