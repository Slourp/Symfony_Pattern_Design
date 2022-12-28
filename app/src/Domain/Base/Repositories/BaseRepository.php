<?php

namespace App\Domain\Base\Repositories;

use Doctrine\ORM\EntityManagerInterface;

class BaseRepository implements BaseRepositoryInterface
{
    protected $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function executeQuery(string $query, array $parameters = [])
    {
        return $this->entityManager->createQuery($query)->execute($parameters);
    }
}
