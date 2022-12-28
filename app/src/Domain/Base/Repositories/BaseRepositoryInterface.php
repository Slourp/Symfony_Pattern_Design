<?php

namespace App\Domain\Base\Repositories;

interface BaseRepositoryInterface
{
    public function executeQuery(string $query, array $parameters = []);
}
