<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function users()
    {
        $users = User::all();
        return $users;
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
}
