<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Organization;
use App\Models\Candidate;
use App\Models\Degree;
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

            $profile= '';
        if ($request->user()->hasRole('employee')) {
            $profile = Employee::where('user_id', $request->user()->id)->firstOrFail();

        } elseif ($request->user()->hasRole('organization')) {
            $profile = Organization::where('user_id', $request->user()->id)->firstOrFail();

        } elseif ($request->user()->hasRole('candidate')) {
            $profile = Candidate::where('user_id', $request->user()->id)->firstOrFail();
            $degree = Degree::where('id', $profile->degree_id)->first();
            $degrees = Degree::where('id', '!=', $profile->degree_id)->get();
    
    
        }
        


        return view('profile.edit', [
            'user' => $request->user(),
             'profile' => $profile,
             'degree' => $degree,
             'degrees' => $degrees,
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
            'organization_name' => 'nullable|string|max:255',
            'website' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:255',
            'gender' => 'nullable|in:Male,Female,Other',
            'birth_date' => 'nullable|date',
            'zipcode' => 'nullable|string|max:10',
            'degree_id' => 'nullable',
            'latest_university' => 'nullable|string|max:255',
            'current_organization' => 'nullable|string|max:255',
            'current_department' => 'nullable|string|max:255',
            'current_position' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:500',
        ];

        if ($request->user()->hasRole('employee')) {
            $profile = Employee::where('user_id', $request->user()->id)->firstOrFail();
            $validatedData = $request->validate($rules);
            $profile->update($validatedData);

        } elseif ($request->user()->hasRole('organization')) {
            $profile = Organization::where('user_id', $request->user()->id)->firstOrFail();
            $validatedData = $request->validate($rules);

            $profile->update($validatedData);

        }




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
