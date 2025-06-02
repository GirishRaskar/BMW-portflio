<?php

namespace App\Controllers\Features;
use App\Controllers\BaseController;

class featuresController extends BaseController
{
    public function index(): string
    {
        return view('Features/index');
    }
}
