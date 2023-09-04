<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        $users = User::all();
        return view('pages.controlpanel.organization.employee.index', [
            'employees' => $employees,
            'users' => $users,
        ]);
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
        $creator = auth()->user();

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ])->assignrole('employee');

        $rules = [
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
        $validatedData['creator_id'] = $creator->id;
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
        $employee = Employee::findOrFail($id);
        $user = User::findOrFail($id);
        return view('pages.controlpanel.organization.employee.edit', [
            'employee' => $employee,
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        
        ]);

        $user = User::findOrFail($id); 

        // Update the user's attributes
        $user->name = $request->name;
        $user->email = $request->email;
        
        // Optionally, you can update the password if needed
        if (!empty($request->password)) {
            $request->validate([
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            
            ]);
            $user->password = Hash::make($request->password);
        }
        
        $user->save();
        

        $rules = [
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
            $employee = Employee::findOrFail($id); // Replace $employeeId with the Employee's ID

            // Validate the request data
            $validatedData = $request->validate($rules);
            
            // Update the Employee record using the validated data
            $employee->update($validatedData);
            
            // Redirect or perform other actions after the Employee is updated
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
