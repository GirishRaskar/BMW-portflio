<?php

namespace App\Controllers\Prices;
use App\Controllers\BaseController;

class pricesController extends BaseController
{
    public function index(): string
    {
        return view('Prices/index');
    }

    public function viewCar(): string
    {
        return view('Prices/carInfo');
    }
}
