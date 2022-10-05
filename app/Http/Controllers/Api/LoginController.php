<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $users = User::all();
        return $users;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user = new User;
        $emailRequest = $request->email;
        $passwordRequest = $request->password;

        if (empty($emailRequest)) {
            return false;
        } else {
            if($emailRequest === $user->email){
                return true;
            } else {
                return false;
            }
        }

        if (empty($passwordRequest)) {
            return false;
        } else {
            if($passwordRequest === $user->password){
                return true;
            } else {
                return false;
            }
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
