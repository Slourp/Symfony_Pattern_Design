<?php

namespace App\Domain\Base\Entities;

class BaseEntity implements BaseEntityInterface
{
    /**
     * @var mixed
     */
    protected $id;

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
