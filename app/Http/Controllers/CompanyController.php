<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CompanyController extends Controller
{
    public function index(){
        $company = Company::all();
        return response()->json($company,200);
    }

    public function show($id){
        $company = Company::find($id);
        return response()->json($company, 200);
    }

    public function store(Request $request){
        $company = Company::create($request->all());
        return response()->json($company, 201);
    }

    public function delete( $id) {
        $company = Company::findOrFail($id);
        $company->delete();

        return response()->json(['data'=> null], 204);
    }

}
