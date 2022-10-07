<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\AuthRequest;

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
