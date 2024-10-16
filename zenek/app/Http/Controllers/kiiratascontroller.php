<?php

namespace App\Http\Controllers;

use App\Models\zenek;
use Illuminate\Http\Request;

class kiiratascontroller extends Controller
{
    public function getContacts(Request $request)
    {
        // leker minden adatot a  tablabol
        $zenek = zenek::all();

        // atadja ezeket a success viewnek $zenek valtozoba
        return view('success', ['zenek' => $zenek]);
    }
}
