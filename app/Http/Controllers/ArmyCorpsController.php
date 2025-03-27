<?php

namespace App\Http\Controllers;

use App\Models\ArmyCorps; 
use Illuminate\Http\Request;

class ArmyCorpsController extends Controller
{
    public function create() {
        return view('frm_army_corps');
    }

    public function store(Request $request) {
     
        $request->validate([
            'denomination_ac' => 'required|string|max:255', 
        ]);

        $armyCorps = new ArmyCorps();
     
        $armyCorps->denomination_ac = $request->denomination_ac;

        $armyCorps->save();
        return $armyCorps; 
    }
}
