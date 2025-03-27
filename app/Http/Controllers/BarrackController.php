<?php

namespace App\Http\Controllers;

use App\Models\Barrack; 
use Illuminate\Http\Request;

class BarrackController extends Controller
{
    public function create() {
        return view('frm_barrack');
    }

    public function store(Request $request) {
        $request->validate([
            'name_barrack' => 'required|string|max:30',
            'location' => 'required|string|max:10',
        ]);

        $barrack = new Barrack();
        $barrack->name_barrack = $request->name_barrack;
        $barrack->location = $request->location;
        $barrack->save();

        return $barrack; 
    }
}
