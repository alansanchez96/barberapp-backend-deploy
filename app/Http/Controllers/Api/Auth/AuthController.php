<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\AuthRequest;

class AuthController extends Controller
{
    public function users()
    {
        return User::all();
    }

    public function login(AuthRequest $request)
    {
        $credenciales = $request->validated();

        if (!Auth::attempt($credenciales)) {
            return response()->json([
                false
            ]);
        }

        User::where('email', $request->email)->firstOrFail();

        return response()->json([
            true
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
    }
}
