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
            $response = false;
            return json_encode($response);
        } else {
            if ($emailRequest === $user->email) {
                $response = true;
                return json_encode($response);
            } else {
                $response = false;
                return json_encode($response);
            }
        }

        if (empty($passwordRequest)) {
            $response = false;
            return json_encode($response);
        } else {
            if ($passwordRequest === $user->password) {
                $response = true;
                return json_encode($response);
            } else {
                $response = false;
                return json_encode($response);
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
