<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();

        return view('pages.controlpanel.organization.employee.index', ['employees' => $employees]);
    }


    public function create()
    {
        return view('pages.controlpanel.organization.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = auth()->user();

        $rules = [
            'name' => 'nullable|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'resume' => 'nullable|mimes:pdf|max:2048', 
            'phone_number' => 'nullable|string|max:255',
            'gender' => 'nullable|in:Male,Female,Other',
            'birth_date' => 'nullable|date',
            'address' => 'nullable|string|max:255',
            'zipcode' => 'nullable|string|max:10',
            'latest_degree' => 'nullable|string|max:255',
            'latest_university' => 'nullable|string|max:255',
            'current_organization' => 'nullable|string|max:255',
            'current_department' => 'nullable|string|max:255',
            'current_position' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:500',
        ];
    

                // Validate the request data
        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = $user->id;
        // Create the Employee using the validated data
        Employee::create($validatedData);

    
        // You can redirect or do something else after the Employee is created
        return redirect()->route('employee.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Employee = Employee::findOrFail($id);

        return view('pages.controlpanel.organization.employee.edit', ['employee' => $Employee]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules =  [
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'resume' => 'nullable|mimes:pdf|max:2048', 
            'phone_number' => 'nullable|string|max:255',
            'gender' => 'nullable|in:Male,Female,Other',
            'birth_date' => 'nullable|date',
            'address' => 'nullable|string|max:255',
            'zipcode' => 'nullable|string|max:10',
            'latest_degree' => 'nullable|string|max:255',
            'latest_university' => 'nullable|string|max:255',
            'current_organization' => 'nullable|string|max:255',
            'current_department' => 'nullable|string|max:255',
            'current_position' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:500',
        ];
    
    
      // Validate the request data
      $validatedData = $request->validate($rules);

      // Retrieve the Employee based on the provided $id
      $Employee = Employee::findOrFail($id);
  
      // Update the Employee using the validated data
      $Employee->update($validatedData);
  
      // You can redirect or do something else after the Employee is updated
      return redirect()->route('employee.index');
  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
            // Retrieve the Employee based on the provided $id
    $Employee = Employee::findOrFail($id);

    // Delete the Employee
    $Employee->delete();

    // You can redirect or do something else after the Employee is deleted
    return redirect()->route('employee.index');
    }
}
