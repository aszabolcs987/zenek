<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\zenek;

class mentescontroller extends Controller
{
    public function save(Request $request)
    {
        // zenek model peldanyositom
        $zenek = new zenek();
        // a tabla mezoi feltoltom az inputba kapott adatokat
        $zenek->cim = $request->cim;
        $zenek->eloado = $request->eloado;
        $zenek->megjelenes= $request->megjelenes;
        $zenek->megtekintes= $request->megtekintes;
        $zenek->like= $request->like;

        // ha sikerul menteni, akkor bedobja a success oldalt
        if($zenek->save())
        {
            return redirect('/success');
        }
    }

}
