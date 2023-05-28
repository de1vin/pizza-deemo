<?php

namespace App\Services;


use App\Models\Pizza;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Class PizzaService
 */
class PizzaService
{
    /**
     * @param int $perPage
     *
     * @return LengthAwarePaginator
     */
    public function getPaginatedList(int $perPage = 10): LengthAwarePaginator
    {
        return Pizza::paginate($perPage);
    }
}
