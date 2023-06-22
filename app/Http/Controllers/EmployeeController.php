<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Log;

class EmployeeController extends Controller
{
    //use Illuminate\Http\Request;
    public function signup()
    {
        return view('EmployeeForm');
    }

    public function register(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'designation' => 'required',
        ]);

        // Create a new employee record
        $employee = Employee::create($validatedData);

        return response()->json(['message' => 'Employee registered successfully']);
    }
    public function getEmployee(Request $request, $id)
    {
        // Fetch the authenticated employee based on the token
        
        $employee = $request->user();
        // Check if the employee ID matches the authenticated employee
        if ($employee->id == $id) {
            return response()->json($employee);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }


}
