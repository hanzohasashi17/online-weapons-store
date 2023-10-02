<?php

namespace App\Http\Controllers\Weapon;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('weapon.create');
    }
}
