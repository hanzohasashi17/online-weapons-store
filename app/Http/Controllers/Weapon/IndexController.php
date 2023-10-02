<?php

namespace App\Http\Controllers\Weapon;

use App\Http\Controllers\Controller;
use App\Models\Weapon;

class IndexController extends Controller
{
    public function __invoke()
    {
        $weapons = Weapon::all();

        return view('weapon.index', compact('weapons'));
    }
}
