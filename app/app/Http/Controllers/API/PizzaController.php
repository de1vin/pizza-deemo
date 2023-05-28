<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\PizzaCollection;
use App\Services\PizzaService;
use Illuminate\Routing\Controller;

class PizzaController extends Controller
{
    /**
     * @param PizzaService $pizzaService
     */
    public function __construct(private readonly PizzaService $pizzaService)
    {}

    /**
     * @return PizzaCollection
     */
    public function index(): PizzaCollection
    {
        $result = $this->pizzaService->getPaginatedList();

        return new PizzaCollection($result);
    }
}
