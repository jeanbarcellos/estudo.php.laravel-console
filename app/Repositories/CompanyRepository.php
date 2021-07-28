<?php

namespace App\Repositories;

use App\Models\Company;

class CompanyRepository
{
    public function insert(Company $company): void
    {
        // TO-DO ...
    }

    public function update(Company $company): void
    {
        // TO-DO ...
    }

    public function save(Company $company): void
    {
        // TO-DO ...
    }

    public function delete(Company $company): void
    {
        // TO-DO ...
    }

    public function deleteById(int $id): void
    {
        // TO-DO ...
    }

    public function find(int $id): ?Company
    {
        // TO-DO ...
    }

    public function findOneBy(array $where = [], array $orderBy = []): ?Company
    {
        // TO-DO ...
    }

    public function findBy(array $where = [], array $orderBy = [], ?int $limit = null, ?int $offset = null): array
    {
        // TO-DO ...
    }
}
