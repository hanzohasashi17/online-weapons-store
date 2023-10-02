<?php

namespace App\Http\Controllers\Weapon;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = User::find($request->id);
        dd($user);
    }
}
