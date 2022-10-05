<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function users()
    {
        $users = User::all();
        return $users;
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                false
            ]);
        }

        User::where('email', $request->email)->firstOrFail();

        return response()->json([
            true
        ]);
    }
}
