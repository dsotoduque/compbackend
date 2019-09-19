<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
        $employee = Employee::all();
        return response()->json($employee, 200);
    }

    public function show($id) {
        $employee = Employee::find($id);
        return response()->json($employee, 200);
    }

    public function store(Request $request) {
        $employee = Employee::create($request->all());
        return response()->json($employee, 200);
    }
}
