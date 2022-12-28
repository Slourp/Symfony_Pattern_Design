<?php

namespace App\Utils;

/**
 * Try-Catch pattern that returns an array containing the result and error from the try-catch block.
 * If no exception was thrown, the array will contain the result of the try block as the first element and null as the second element.
 * If an exception was thrown, the array will contain null as the first element and the exception as the second element.
 */
class TryCatch implements TryCatchInterface
{
    /**
     * @var Exception|null The exception thrown in the try block, if any.
     */
    private ?\Exception $exception = null;

    /**
     * @var mixed The result of the try block, if no exception was thrown.
     */
    private $result = null;

    /**
     * Executes the try block.
     *
     * @param callable $callback The try block logic.
     * @return self
     */
    public function try(callable $callback): self
    {
        try {
            $this->result = $callback();
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return $this;
    }

    /**
     * Executes the catch block.
     *
     * @param callable $callback The catch block logic.
     * @return self
     */
    public function catch(callable $callback): self
    {
        if ($this->exception) {
            $callback($this->exception);
        }

        return $this;
    }

    /**
     * Returns an array containing the result and error from the try-catch block.
     *
     * @return array
     */
    public function getResult(): array
    {
        return [
            $this->exception ? null : $this->result,
            $this->exception ? $this->exception : null,
        ];
    }
}
