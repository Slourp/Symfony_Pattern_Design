<?php

namespace App\Utils;


/**
 * An interface for classes that can handle operations that may throw exceptions.
 */
interface ExceptionHandler
{
    /**
     * Runs an operation and returns the result or an error.
     *
     * @param callable $operation The operation to run.
     * @param array $enhancements Optional enhancements to add to the error if the operation throws an exception.
     *
     * @return array An array containing the error or null and the result or null.
     */
    public static function run(callable $operation, array $enhancements = []): array;
}
