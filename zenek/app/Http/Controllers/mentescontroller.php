<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\zenek;

class mentescontroller extends Controller
{
    // létrehozok egy függvényt
    public function save(Request $request)
    {
        // példányosítom a zenek modelt
        $zenek = new zenek();
        // a tábla az input mezők értékeit kapják meg
        $zenek->cim = $request->cim;
        $zenek->eloado = $request->eloado;
        $zenek->megjelenes= $request->megjelenes;
        $zenek->megtekintes= $request->megtekintes;
        $zenek->like= $request->like;

        // ha sikerül menteni, akkor átdob a success oldalra
        if($zenek->save())
        {
            return redirect('/success');
        }
    }

}
