<?php

namespace App\Http\Controllers\Weapon;

use App\Http\Controllers\Controller;
use App\Models\Weapon;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    private $weapon;

    public function __construct(Weapon $weapon)
    {
        $this->weapon = $weapon;
    }

    public function __invoke(Request $request)
    {
        $this->weapon->name = $request->name;
        $this->weapon->description = $request->description;
        $this->weapon->price = $request->price;
        $this->weapon->image = $request->image->store('uploads');

        $this->weapon->save();

        return redirect('/weapons');
    }
}
