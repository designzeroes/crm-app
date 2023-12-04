<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\User;
use App\Models\Organization;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {

        return view('auth.register');
    }

    public function create_candidate(): View
    {

        return view('auth.candidate.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        
        ]);  


        if ($request->has('candidate')) {

            
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ])->assignrole('candidate');

        Candidate::create([
            'user_id' => $user->id, 
            'skill' => $request->skill,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/');

        }else{
    

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ])->assignrole('organization');


        Organization::create([
            'user_id' => $user->id, 
            'organization_name' => $request->organization_name,
            'website' => $request->website,
        ]);

        $orgRole = Role::findByName('organization');
        $orgRole->givePermissionTo(['job-delete', 'job-edit', 'job-create', 'job-view']);
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
         }

    }
}
