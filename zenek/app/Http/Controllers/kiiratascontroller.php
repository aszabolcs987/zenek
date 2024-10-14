<?php

namespace App\Http\Controllers;

use App\Models\zenek;
use Illuminate\Http\Request;

class kiiratascontroller extends Controller
{
    // létrehozok egy függvényt
    public function getContacts(Request $request)
    {
        // Minden adatot lekér a zenek táblából
        $zenek = zenek::all();

        // átadja az adatokat egy $zenek változóba a view-nak
        return view('success', ['zenek' => $zenek]);
    }
}
