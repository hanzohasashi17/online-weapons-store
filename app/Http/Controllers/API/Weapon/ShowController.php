<?php

namespace App\Http\Controllers\API\Weapon;

use App\Http\Controllers\Controller;
use App\Http\Resources\Weapon\WeaponResource;
use App\Models\Weapon;
use GuzzleHttp\Psr7\Request;

class ShowController extends Controller
{

    public function __invoke(Weapon $weapon)
    {
        return new WeaponResource($weapon);
    }
}
