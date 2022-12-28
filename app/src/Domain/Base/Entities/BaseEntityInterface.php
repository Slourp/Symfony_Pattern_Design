<?php

namespace App\Domain\Base\Entities;

interface BaseEntityInterface
{
    /**
     * Returns the unique identifier of the entity.
     *
     * @return mixed
     */
    public function getId();

    /**
     * Converts the entity to an array.
     *
     * @return array
     */
    public function toArray(): array;
}
