<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        
        $employee = Employee::where('user_id', $request->user()->id)->firstOrFail();
        return view('profile.edit', [
            'user' => $request->user(),
            'employee' => $employee,
        ]);

        

    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

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
            $employee = Employee::where('user_id', $request->user()->id)->firstOrFail(); // Replace $employeeId with the Employee's ID

            // Validate the request data
            $validatedData = $request->validate($rules);
            
            // Update the Employee record using the validated data
            $employee->update($validatedData);

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
