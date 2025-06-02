<?php

namespace App\Controllers\About;
use App\Controllers\BaseController;

class aboutController extends BaseController
{
    public function index(): string
    {
        return view('About/index');
    }
}
