<?php

namespace App\Utils;


/**
 * Interface defining the methods that a try-catch pattern must implement.
 */
interface TryCatchInterface
{
    /**
     * Executes the try block.
     *
     * @param callable $callback The try block logic.
     * @return self
     */
    public function try(callable $callback): self;

    /**
     * Executes the catch block.
     *
     * @param callable $callback The catch block logic.
     * @return self
     */
    public function catch(callable $callback): self;

    /**
     * Returns an array containing the result and error from the try-catch block.
     *
     * @return array
     */
    public function getResult(): array;
}
