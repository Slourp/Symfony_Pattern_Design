<?php

namespace App\Utils;

/**
 * A utility class for handling operations that may throw exceptions.
 */
class To
{
    /**
     * Runs an operation and returns the result or an error.
     *
     * @param callable $operation The operation to run.
     * @param array $enhancements Optional enhancements to add to the error if the operation throws an exception.
     *
     * @return array An array containing the error or null and the result or null.
     */
    public static function run($operation, $enhancements = [])
    {
        try {
            $result = $operation();
            return [null, $result];
        } catch (\Exception $e) {
            $error = array_merge($e, $enhancements);
            return [$error, null];
        }
    }
}
