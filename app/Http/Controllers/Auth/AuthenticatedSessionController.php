<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    public function create_candidate(): View
    {
        return view('auth.candidate.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        
            // Check if the authenticated user has the 'candidate' role
    if ( $request->user()->hasRole('candidate')) {
        // Log the user out
        Auth::logout();

        // Redirect them back to the login page with an error message
        return redirect()->route('user-login')->with('error', 'You are not allowed to log in here.');
    }else{
    
            return redirect()->intended(RouteServiceProvider::HOME);
        }
        
    }

    public function store_candidate(LoginRequest $request): RedirectResponse
    {

        $request->authenticate();

        $request->session()->regenerate();

        if ($request->user()->hasRole('candidate')) {

            return redirect()->intended(RouteServiceProvider::HOME);

        }else{

                    // Log the user out
                    Auth::logout();
    
                    // Redirect them back to the login page with an error message
                    return redirect()->route('user-login')->with('error', 'You are not allowed to log in here.');
                
            }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
