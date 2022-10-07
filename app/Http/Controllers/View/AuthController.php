<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function index()
    {

        return view('auth.index');
    }

    public function login(AuthRequest $request)
    {
        $credenciales = $request->validated();

        $remember = $request->filled('remember');

        if (Auth::attempt($credenciales, $remember)) {

            $request->session()->regenerate();

            return redirect()
                ->intended('dashboard')
                ->with('status', 'Estas logeado');
        }

        throw ValidationException::withMessages([
            'credenciales' => 'Credenciales incorrectas'
        ]);
    }

    public function dashboard(User $user)
    {
        return view('auth.dashboard', compact('user'));
    }

    public function logout(Redirector $redirector, Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return $redirector->to('/login');
    }
}
