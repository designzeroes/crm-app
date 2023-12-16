<?php

namespace App\Http\Controllers;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Http\Request;

class TokenController extends Controller
{


    public function generateToken(){

            // Check if the user is authenticated
    if (auth()->check()) {
        // Get the authenticated user
        $user = auth()->user();
    // Check if the user already has an API token
    if ($user->tokens()->count() > 0) {
        // Revoke all existing tokens
        $user->tokens()->delete();
    }
        // Issue an API token for the authenticated user
        $token = $user->createToken('api-token')->plainTextToken;

        // Return the token to the client
        return response()->json(['token' => $token]);
    }
    }
    
    

}
