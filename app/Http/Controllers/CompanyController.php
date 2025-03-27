<?php

namespace App\Http\Controllers;

use App\Models\Company; 
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function create() {
        return view('frm_company');
    }

    public function store(Request $request) {
        $request->validate([
            'primary_activity_company' => 'required|string|max:20', 
        ]);

        $company = new Company();
        $company->primary_activity_company = $request->primary_activity_company;
        $company->save();
        
        return $company; 
    }
}
